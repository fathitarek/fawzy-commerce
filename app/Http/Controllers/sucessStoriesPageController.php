<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucess_stories;
use App\Models\competitions;
use App\Models\bank_information;
use App\Models\live_certificate;
use App\Models\projects;
use App\galleryProjects;

class sucessStoriesPageController extends Controller
{
    public function sucessStoriesPage(){

        $sucess_stories=sucess_stories::latest()->get();
        //$settings=settings::get();
       // dd($sucess_stories);
        return view('front.successful-stories')->with('sucess_stories',$sucess_stories);
    }

    public function innerSucessStory($id){
        $sucess_stories=sucess_stories::find($id);
        $competitions=competitions::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$id)->get();

        }
        return view('front.inner-success-story')->with('sucess_stories',$sucess_stories)->with('competitions',$competitions)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }
}

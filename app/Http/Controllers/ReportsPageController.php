<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\competitions;
use App\Models\sucess_stories;
use App\Models\bank_information;
use App\Models\live_certificate;
use App\Models\projects;
use App\galleryProjects;
use App\Models\reports;
class ReportsPageController extends Controller
{
    public function reportsPage(){
        $reports=reports::get();
       
        return view('front.partners')->with('reports',$reports);
    }


    public function innerReport($id){

        $reports=reports::find($id);
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }
        $competitions=competitions::latest()->limit(2)->get();
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
       // $projects->images=galleryProjects::where('project_id',$id)->get();

       

    //    return $projects->images[0]->images;
        return view('front.inner-report')->with('reports',$reports)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\competitions;
use App\Models\sucess_stories;
use App\Models\bank_information;
use App\Models\live_certificate;
use App\Models\projects;
use App\galleryProjects;
use App\Models\shop_items;
use App\Models\categories;

class infoBankPageController extends Controller
{
   
    public function infoBanksPage(){
        $info_banks=bank_information::get();
        // $bank_information=bank_information::find($id);
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $competitions=competitions::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }

        return view('front.info_bank')->with('info_banks',$info_banks)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('live_certificate',$live_certificate)->with('projects',$projects);;
    }

    
    public function innerInfoBank($id){
        $bank_information=bank_information::find($id);
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $competitions=competitions::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$id)->get();

        }

       // dd($sucess_stories);
        return view('front.inner-bank_info')->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    } 
}

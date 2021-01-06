<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\competitions;
use App\Models\sucess_stories;
use App\Models\bank_information;
use App\Models\live_certificate;
use App\Models\projects;
use App\galleryProjects;

class competitionsPageController extends Controller
{
    public function competitionsPage(){
        $competitions=competitions::get();
        return view('front.competition')->with('competitions',$competitions);
    }

    
    public function innerCompetition($id){
        $competitions=competitions::find($id);
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$id)->get();

        }

       // dd($sucess_stories);
        return view('front.inner-competition')->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }
    public function search(Request $request){
        // check if ajax request is coming or not
        if($request->ajax()) {
            // select country name from database
            $data = competitions::where('name_en', 'LIKE', $request->word.'%')
                ->get();
            // declare an empty array for output
            $output = '';
            // if searched countries count is larager than zero
            if (count($data)>0) {
                // concatenate output to the array
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                // loop through the result array
                foreach ($data as $row){
                    // concatenate output to the array
                    $output .= '<li class="list-group-item"> <a style="color: black;"  href="../inner-competition/'.$row->id.'" >'.$row->name_en.'</a></li>';
                }
                // end of output
                $output .= '</ul>';
            }
            else {
                // if there's no matching results according to the input
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
            // return output result array
            return $output;
        }
    }
}

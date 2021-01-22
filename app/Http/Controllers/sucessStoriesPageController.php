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
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }
        return view('front.inner-success-story')->with('sucess_stories',$sucess_stories)->with('competitions',$competitions)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }

    public function search(Request $request){
        // check if ajax request is coming or not
        if($request->ajax()) {
            // select country name from database
            $data = sucess_stories::where('name_en', 'LIKE', $request->word.'%')
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
                    $output .= '<li class="list-group-item"> <a style="color: black;"  href="../inner-successful-stories/'.$row->id.'" >'.$row->name_en.'</a></li>';
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

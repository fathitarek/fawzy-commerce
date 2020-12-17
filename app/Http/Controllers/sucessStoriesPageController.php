<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucess_stories;

class sucessStoriesPageController extends Controller
{
    public function sucessStoriesPage(){

        $sucess_stories=sucess_stories::latest()->paginate(8);
        //$settings=settings::get();
       // dd($sucess_stories);
        return view('front.successful-stories')->with('sucess_stories',$sucess_stories);
    }

    public function innerSucessStory($id){
        $sucess_stories=sucess_stories::find($id);
        //$settings=settings::get();
       // dd($sucess_stories);
        return view('front.inner-success-story')->with('sucess_stories',$sucess_stories);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\competitions;
use App\Models\sucess_stories;
use App\Models\bank_information;
use App\Models\live_certificate;
use App\Models\projects;
use App\galleryProjects;
use App\Models\blogs;
use App\Models\slider;
class IndexController extends Controller
{
   public function index(){
        $sucess_stories=sucess_stories::orderBy('id', 'DESC')->get();
        $sliders=slider::orderBy('slide_order', 'ASC')->get();
        $blogs=blogs::orderBy('id', 'DESC')->take(4)->get();
        $competitions=competitions::orderBy('id', 'DESC')->take(4)->get();
        // return $competitions;
         return view("front.index")->with('sliders',$sliders)->with('sucess_stories',$sucess_stories)->with('blogs',$blogs)->with('competitions',$competitions);
   }
}

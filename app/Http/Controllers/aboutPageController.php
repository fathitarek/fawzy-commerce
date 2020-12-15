<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_us;
class aboutPageController extends Controller
{
    public function aboutPage(){

        $about_us=about_us::get();
        //$settings=settings::get();
        // return $social[0]->facebook;
        return view('front.about')->with('about_us',$about_us);
    }
}

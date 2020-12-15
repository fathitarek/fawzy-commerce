<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\social;
class ContactPageController extends Controller
{
    public function contactPage(){

        $social=social::get();
        $settings=settings::get();
        // return $social[0]->facebook;
        return view('front.contact')->with('settings',$settings)->with('social',$social);
    }
}

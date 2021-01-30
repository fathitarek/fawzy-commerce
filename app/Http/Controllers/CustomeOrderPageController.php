<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\custom_order;
use App\Models\donation;
class CustomeOrderPageController extends Controller
{
    public function index(){

        $custom_order=custom_order::get();
        return view('front.custom_order')->with('custom_order', $custom_order);
    }

    public function donation(){

        $donation=donation::get();
        return view('front.donation')->with('donation', $donation);
    }
    
}

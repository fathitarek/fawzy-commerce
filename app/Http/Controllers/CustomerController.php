<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
    protected function profile()
    {
       $user= Customer::find(Auth::guard('customer')->user()->id);
        return view('front.profile-single-page')->with('user',$user);
    }
}

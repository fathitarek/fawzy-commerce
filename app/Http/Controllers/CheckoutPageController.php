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
use App\Models\carts;
use App\Models\wishlist;
use App\Models\orders;
use App\shopImage;
use Illuminate\Support\Facades\Auth;
use App\Customer;

class CheckoutPageController extends Controller
{
    public function checkoutPage(){
        $total=0;
        if (Auth::guard('customer')->user()) {
            $user= Customer::find(Auth::guard('customer')->user()->id);
            $carts=  carts::where('is_order',0)->where('customer_id',Auth::guard('customer')->user()->id)->get();
            $categories=categories::get();
            $competitions=competitions::latest()->limit(2)->get();
            $sucess_stories=sucess_stories::latest()->limit(2)->get();
            $bank_information=bank_information::latest()->limit(2)->get();
            $live_certificate=live_certificate::latest()->limit(2)->get();
            $projects=projects::latest()->limit(2)->get();
            foreach($projects as $project){
                $project->images=galleryProjects::where('project_id',$project->id)->get();
        }
        foreach($carts as $cart){
            $product= shop_items::find($cart->product_id);
            if ($product->sale_price) {
             $total=$total+$product->sale_price * $cart->quantity;
            }else{
             $total=$total+$product->main_price * $cart->quantity;
 
            }
         }
        return view('front.checkout')->with('user',$user)->with('carts',$carts)->with('total',$total)->with('categories',$categories)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }else{
        return redirect()->back()->with('success', 'successfully ');
    }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishlist;
use App\Models\competitions;
use App\Models\sucess_stories;
use App\Models\bank_information;
use App\Models\live_certificate;
use App\Models\projects;
use App\galleryProjects;
use App\Models\shop_items;
use Illuminate\Support\Facades\Auth;
class WishlistsController extends Controller
{
    public function addToWishlist($product_id,$customer_id){
        $wishlists=  wishlist::where('product_id',$product_id)->where('customer_id',$customer_id)->get();
            foreach($wishlists as $wishlist){
                wishlist::destroy($wishlist->id);
            }
       return  wishlist::create([
            'product_id' => $product_id,
            'customer_id' => $customer_id,
        ]);
    }
    public function deleteWishlist($id){
        wishlist::destroy($id);
        return redirect("my-cart");
   }

   
   public function getWishlist(){
    //$total=0;
    // return Auth::guard('customer')->user()->name;
   // $categories=categories::get();
    $competitions=competitions::latest()->limit(2)->get();
    $sucess_stories=sucess_stories::latest()->limit(2)->get();
    $bank_information=bank_information::latest()->limit(2)->get();
    $live_certificate=live_certificate::latest()->limit(2)->get();
    $projects=projects::latest()->limit(2)->get();
    foreach($projects as $project){
        $project->images=galleryProjects::where('project_id',$project->id)->get();

    }

    $wishlists=  wishlist::where('customer_id',Auth::guard('customer')->user()->id)->get();
    foreach($wishlists as $wishlist){
        $wishlist->product=shop_items::find($wishlist->product_id);

    }
    // return $wishlists;
    return view('front.wishlist')->with('wishlists',$wishlists)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
 }
}

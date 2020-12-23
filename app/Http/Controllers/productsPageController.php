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
use Illuminate\Support\Facades\Auth;

class productsPageController extends Controller
{
    public function productsPage(){
        $categories=categories::get();

if (isset($_GET['order'])||isset($_GET['price'])||isset($_GET['sub_category_id'])||isset($_GET['category_id'])) { //search
    if (isset($_GET['order'])&&$_GET['order']==1) {
    $shop_items=shop_items::latest();
    }
    elseif (isset($_GET['order'])&&$_GET['order']==0) {
        $shop_items=shop_items::oldest();
        }else{
            $shop_items=shop_items::latest();
        }
    if (isset($_GET['category_id'])&&$_GET['category_id']!=0) {
        $shop_items=$shop_items->where('category_id',$_GET['category_id']);
    }

    if (isset($_GET['sub_category_id'])&&$_GET['sub_category_id']!=0) {
       
        $shop_items=$shop_items->where('sub_category_id',$_GET['sub_category_id']);
    }

    if (isset($_GET['price'])&&$_GET['price']==1) {
        $shop_items=$shop_items->orderBy('sale_price', 'DESC');
    }
    if (isset($_GET['price'])&&$_GET['price']==0) {
        $shop_items=$shop_items->orderBy('sale_price', 'ASC');
    }
    $shop_items=$shop_items->paginate(12);
}else{
    $shop_items=shop_items::latest()->paginate(12);
}
foreach($shop_items as $product){
if(isset(Auth::guard('customer')->user()->id)){
    $product->cart= carts::where('customer_id',Auth::guard('customer')->user()->id)->where('product_id',$product->id)->count();
 }
}
// return $shop_items;

        // return $categories;
       
        $competitions=competitions::latest()->limit(2)->get();
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }
        return view('front.products')->with('categories',$categories)->with('shop_items',$shop_items)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
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




    public function productsByCategoryPage($category_id){
        $categories=categories::get();
        // return $categories;
        $shop_items=shop_items::latest()->where('category_id',$category_id)->paginate(12);
        $competitions=competitions::latest()->limit(2)->get();
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }
        return view('front.products')->with('categories',$categories)->with('shop_items',$shop_items)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }

    public function productsBySubCategoryPage($sub_category_id){
        $categories=categories::get();
        // return $categories;
        $shop_items=shop_items::latest()->where('sub_category_id',$sub_category_id)->paginate(12);
        $competitions=competitions::latest()->limit(2)->get();
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }
        return view('front.products')->with('categories',$categories)->with('shop_items',$shop_items)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
    }
    public function productInnerPage($id){
        $categories=categories::get();
        // return $categories;
        $shop_items=shop_items::find($id);
        if(isset(Auth::guard('customer')->user()->id)){
            $shop_items->cart= carts::where('customer_id',Auth::guard('customer')->user()->id)->where('product_id',$shop_items->id)->get();
         }
        $competitions=competitions::latest()->limit(2)->get();
        $sucess_stories=sucess_stories::latest()->limit(2)->get();
        $bank_information=bank_information::latest()->limit(2)->get();
        $live_certificate=live_certificate::latest()->limit(2)->get();
        $projects=projects::latest()->limit(2)->get();
        foreach($projects as $project){
            $project->images=galleryProjects::where('project_id',$project->id)->get();

        }
        return view('front.inner_product')->with('categories',$categories)->with('shop_items',$shop_items)->with('competitions',$competitions)->with('sucess_stories',$sucess_stories)->with('bank_information',$bank_information)->with('live_certificate',$live_certificate)->with('projects',$projects);
   

    }
}

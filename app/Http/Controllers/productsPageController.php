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
use App\shopImage;
use Illuminate\Support\Facades\Auth;

class productsPageController extends Controller {

    public function productsPage() {
        $categories = categories::get();

        if (isset($_GET['order']) || isset($_GET['price']) || isset($_GET['sub_category_id']) || isset($_GET['category_id'])) { //search
            if (isset($_GET['order']) && $_GET['order'] == 1) {
                $shop_items = shop_items::where('publish', 1)->latest();
            } elseif (isset($_GET['order']) && $_GET['order'] == 0) {
                $shop_items = shop_items::where('publish', 1)->oldest();
            } 
            else {
                $shop_items = shop_items::where('publish', 1);
            }
            if (isset($_GET['category_id']) && $_GET['category_id'] != 0) {
                $shop_items = $shop_items->where('category_id', $_GET['category_id']);
            }

            if (isset($_GET['sub_category_id']) && $_GET['sub_category_id'] != 0) {

                $shop_items = $shop_items->where('sub_category_id', $_GET['sub_category_id']);
            }

            if (isset($_GET['price']) && $_GET['price'] == 1) {
                $shop_items = $shop_items->orderBy('main_price', 'DESC')->orderBy('sale_price', 'DESC');
//        $shop_items=$shop_items->addSelect(\DB::raw('IF( main_price, sale_price ) AS current_price'))->orderBy('current_price','DESC');
            }
            if (isset($_GET['price']) && $_GET['price'] == 0) {
//                return 8;
//                $shop_items = $shop_items->orderBy('main_price', 'ASC');
                $shop_items = $shop_items->orderBy('sale_price');
                                $shop_items = $shop_items->orderBy('main_price');

//                ->orderBy(\DB::raw('sale_price IS NOT NULL, sale_price'), 'ASC');
//        $shop_items=$shop_items->orderBy('sale_price',  'ASC');
//                )->orderBy('main_price', 'ASC');
//        $shop_items=$shop_items->addSelect(\DB::raw('IF( main_price, sale_price ) AS current_price'))->orderBy('current_price','ASC');
            }
//            return 0;
            $shop_items = $shop_items->where('publish', 1)->paginate(12);
        } else {
            $shop_items = shop_items::latest()->where('publish', 1)->paginate(12);
        }
        foreach ($shop_items as $product) {
            if (isset(Auth::guard('customer')->user()->id)) {
                $product->cart = carts::where('customer_id', Auth::guard('customer')->user()->id)->where('product_id', $product->id)->count();
            }
        }
// return $shop_items;
        // return $categories;

        $competitions = competitions::latest()->limit(2)->get();
        $sucess_stories = sucess_stories::latest()->limit(2)->get();
        $bank_information = bank_information::latest()->limit(2)->get();
        $live_certificate = live_certificate::latest()->limit(2)->get();
        $projects = projects::latest()->limit(2)->get();
        foreach ($projects as $project) {
            $project->images = galleryProjects::where('project_id', $project->id)->get();
        }
        return view('front.products')->with('categories', $categories)->with('shop_items', $shop_items)->with('competitions', $competitions)->with('sucess_stories', $sucess_stories)->with('bank_information', $bank_information)->with('live_certificate', $live_certificate)->with('projects', $projects);
    }

    public function innerCompetition($id) {
        $competitions = competitions::find($id);
        $sucess_stories = sucess_stories::latest()->limit(2)->get();
        $bank_information = bank_information::latest()->limit(2)->get();
        $live_certificate = live_certificate::latest()->limit(2)->get();
        $projects = projects::latest()->limit(2)->get();
        foreach ($projects as $project) {
            $project->images = galleryProjects::where('project_id', $id)->get();
        }

        // dd($sucess_stories);
        return view('front.inner-competition')->with('competitions', $competitions)->with('sucess_stories', $sucess_stories)->with('bank_information', $bank_information)->with('live_certificate', $live_certificate)->with('projects', $projects);
    }

    public function productsByCategoryPage($category_id) {
        $categories = categories::get();
        // return $categories;
        $shop_items = shop_items::latest()->where('category_id', $category_id)->where('publish', 1)->paginate(12);
        $competitions = competitions::latest()->limit(2)->get();
        $sucess_stories = sucess_stories::latest()->limit(2)->get();
        $bank_information = bank_information::latest()->limit(2)->get();
        $live_certificate = live_certificate::latest()->limit(2)->get();
        $projects = projects::latest()->limit(2)->get();
        foreach ($projects as $project) {
            $project->images = galleryProjects::where('project_id', $project->id)->get();
        }
        return view('front.products')->with('categories', $categories)->with('shop_items', $shop_items)->with('competitions', $competitions)->with('sucess_stories', $sucess_stories)->with('bank_information', $bank_information)->with('live_certificate', $live_certificate)->with('projects', $projects);
    }

    public function productsBySubCategoryPage($sub_category_id) {
        $categories = categories::get();
        // return $categories;
        $shop_items = shop_items::latest()->where('sub_category_id', $sub_category_id)->where('publish', 1)->paginate(12);
        $competitions = competitions::latest()->limit(2)->get();
        $sucess_stories = sucess_stories::latest()->limit(2)->get();
        $bank_information = bank_information::latest()->limit(2)->get();
        $live_certificate = live_certificate::latest()->limit(2)->get();
        $projects = projects::latest()->limit(2)->get();
        foreach ($projects as $project) {
            $project->images = galleryProjects::where('project_id', $project->id)->get();
        }
        return view('front.products')->with('categories', $categories)->with('shop_items', $shop_items)->with('competitions', $competitions)->with('sucess_stories', $sucess_stories)->with('bank_information', $bank_information)->with('live_certificate', $live_certificate)->with('projects', $projects);
    }

    public function productInnerPage($id) {
        $categories = categories::get();
        // return $categories;
        $shop_items = shop_items::find($id);
        if (isset(Auth::guard('customer')->user()->id)) {
            $shop_items->cart = carts::where('customer_id', Auth::guard('customer')->user()->id)->where('product_id', $id)->get();
            $shop_items->wishlist = wishlist::where('customer_id', Auth::guard('customer')->user()->id)->where('product_id', $id)->count();
        }
        // return $shop_items;
        $competitions = competitions::latest()->limit(2)->get();
        $sucess_stories = sucess_stories::latest()->limit(2)->get();
        $bank_information = bank_information::latest()->limit(2)->get();
        $live_certificate = live_certificate::latest()->limit(2)->get();
        $projects = projects::latest()->limit(2)->get();
        foreach ($projects as $project) {
            $project->images = galleryProjects::where('project_id', $project->id)->get();
        }
        // $shop_items->images= shopImage::where('',$id)->get();
        return view('front.inner_product')->with('categories', $categories)->with('shop_items', $shop_items)->with('competitions', $competitions)->with('sucess_stories', $sucess_stories)->with('bank_information', $bank_information)->with('live_certificate', $live_certificate)->with('projects', $projects);
    }

    public function search(Request $request) {
        // check if ajax request is coming or not
        if ($request->ajax()) {
            // select country name from database
            $data = shop_items::where('name_en', 'LIKE', $request->word . '%')->where('publish', 1)
                    ->get();
            // declare an empty array for output
            $output = '';
            // if searched countries count is larager than zero
            if (count($data) > 0) {
                // concatenate output to the array
                $output = '<ul class="list-group" style=" width:200px;margin-top:0.5rem;">';
                // loop through the result array
                foreach ($data as $row) {
                    // concatenate output to the array
                    $output .= '<li class="list-group-item" style="width: 200px;text-align:center"> <a style="color: black;"  href="../inner-product/' . $row->id . '" >' . $row->name_en . '</a></li>';
                }
                // end of output
                $output .= '</ul>';
            } else {
                // if there's no matching results according to the input
                $output .= '<li class="list-group-item">' . 'No results' . '</li>';
            }
            // return output result array
            return $output;
        }
    }

}

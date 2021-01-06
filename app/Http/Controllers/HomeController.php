<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Customer;
use App\Models\shop_items;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $number_of_orders=orders::count();
       // $number_of_new_orders=orders::where('website_id',$_SESSION['website_id'])->where('is_read',0)->count();

        $number_of_users=Customer::count();

        // select `school`.*, `MAX(student`.`score)` as `best_score` from `serije` inner join `student` on `student`.`school_id` = `school`.`id` order by `best_score` desc

    $highest_products=\DB::select('SELECT product_id, SUM(quantity) as pices ,COUNT(*) as count FROM carts  where carts.is_order=1  GROUP BY product_id order by `pices` desc');
    $highest_wishlists=\DB::select('SELECT product_id ,COUNT(*) as count FROM wishlists  GROUP BY product_id order by `count` desc');
// $highest_users_order=\DB::select('SELECT user_id, SUM(`total_price_after_promo`) as total_price ,COUNT(*) as count FROM orders  GROUP BY `user_id` order by `total_price` desc');

    foreach ($highest_products as $key => $highest_product) {
        $highest_product->product  = shop_items::find($highest_product->product_id);
    }
    foreach ($highest_wishlists as $key => $highest_wishlist) {
        $highest_wishlist->product  = shop_items::find($highest_wishlist->product_id);
     }
    //  foreach ($highest_users_order as $key => $highest_user_order) {
    //     $highest_user_order->user  = User::find($highest_user_order->user_id);
    // }

     // return $highest_wishlists;
    return view('home')->with('highest_wishlists', $highest_wishlists)->with('number_of_orders',$number_of_orders)->with('number_of_users',$number_of_users)->with('highest_products', $highest_products);
   
        // return view('home');
    }
}

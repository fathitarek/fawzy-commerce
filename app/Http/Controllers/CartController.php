<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carts;
use Illuminate\Support\Facades\Auth;
use App\Models\shop_items;
class CartController extends Controller
{
    public function addToCart($product_id,$customer_id,$quantity){

        $carts=  carts::where('is_order',0)->where('product_id',$product_id)->where('customer_id',$customer_id)->get();
foreach($carts as $cart){
    carts::destroy($cart->id);
}
       return  carts::create([
            'product_id' => $product_id,
            'customer_id' => $customer_id,
            'quantity' =>$quantity,
        ]);
    }
      
    
    public function getCart(){
        $total=0;
        // return Auth::guard('customer')->user()->name;
        $carts=  carts::where('is_order',0)->where('customer_id',Auth::guard('customer')->user()->id)->get();
        foreach($carts as $cart){
           $product= shop_items::find($cart->product_id);
           if ($product->sale_price) {
            $total=$total+$product->sale_price * $cart->quantity;
           }else{
            $total=$total+$product->main_price * $cart->quantity;

           }
        }
        return view('front.cart')->with('carts',$carts)->with('total',$total);
     }

     public function deleteCart($id){
          carts::destroy($id);
          return redirect("my-cart");
     }

    }

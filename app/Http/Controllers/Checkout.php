<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Cart;

class Checkout extends Controller
{
    public function checkout(){

        $categories  = Category::with('subcategories')->get();

        $cartCollection = Cart::getContent();

        $checkoutTotal = [];

         foreach($cartCollection as $cart){

             array_push($checkoutTotal ,$cart->price*$cart->quantity);
         }

         $checkoutTotalSum = array_sum($checkoutTotal);

         $sess = session()->get('coupon');

        return view('shop.checkout', compact('categories','cartCollection','checkoutTotalSum','sess'));
    }
}

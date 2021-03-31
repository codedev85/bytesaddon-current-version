<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class HomePage extends Controller
{
    public function index(){

        $categories  = Category::with('subcategories')->get();
        $products    = Product::take(8)->get();
        $randomProducts = Product::inRandomOrder()->take(8)->get();
        $cartCollection = Cart::getContent();
        $limitedOfferProduct = Product::inRandomOrder()->take(8)->get();
//dd($cartCollection);
        return view('shop.index' , compact('categories','products','cartCollection' , 'limitedOfferProduct','randomProducts'));
    }



}

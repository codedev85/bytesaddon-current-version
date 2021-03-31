<?php

namespace App\Http\Controllers;

use App\Models\Category as Cat;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart as ProductCart;

class Cart extends Controller
{
    public function addToCart($id){
        $cartCollection = ProductCart::getContent();
        dd(  $cartCollection );
        $product = Product::where('id',$id)->with('category')->firstorfail();
        $rowId  = $product->id;
//        $qty     = $request->input('qty');

//        if($qty){
//            $qty;
//        }else{
            $qty = 1;

//        }
//       $cart = ProductCart::session($product);

        $cart = ProductCart::add(array(
            'id'         => $rowId,
            'name'       => $product->name,
            'price'      => $product->amount,
            'quantity'   => $qty,
            'attributes' => array([
            ]),
            'associatedModel' => $product
        ));

        if($cart){
            return response()->json([ 'success' => true , 'message' => 'Product added to cart']);
//          return back();
        }
    }


    public function cartPage(){


        $categories  = Cat::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        return view('shop.cart' , compact('categories'));
    }
}

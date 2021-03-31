<?php

namespace App\Http\Controllers;

use App\Models\Category as Cat;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart($id){

        $product = Product::where('id',$id)->with('category')->firstorfail();
        $rowId  = $product->id;
        $qty = 1;

        $cart = Cart::add(array(
            'id'         => $rowId,
            'name'       => $product->name,
            'price'      => $product->amount,
            'image'      => $product->image1,
            'quantity'   => $qty,
            'attributes' => array([
            ]),
            'associatedModel' => $product
        ));

        $notification = array(
            'message' => 'Product added to Cart.',
            'alert-type' => 'success'
        );

        if($cart){

            $cartCollection = Cart::getContent();

            $cartCollectionCount = $cartCollection->count();
            toastr()->success('Product added to cart!');

            return response()->json([ 'success' => true , 'message' => $notification , 'cart'=> $cartCollectionCount]);

        }
    }


    public function removeCart($id){

        Cart::remove($id);

        if(session()->has('coupon')){

            session()->forget('coupon');
        }


        toastr()->success('Product Removed from cart');

        $notification = array(
            'message' => 'Product removed from cart.',
            'alert-type' => 'success'
        );

        return response()->json([ 'success' => true , 'message' => $notification]);
//        return back()->with($notification);
    }

    public function cartProduct(Request $request ,$id){

        $qty = $request['qty'];


        $productId = $request['productId'];

        $product = Product::where('id',$id)->with('category')->firstorfail();
        // to later check if the product is in stock or out of stock ;
        //10 will be the value of stock remaining
//        if($qty > 10){
//
//            toastr()->error('We are out of stock');
//            return response()->json(['error'=> true]);
//        }

        $rowId  = $product->id;
        $qty = $qty;

        $cart = Cart::add(array(
            'id'         => $rowId,
            'name'       => $product->name,
            'price'      => $product->amount,
            'image'      => $product->image1,
            'quantity'   => $qty,
            'attributes' => array([
            ]),
            'associatedModel' => $product
        ));

        $notification = array(
            'message' => 'Product added to Cart.',
            'alert-type' => 'success'
        );

        if($cart){

            $cartCollection = Cart::getContent();

            $cartCollectionCount = $cartCollection->count();

            toastr()->success('Product added to cart!');

            return response()->json([ 'success' => true , 'message' => $notification , 'cart'=> $cartCollectionCount]);

        }

    }

    public function cartPage(){


        $categories  = Cat::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        return view('shop.cart' , compact('categories','cartCollection'));
    }
}

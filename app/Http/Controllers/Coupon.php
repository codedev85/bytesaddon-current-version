<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon as CP;
class Coupon extends Controller
{
    public function store(Request $request){

        $coupon = CP::where('code', $request->code)->first();

        if(!$coupon){

            toastr()->error('Coupon Code is invalid!');

            return response()->json([ 'success' => false , 'message' => 'Coupon code is invalid']);

        }



        if($coupon->type == 'fixed'){

            /*****
             * Condition
             * If the item is greater than 1
             * and if the the carted item value is greater than $50 return true else return false;
             *
             */


            if($request->c_qty < 1){

                toastr()->error('You need to cart more item to apply code');

                return response()->json([ 'success' => false , 'message' => 'The Cart Item  quantity needs to be more than 1 item before you cn apply coupon']);
            }

            if($request->amount < 50 ){

                toastr()->error('Cart item value needs to be greater than 2000!');
                return response()->json([ 'success' => false , 'message' => 'The Item carted needs to have a value greater than $50']);
            }


        }elseif($coupon->type == 'percent'){

            /***Condition
             *
            If the Cart item is greater than 2
            if the cart item s greater than  $100 then return true *
             *
             *
             */

            if($request->c_qty < 2){

                return response()->json([ 'success' => false , 'message' => 'The Cart Item  quantity needs to be more than 1 item before you cn apply coupon']);
            }

            if($request->amount < 100 ){

                return response()->json([ 'success' => false , 'message' => 'The Item carted needs to have a value greater than $100']);
            }

        }



        session()->put('coupon', [
            'name' => $coupon->code,
            'type'  =>$coupon->type,
            'discount' => $coupon->discount($request->amount),
        ]);
        toastr()->success('Coupon applied successfully');
        return response()->json([ 'success' => true , 'message' => 'Coupon applied to product successfully ']);
    }

    public function addCoupon(){

        return view('coupon.view');
    }

    public function storeCoupon(Request $request){

        $data =  request()->validate([
            'value' => 'required',
            'type'  => 'required',
            'code' => 'required',
        ]);

        CP::create($data);
        alert()->success('Coupon added successfully', 'Success')->autoclose(5000);

        return back();
    }

    public function allCoupon(){

        $coupons =  CP::get();

        return view('coupon.all', compact('coupons'));
    }

    public function remove(){

        session()->forget('coupon');
        toastr()->success('Discount removed successfully');
        return response()->json([ 'success' => true , 'message' => 'Discount has been removed for your carted item']);
    }

}

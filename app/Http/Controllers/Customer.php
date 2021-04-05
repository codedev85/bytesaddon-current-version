<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class Customer extends Controller
{
    //
    public function index(){

        $customers = User::simplePaginate(20);
        return view('Customer.customer',compact('customers'));
    }

    public function show($id){

        $customer = User::where('id',$id)->first();
        $orders = Order::where('user_id',$customer->id)->with('product')->simplePaginate();

        return view('Customer.show',compact('customer','orders'));
    }
}

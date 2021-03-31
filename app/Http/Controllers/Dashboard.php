<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;


class Dashboard extends Controller
{
    public function dashboard(){

       $orderSum = Order::pluck('product_amount')->sum();
       $todaysOrder = Order::whereDate('created_at', Carbon::today())->pluck('product_amount')->sum();
       $weeklysales = Order::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->pluck('product_amount')->sum();
       $productsCount = Product::all()->count();

       $recentOrders = Order::orderBy('created_at','desc')->take(5)->get();
       $totalOrderCount = Order::get()->count();


        return view('dashboard.dashboard' ,compact('orderSum','todaysOrder','weeklysales','productsCount','recentOrders','totalOrderCount'));
    }
}

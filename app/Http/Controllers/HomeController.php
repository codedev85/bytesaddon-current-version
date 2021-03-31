<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Order;
use Cart;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories  = Category::with('subcategories')->get();

        $cartCollection = Cart::getContent();

        $orders = Order::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();

        return view('Users-account.dashboard' , compact('categories','cartCollection','orders'));
    }
}

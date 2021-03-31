<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as Cat;
use App\Models\Product;
use Cart;
use DB;

class Category extends Controller
{


    public function indexCat(){

           $cats =     Cat::all();

           return view('category.index',compact('cats'));
    }



    public function category(){

        return view('category.add');
    }


    public function store(Request $request){

           $data = request()->validate([
                'category' => 'required'
            ]);

            $cat =   Cat::create($data);

            if($cat){

                alert()->success('Category created successfully', 'Successful')->autoclose(3500);

            }

            return back();
    }

    public function edit($id){

        dd($id);
    }


    public function subcategoryfetch($id){

            $subs = DB::table("category_sub")
                ->where("category_id",$id)
                ->pluck('sub_category',"id");


            return json_encode($subs);

    }

    public function productCategory($id){

        $products = Product::where('category_id', $id)->paginate(12);
        $categories  = Cat::with('subcategories')->get();
        $cartCollection = Cart::getContent();

        return view('shop.category',compact('products','categories','cartCollection'));
    }
    public function productSubCategory($id){

        $products = Product::where('category_id', $id)->paginate(12);
        $categories  = Cat::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        return view('shop.category',compact('products','categories','cartCollection'));
    }


    public function allCats(){

        $products = Product::paginate(12);
        $categories  = Cat::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        return view('shop.category',compact('products','categories','cartCollection'));
    }

}

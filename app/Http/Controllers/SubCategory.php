<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory as SubCat;

class SubCategory extends Controller
{

    public function index(){

        $subcats = SubCat::all();

        return view('subcategory.index', compact('subcats'));
    }


    public function add(){

        $categories = Category::all();

        return view('subcategory.add', compact('categories'));
    }


    public function store(Request $request){

       $data = request()->validate([
                   'category_id' => 'required|integer',
                   'sub_category' => 'required',
               ]);

      $subcat = SubCat::create($data);

        if($subcat){

            alert()->success('SubCategory created successfully', 'Successful')->autoclose(3500);

        }

        return back();
    }
}

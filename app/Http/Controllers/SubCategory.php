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

    public function edit($id){

        $cat =  SubCat::where('id',$id)->with('category')->first();
 
         return response()->json([
             'data' => $cat
         ]);

     }
 
     public function update(Request $request , $id){
         
         SubCat::where('id',$id)->update([
             'sub_category' => $request['subcat']
         ]);
 
         return response()->json([
             'success'=> true,
         ]);
 
     }
}

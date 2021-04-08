<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Prod;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Cart;


class Product extends Controller

{

    public function add(){

      $categories = Category::get();

        return view('product.add' , compact('categories'));
    }

    public function store(Request $request)
    {

                 request()->validate([
                        'name'          => 'required',
                        'amount'        => 'required|integer',
                        'description'   =>  'required',
                        'category'      =>  'required|integer',
                        'quantity'      =>   'required|integer',
                 ]);

            if ($request->hasFile('image1') && $request->hasFile('image2') && $request->hasFile('image3')) {

//                $this->validate($request, [
//                    'image1' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
//                    'image2' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
//                    'image3' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
//                ]);

                $image = $request->file('image1');
                $ext = $image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $resize = Image::make($image_resize)->fit(300, 300)->encode($ext);
                $hash = md5($resize->__toString());
                $path = "{$hash}.$ext";
                $url = 'product/' . $path;
                Storage::put($url, $resize->__toString());

                $image2 = $request->file('image2');
                $ext2 = $image2->getClientOriginalExtension();
                $image_resize2 = Image::make($image2->getRealPath());
                $resize2 = Image::make($image_resize2)->fit(300, 300)->encode($ext2);
                $hash2 = md5($resize2->__toString());
                $path2 = "{$hash2}.$ext2";
                $url2 = 'product/' . $path2;
                Storage::put($url2, $resize2->__toString());

                $image3 = $request->file('image3');
                $ext3 = $image3->getClientOriginalExtension();
                $image_resize3 = Image::make($image3->getRealPath());
                $resize3 = Image::make($image_resize3)->fit(300, 300)->encode($ext3);
                $hash3 = md5($resize3->__toString());
                $path3 = "{$hash3}.$ext3";
                $url3 = 'product/' . $path3;
                Storage::put($url3, $resize3->__toString());

            }

            $product = new Prod;
            $product->name             = $request->name;
            $product->slug             = $this->createSlug($request->name);
            $product->description      = $request->description;
            $product->amount           = $request->amount;
            $product->category_id      = $request->category;
            $product->category_sub_id  = $request->sub_category;
            // $product->quantity         = $request->quantity;
            $product->image1           = $url;
            $product->image2           = $url2;
            $product->image3           = $url3;
            $product->save();

            if($product){

                alert()->success('Product created successfully', 'Successful')->autoclose(3500);
                return back();
            }

    }


    public function edit($slug){

        $product =   Prod::where('slug', $slug)->first();
        $categories = Category::get();

        return view('product.edit', compact('product','categories'));

    }

    public function update(Request $request, $slug){
      
        $updateProduct          =  Prod::where('slug',$slug)->first();
                                   Prod::where('slug',$slug)->update([
                                    'name'        => $request->name,
                                    'amount'      => $request->amount,
                                    'description' => $request->description,
                                    'category_id' => $request->category,
                                    'category_sub_id' => !is_null($request->sub_category) ? $request->sub_category : $updateProduct->category_sub_id,
                                ]);

                               
                        if($request->hasFile('image1') && $request->hasFile('image2') && $request->hasFile('image3')){
                        
                            //                $this->validate($request, [
                            //                    'image1' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
                            //                    'image2' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
                            //                    'image3' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
                            //                ]);

                                        $image = $request->file('image1');
                                        $ext = $image->getClientOriginalExtension();
                                        $image_resize = Image::make($image->getRealPath());
                                        $resize = Image::make($image_resize)->fit(300, 300)->encode($ext);
                                        $hash = md5($resize->__toString());
                                        $path = "{$hash}.$ext";
                                        $url = 'product/' . $path;
                                        Storage::put($url, $resize->__toString());
                        
                                        $image2 = $request->file('image2');
                                        $ext2 = $image2->getClientOriginalExtension();
                                        $image_resize2 = Image::make($image2->getRealPath());
                                        $resize2 = Image::make($image_resize2)->fit(300, 300)->encode($ext2);
                                        $hash2 = md5($resize2->__toString());
                                        $path2 = "{$hash2}.$ext2";
                                        $url2 = 'product/' . $path2;
                                        Storage::put($url2, $resize2->__toString());
                        
                                        $image3 = $request->file('image3');
                                        $ext3 = $image3->getClientOriginalExtension();
                                        $image_resize3 = Image::make($image3->getRealPath());
                                        $resize3 = Image::make($image_resize3)->fit(300, 300)->encode($ext3);
                                        $hash3 = md5($resize3->__toString());
                                        $path3 = "{$hash3}.$ext3";
                                        $url3 = 'product/' . $path3;
                                        Storage::put($url3, $resize3->__toString());
                                       
                                        $updateProduct->update([
                                            'image1' => $url,
                                            'image2' => $url2,
                                            'image3' => $url3
                                        ]);
                                 
                        
                        }
                        
                alert()->success('Product updated successfully', 'Successful')->autoclose(3500);

                return back();

    }


    public function destroy($slug){

        Prod::where('slug',$slug)->delete();

        alert()->success('Product deleted  successfully', 'Successful')->autoclose(3500);

        return back();

    }


    public function createSlug($title, $id = 0)
    {
        $slug = str_slug($title);
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        $i = 1;

        $is_contain = true;
        do {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                $is_contain = false;
                return $newSlug;
            }
            $i++;
        } while ($is_contain);

    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Prod::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    public function quickview($id){

       $product= Prod::where('id',$id)->with('category')->firstorfail();

        return response()->json([
            'data' => $product,
        ]);
    }

    public function singleProduct($id,$slug){

        $product =  Prod::where('id' ,$id)->orWhere('slug',$slug)->firstorfail();
        $categories  = Category::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        $relatedProduct = Prod::where('category_id',$product->category['id'])->inRandomOrder()->take(16)->get();

      return view('shop.single-product' , compact('categories','product', 'cartCollection','relatedProduct'));
    }

    public function allProduct(){

        $products = Prod::simplePaginate(30);
        return view('product.index', compact('products'));
    }
    public function fetchProduct(Request $request){

        if ($request->ajax()) {
            $data = Prod::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function productSearch(Request $request){

      $searchItem =  Prod::query()
            ->whereLike('name', $request['search'])
            ->simplePaginate(20);
      $searchCount = count( $searchItem );


      return view('product.search-item',compact('searchItem','searchCount'));
    }

    public function pushSales($id){

       $data = Prod::where('id',$id)->first();

       return response()->json([
           'data' => $data,
       ]);
    }

    public function updatePushSales(Request $request , $id){

       $data =  Prod::where('id',$id)->update([
            'push_sales'=> $request['sales'],
        ]);
        
        return response()->json([
            'data' => $data,
        ]);
    }
}

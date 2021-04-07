<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Front\HomePage::class , 'index'])->name('shop.index');

//product quick view
Route::get('product/{id}/view', [App\Http\Controllers\Product::class , 'quickview'])->name('product.quickview');
//slug
Route::get('product/{id}-{slug}',[App\Http\Controllers\Product::class ,'singleProduct'])->name('single.product');

//add to cart
Route::get('/cart/{id}',[App\Http\Controllers\CartController::class,'addToCArt'])->name('add.cart');
//single page carting  route
Route::post('/cart/{id}/product',[App\Http\Controllers\CartController::class,'cartProduct'])->name('add.cart');
//remove Cart
Route::get('/cart/{id}/remove', [App\Http\Controllers\CartController::class , 'removeCart'])->name('remove.cart');



Route::get('/cart',[App\Http\Controllers\CartController::class, 'cartPage'])->name('cart');

//all category
Route::get('/category/', [App\Http\Controllers\Category::class ,'allCats'])->name('all.cats');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//coupon
Route::post('/coupon/store' ,[App\Http\Controllers\Coupon::class,'store'])->name('coupon.store');
Route::get('/coupon/remove' ,[App\Http\Controllers\Coupon::class,'remove'])->name('coupon.remove');

Route::group(['middleware' => ['auth']], function () {
    //checkout
    Route::get('/checkout',[App\Http\Controllers\Checkout::class ,'checkout'])->name('checkout');

  //make order
    Route::post('/order/',[App\Http\Controllers\Order::class, 'order'])->name('order');

    //payment page
    Route::get('/payment/page',[App\Http\Controllers\Order::class,'addPayment'])->name('payment.page');

    //invoice
    Route::get('/invoice/{id}',[App\Http\Controllers\Invoice::class ,'view'])->name('view.invoice');
//
//    //download invoice
    Route::get('/download/pdf/{id}',[App\Http\Controllers\Invoice::class,'downloadPdf'])->name('download.pdf');
});

//admin Login
Route::get('/authenticate/admin', [App\Http\Controllers\AdminLogin::class , 'showAdminLoginForm'])->name('admin');
Route::post('/authenticate/admin', [App\Http\Controllers\AdminLogin::class,'adminLogin'])->name('admin.submit');
//admin route

    Route::group(['middleware' => ['auth:admin'] ], function(){

        Route::get('/dashboard',[App\Http\Controllers\Dashboard::class, 'dashboard'])->name('dashboard');

        Route::get('category/index',[App\Http\Controllers\Category::class , 'indexCat'])->name('category.index');

        Route::get('/add/category' , [App\Http\Controllers\Category::class , 'category'])->name('add.category');
        Route::post('/store/category', [App\Http\Controllers\Category::class ,'store'])->name('store.category');
        Route::get('/category/{id}/edit',[App\Http\Controllers\Category::class, 'edit'])->name('edit.category');
        //categry
        Route::get('/category/{id}', [App\Http\Controllers\Category::class ,'productCategory'])->name('product.category');
        //update
        Route::get('/category/{id}/edit/',[App\Http\Controllers\Category::class, 'edit'])->name('edit.category');
        Route::post('/category/update/{id}/',[App\Http\Controllers\Category::class, 'update'])->name('update.category');
        //fetch sub category
        Route::get('/sub-category/index', [App\Http\Controllers\SubCategory::class ,'index'])->name('index.subcategory');
        Route::get('/sub-category/{id}', [App\Http\Controllers\Category::class ,'productSubCategory'])->name('product.subcategory');
        //add sub category
        Route::get('add/sub-category',[App\Http\Controllers\SubCategory::class,'add'])->name('add.sub.category');
        Route::post('store/sub-category',[App\Http\Controllers\SubCategory::class, 'store'])->name('store.sub.category');

        //update
        Route::get('/subcategory/{id}/edit/',[App\Http\Controllers\SubCategory::class, 'edit'])->name('edit.subcategory');
        Route::post('/subcategory/update/{id}/',[App\Http\Controllers\SubCategory::class, 'update'])->name('update.subcategory');


        //products
        Route::get('/add/product',[App\Http\Controllers\Product::class, 'add'])->name('add.product');
        Route::post('/store/product',[App\Http\Controllers\Product::class, 'store'])->name('store.product');
        Route::get('/all/products',[App\Http\Controllers\Product::class, 'allProduct'])->name('all.products');
        Route::get('/fetch/products',[App\Http\Controllers\Product::class, 'fetchProduct'])->name('fetch.products');
        Route::get('subcategory/fetch/{id}',[App\Http\Controllers\Category::class , 'subcategoryfetch'])->name('ajax.subcategory');

        //edit status
        Route::get('product/{slug}/edit',[App\Http\Controllers\Product::class , 'edit'])->name('edit.product');
        Route::post('/store/product/update/{slug}' , [App\Http\Controllers\Product::class , 'update'])->name('update.product');
        //delete product
        Route::delete('/product/delete/{slug}' , [App\Http\Controllers\Product::class , 'destroy'])->name('delete.product');

        //search Products
        Route::post('/search/products',[App\Http\Controllers\Product::class ,'productSearch'])->name('product.search');

        //search orders
        Route::post('/search/orders',[App\Http\Controllers\Order::class ,'orderSearch'])->name('order.search');
        Route::post('/search/orders/params',[App\Http\Controllers\Order::class ,'orderSearchByParams'])->name('order.search.params');

        //list orders
        Route::get('/list/orders/',[App\Http\Controllers\Order::class , 'ListOrders'])->name('list.orders');

        //customers
        Route::get('/customers',[App\Http\Controllers\Customer::class , 'index'])->name('index');
        Route::get('/customer/{id}',[App\Http\Controllers\Customer::class , 'show'])->name('show');

        //invoice
        Route::get('/order/invoice/{id}',[App\Http\Controllers\Invoice::class ,'viewInvoiceAdmin'])->name('admin.view.invoice');

        //download invoice
        Route::get('/order/download/pdf/{id}',[App\Http\Controllers\Invoice::class,'AdminDownloadPdf'])->name('admin.download.pdf');
        //order status
        Route::get('/order/{id}/status',[App\Http\Controllers\Order::class ,'orderStatus'])->name('order.status');

        Route::post('/update/order/status/{id}',[App\Http\Controllers\Order::class ,'updateOrderStatus'])->name('order.status.update');

        //add admin to handle the account
        Route::get('/add/admin',[App\Http\Controllers\Admin::class,'add'])->name('admin.add');
        Route::post('/store/admin',[App\Http\Controllers\Admin::class,'store'])->name('admin.store');
        Route::get('/all/admin',[App\Http\Controllers\Admin::class,'index'])->name('admin.index');
        Route::get('/admin/{id}/edit',[App\Http\Controllers\Admin::class,'edit'])->name('admin.edit');
        Route::POST('/update/admin/{id}',[App\Http\Controllers\Admin::class,'update'])->name('admin.update');
        Route::get('/admin/delete/{id}',[App\Http\Controllers\Admin::class,'destroy'])->name('admin.destroy');
});

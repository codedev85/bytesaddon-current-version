<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order as OrderRequest;
use Cart;
use App\Classes\General;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sale;
use App\Mail\Orders;
use App\Mail\OrderStatus;

class Order extends Controller
{
    public function ListOrders(){

        $orders = OrderRequest::orderBy('created_at','desc')->simplePaginate(30);

        return view('orders.index',compact('orders'));

    }

    public function orderSearch(Request $request){

        $searchItem =  OrderRequest::query()
            ->whereLike('product_amount', $request['search'])
            ->simplePaginate(20);
        $searchCount = count( $searchItem );

        return view('orders.search-item',compact('searchItem','searchCount'));
    }


    public function orderStatus($id){

        $order = OrderRequest::where('id',$id)->firstorfail();

        return response()->json([
            'data' => $order
        ]);
    }


    public function updateOrderStatus(Request $request ,$id){

        $orderStatus = OrderRequest::where('id',$id)->update([
            'status' => $request['status']
        ]);

        $orders = OrderRequest::where('id',$id)->with('user')->first();
        Mail::to("admin@admin.com")->send(new OrderStatus($orders));
        alert()->success('Status changed successfully', 'Successful')->autoclose(3500);

        return response()->json([
            'success'=> true,
        ]);
    }


    public function order(Request $request){

        if($request['payment'] != null){


            if($request['ship_diff_add'] == "on"){

                dd('worled');

            }else{


                $this->validateOrder();

                //get coupon if avaibale in session
                $sess = session()->get('coupon');

                //fetch cart content
                $cartCollection = Cart::getContent();

                $checkoutTotal = [];

                foreach($cartCollection as $cart){

                    array_push($checkoutTotal ,$cart->price*$cart->quantity);
                }

                $checkoutTotalSum = array_sum($checkoutTotal);

                if(!is_null($sess)){

                    $discountedPrice = $checkoutTotalSum - $sess['discount'];
                }

            $paymentMethod = $this->addPayment($request['payment']);

            if($paymentMethod == "Online_payment"){

                $paymentVal= $checkoutTotalSum - is_null($sess['discount'] ?? 0);

                toastr()->success('Payment made successfully');

                return view('shop.payment-page' , compact('paymentVal'));

            }

            $orderArray = [];
                foreach($cartCollection as $product){

                    $order =   OrderRequest::create([
                        'user_id'           =>  $request['user_id'],
                        'product_id'           =>  $product['id'],
                        'discount_rate'     =>  !is_null($sess['discount'] ?? null) ,
                        'product_amount'    =>  $checkoutTotalSum,
                        'discount_type'     =>  !is_null($sess['type'] ?? null) ,
                        'discount_code'     =>  !is_null($sess['name'] ?? null) ,
                        'discounted_price'  =>  !is_null($discountedPrice ?? null),
                        'phone_number'      =>  $request['phone_number'],
                        'address'           =>  $request['address'],
                        'country'           =>  $request['country'],
                        'state'             =>  $request['state'],
                        'city'              =>  $request['city'],
                        'zip_code'          =>  $request['zip_code'],
                        'payment_method'    =>   $paymentMethod,
                        'order_id'          =>  General::generateReference(),
                    ]);

                  array_push($orderArray , $order);

                }

        
                if($order && is_null(auth()->user()->address)){

                    User::where('id',auth()->user()->id)->update([

                        'phone_number'      =>  $request['phone_number'],
                        'address'           =>  $request['address'],
                        'country'           =>  $request['country'],
                        'state'             =>  $request['state'],
                        'city'              =>  $request['city'],
                        'zip_code'          =>  $request['zip_code'],
                    ]);
                }

                $usersEmail = auth()->user()->email;
        
                //send mail to admin
                Mail::to("admin@admin.com")->send(new Sale($orderArray  ,$usersEmail));

                //send mail to the user
                $user = auth()->user()->name;
           

                Mail::to(auth()->user()->email)->send(new Orders($user, $orderArray));

                $this->flushData();

                toastr()->success('Order sent successfully');

                return redirect('/');

            }

        }else{

            toastr()->error('You need to select a payment method');
            return back();
        }

    }







    private function addPayment($payment){

        if($payment == 'cash_on_delivery'){

            return 'Cash';

        }else{

          return 'Online_payment';
        }

    }





    protected function validateOrder(){

        request()->validate([
            'user_id'      => 'required|integer',
            'phone_number' => 'required',
            'address'      => 'required',
            'country'      => 'required',
            'city'         => 'required',
            'state'        => 'required',
            'zip_code'     => 'required'
        ]);
    }

    protected function flushData()
    {

        if (session()->has('coupon')) {

            session()->forget('coupon');
        }

        $cartCollection = Cart::getContent();

        foreach ($cartCollection as $product){
            Cart::remove($product['id']);
        }

    }
}

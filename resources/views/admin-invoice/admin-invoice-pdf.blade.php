
            <div >
                <div >
                    <img src="{{asset('/assets/images/logo-dark.png')}}"/>
                    <div>
                        <br>
                        Computer Vilage ,Lagos<br>
                        email@bytesaddon.com.ng<br>
                        09000000300 ,090998484884 <br>
                        <hr>
                    </div>

                    <div style="display:flex; justify-content: flex-start;">
                        <span class="text-success">#Order Date: {{$order->created_at->format('D M Y')}}</span>
                    </div>
                    <div style="display:flex; justify-content: flex-start;">
                        <span class="text-success">#Order Ref:</span>
                    </div>
                    <div style="display:flex; justify-content: flex-start;">
                        <span class="text-success">#Order Status: {{Ucfirst($order->status)}}</span>
                    </div>
                    <br><br>

                    <br>
                    <h1><u>Order Details</u></h1>
                    <div>
                        <div>
                            <p><b>Product Name :</b> {{$order->product['name']}} </p>
                            <p><b>Product Description :</b> {{$order->product['description']}}</p>
                            <p><b>Product Category :</b> {{$order->product->category['category']}}</p>
                            <p><b>Product Amount :</b> {{number_format($order->product_amount)}}</p>
                            <p><b>Discount Price : </b> {{number_format($order->discounted_price)}}</p>
                        </div>

                        <hr>
                        <div style="display:flex; justify-content: flex-end;">
                            <h2 class="text-success"><b>#Total: </b> {{number_format($order->product_amount)}}</h2>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>




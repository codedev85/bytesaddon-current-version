
<!--Footer section start-->
<footer class="footer-section section bg-blue">

    <!--Footer bottom start-->
    <div class="footer-bottom section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="footer-logo text-lg-left text-center">
                        <a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="copyright text-center">
                        <p>Copyright &copy;2020 <a href="index.html">Jico</a>. <a href="https://hasthemes.com/" target="_blank">All rights reserved.</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->

</footer>
<!--Footer section end-->

<!-- Modal Area Strat -->
<div class="modal fade quick-view-modal-container" id="single_product_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-lg-image-1">
                                    <div class="lg-image" id="firstImage">
                                    </div>
                                    <div class="lg-image" id="secondImage">
                                    </div>
                                    <div class="lg-image" id="thirdImage">
                                    </div>

                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image" id="firstImageThumb">
{{--                                        <img src="{{asset('/assets/images/product/small-product/s-product-1.jpg')}}" alt="product image thumb">--}}
                                    </div>
                                    <div class="sm-image" id="secondImageThumb">
{{--                                        <img src="{{asset('/assets/images/product/small-product/s-product-2.jpg"')}}" alt="product image thumb">--}}
                                    </div>
                                    <div class="sm-image" id="thirdImageThumb">
                                    </div>
{{--                                    <div class="sm-image"><img src="{{asset('/assets/images/product/small-product/s-product-3.jpg')}}" alt="product image thumb"></div>--}}
{{--                                    <div class="sm-image"><img src="{{asset('/assets/images/product/small-product/s-product-3.jpg')}}" alt="product image thumb"></div>--}}
                                </div>
                            </div>
                            <!--Product Details Left -->
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <!--Product Nav Start-->
                                <div class="product-nav">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!--Product Nav End-->
                                <h2 id="productName"></h2>
                                <div class="single-product-reviews">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <a class="review-link" href="#">(1 customer review)</a>
                                </div>
                                <div class="single-product-price">
                                   <span class="price new-price" >&#8358;</span><span class="price new-price" id="price"></span>
{{--                                    <span class="regular-price">$77.00</span>--}}
                                </div>
                                <div class="product-description">
                                    <p id="description"></p>
                                </div>
                                <div class="single-product-quantity">
                                    <form class="add-quantity" action="#">
                                        <div class="product-quantity">
                                            <input value="1" type="number">
                                        </div>
                                        <div class="add-to-link">
                                            <button class="ht-btn black-btn">Add to cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="wishlist-compare-btn">
                                    <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                    <a href="#" class="add-compare">Compare</a>
                                </div>
                                <div class="product-meta">
                                            <span class="posted-in">
                                                Categories:
                                                <a href="#" id="category"></a>

                                            </span>
                                </div>
                                <div class="single-product-sharing">
                                    <h3>Share this product</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Product Details Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Modal Area End -->

@jquery
@toastr_js
@toastr_render



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

    $('body').on('click', '.productView', function (event) {
         ///qick view starts here
            event.preventDefault();
            var id = $(this).data('id');
            $.get('/product/' + id + '/view', function (data) {
   console.log(data)

                $('#productName').text(data.data.name);
                $('#price').text(data.data.amount);
                $('#description').text(data.data.description);
                $('#category').text(data.data.category.category);


                //target first image
                var img = document.createElement("img");
                img.src = data.data.image1;
                img.alt = 'Product-Image';
                var targetDiv = document.getElementById("firstImage");
                targetDiv.appendChild(img);

              //  target thumbnail image
                var img = document.createElement("img");
                img.src = data.data.image1;
                img.alt = 'Product-Image';
                var targetDivThumb = document.getElementById("firstImageThumb");
                targetDivThumb.appendChild(img);

                //target second image
                var img = document.createElement("img");
                img.src = data.data.image2;
                img.alt = 'Product-Image';
                var targetDivSecond = document.getElementById("secondImage");
                targetDivSecond.appendChild(img);


                //  target thumbnail image
                var img = document.createElement("img");
                img.src = data.data.image2;
                img.alt = 'Product-Image';
                var targetDivSecondThumb = document.getElementById("secondImageThumb");
                targetDivSecondThumb.appendChild(img);

                //target third image
                var img = document.createElement("img");
                img.src = data.data.image3;
                img.alt = 'Product-Image';
                var targetDivThird = document.getElementById("thirdImage");
                targetDivThird.appendChild(img);

                //  target thumbnail image
                var img = document.createElement("img");
                img.src = data.data.image3;
                img.alt = 'Product-Image';
                var targetDivThirdThumb = document.getElementById("thirdImageThumb");
                targetDivThirdThumb.appendChild(img);

            }) .done(function (html) {
                $(".modal").on("hidden.bs.modal", function(){
                    window.location.reload(true);
                });
            });

    });



    $('body').on('click', '.cart', function (event) {
        console.log(event)
        event.preventDefault()
        // var id = $("#staff_id").val();

        $.ajax({
            url:  event.currentTarget.href.split(" ")[0],
            type: "GET",
            data: {
                // id: id,
                // name: fullname,
                // email: email,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data)
                if(data.success){
                     // let alert = $('#notificationText');
                     // alert.text(data.message.message);
                     // $('#notification').show();
                    window.location.reload(true);
                }
            }

            // complete:function(data){
            //     window.location.reload(true);
            // }
        });
    });
    $('body').on('click', '#cartId', function (event) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        event.preventDefault()
        console.log(event)
        // var id = $("#staff_id").val();
        var id = $('#productId').val();
        var qty = $('#qty').val();


        $.ajax({
            url:  '/cart/'+ id + '/product',
            type: "POST",
            data: {
                id: id,
                qty:qty,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data)
                if(data.success){
                    window.location.reload(true);
                }

                if(data.error){
                    window.location.reload(true);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                window.location.reload(true);
            }

            // complete:function(data){
            //     window.location.reload(true);
            // }
        });
    });
    $('body').on('click', '.cartRemove', function (event) {

        event.preventDefault()
        // var id = $("#staff_id").val();

        $.ajax({
            url:  event.currentTarget.href.split(" ")[0],
            type: "GET",
            dataType: 'json',
            success: function (data) {
                console.log(data)
                if(data.success){
                }
            },

            complete:function(data){
                window.location.reload(true);

            }
        });
    });
</script>

{{--<script>--}}
{{--    @if(Session::has('message'))--}}
{{--    var type = "{{ Session::get('alert-type', 'info') }}";--}}
{{--    switch(type){--}}
{{--        case 'info':--}}
{{--            toastr.info("{{ Session::get('message') }}");--}}
{{--            break;--}}

{{--        case 'warning':--}}
{{--            toastr.warning("{{ Session::get('message') }}");--}}
{{--            break;--}}
{{--        case 'success':--}}
{{--            toastr.success("{{ Session::get('message') }}");--}}
{{--            break;--}}
{{--        case 'error':--}}
{{--            toastr.error("{{ Session::get('message') }}");--}}
{{--            break;--}}
{{--    }--}}
{{--    @endif--}}
{{--</script>--}}

{{--<script>--}}
{{--///cart product to--}}
{{--    $(document).ready(function () {--}}

{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}

{{--        $('body').on('click', '.cart', function (event) {--}}
{{--            event.preventDefault()--}}
{{--            console.log(event.currentTarget.href.split(" ")[0])--}}


{{--            var id = $("#staff_id").val();--}}

{{--            $.ajax({--}}
{{--                url:  event.currentTarget.href.split(" ")[0],--}}
{{--                type: "GET",--}}
{{--                data: {--}}
{{--                    id: id,--}}
{{--                    // name: fullname,--}}
{{--                    // email: email,--}}
{{--                },--}}
{{--                dataType: 'json',--}}
{{--                success: function (data) {--}}
{{--                    console.log(data.message)--}}
{{--                    if(data.success){--}}
{{--                        let alert = $('#notification');--}}
{{--                        alert.text(data.message);--}}
{{--                        $('#alert-box').show();--}}

{{--                    }--}}

{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '#submit', function (event) {
            console.log(event)
            event.preventDefault()
            let code = $('#coupon_code').val();
            let amount = $('#amount').val();
            let c_qty = $('#c_qty').val();
            $.ajax({
                url: "/coupon/store",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    code: code,
                    amount:amount,
                    c_qty:c_qty,
                },
                dataType: 'json',
                success:function(data){
                    console.log(data.message)
                    if(!data.success){
                        window.location.reload(true);
                        // setTimeout(function(){  window.location.reload(true); }, 3000);

                    }else{

                        let alert = $('#message');
                        alert.text(data.message);
                        $('#alert-box2').show();
                        $('#alert-box').hide();
                        setTimeout(function(){  window.location.reload(true); }, 3000);

                    }
                },
            });
        });

        $('body').on('click', '#remove_discount', function (event) {
            console.log(event)
            event.preventDefault()
            $.ajax({
                url: "/coupon/remove",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                dataType: 'json',
                success:function(data){
                    console.log(data.message)
                    if(data.success){
                        console.log(data.message)
                        let alert = $('#notification');
                        alert.text(data.message);
                        $('#alert-box').show();
                        setTimeout(function(){  window.location.reload(true); }, 3000);
                    }
                },
            });
        });
    });
</script>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

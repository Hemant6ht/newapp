<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dukan-Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href={{ URL::asset('images/d.png'); }}>
    <link rel="apple-touch-icon" href={{ URL::asset('apple-touch-icon.png'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/owl.carousel.min.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/owl.theme.default.min.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/core.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/shortcode/shortcodes.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('style.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/responsive.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/custom.css'); }}>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

      <script src={{ URL::asset('js/vendor/modernizr-3.5.0.min.js'); }}></script>
   </head>

<body>
	<x-header/>
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- cart-main-area start -->
    <div class="checkout-wrap ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-details">
                        <h5 class="order-details__title">Your Order</h5>
                        <form id='buydetailform' action="/buy" method="POST" action="buy/{{ $prd->p_id }}">
                            {{ csrf_field() }}
                            <div class="order-details__item">
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src={{ URL::asset('images/product_images/'.$prd->p_img); }} alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#">{{ $prd->p_name }}</a>
                                        <span class="price">Rs. {{ $prd->p_price }}</span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__content">
                                        <label for="quantity">Quantity</label><br>
                                        <input class="buyfrm" type="number" id="quant" name="quantity" value="1" onChange="setprice()" min="1" max="5">
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__content">
                                        <label for="mobile">Contact No.</label><br>
                                        <input class="buyfrm" type="number" name="mobile" value={{ $userdetail->mobile }}>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__content">
                                        <label for="address">Delivery Address</label><br>
                                        <textarea class="buyfr" name="address">{{ $userdetail->address }}</textarea>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__content">
                                        <label for="address">Pincode</label><br>
                                        <input type="number" class="buyfrm" name="pincode" />
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__content">
                                        <label for="name">Name of the recipient</label><br>
                                        <input type="text" class="buyfrm" name="name" value={{ $userdetail->name }} />
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__content">
                                        <label for="mop">Select the Mode of Payment</label><br>
                                        <select name="paymentmode" class="buyfrm">
                                            <option value="COD">Cash on delivery</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total : Rs.<span id="total_price">{{ $prd->p_price }}</span></h5>
                            </div>
                            {{-- hidden fields --}}
                            <input type='text' name='pid' value={{ $prd->p_id }} hidden/>
                            <div class="ordre-details__total">
                                <button type="submit" class="btn btn-lg btn-success">ORDER NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end --> 
    <script>
        var x=document.getElementById('quant');
        var y=document.getElementById('total_price');
        function setprice(){
            var z={{ $prd->p_price }}*x.value;
            y.innerHTML= z;
        } 
    </script>


	<!-- End Category Area -->
	<!-- Start of footer -->
    <x-footer />
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src={{ URL::asset('js/vendor/jquery-3.2.1.min.js'); }}></script>
    <!-- Bootstrap framework js -->
    <script src={{ URL::asset('js/bootstrap.min.js'); }}></script>
    <!-- All js plugins included in this file. -->
    <script src={{ URL::asset('js/plugins.js'); }}></script>
    <script src={{ URL::asset('js/slick.min.js'); }}></script>
    <script src={{ URL::asset('js/owl.carousel.min.js'); }}></script>
    <!-- Waypoints.min.js. -->
    <script src={{ URL::asset('js/waypoints.min.js'); }}></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src={{ URL::asset('js/main.js'); }}></script>

</body>

</html>
		
		

       

  
       
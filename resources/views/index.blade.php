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
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                @foreach ($products as $product)
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection {{date("Y")}}</h2>
                                        <h1 style="font-size:3rem">{{$product->p_name}}</h1>
                                        <div class="cr__btn">
                                        <a href='/buydetail/{{ $product->p_id }}' class='fr__btn' style='margin-left:8px;background-color:green'>BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src={{ URL::asset('images/product_images/'.$product->p_img); }} alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->  
                @endforeach
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                            <p>These are the latest collection from Dukan take a look</p>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr))">
                            @php
                                $prds = App\Http\Controllers\ModelControllers\ProductController::getLatestProducts(12)
                            @endphp
                            @foreach ($prds as $prd)
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12" style="width:100%">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href='/productdetail/{{$prd->p_id}}'>
                                            <img src={{ URL::asset('images/product_images/'.$prd->p_img); }} alt="product images" height="320px">
                                        </a>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">{{$prd->p_name}}</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li>{{$prd->p_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->    
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
		
		

       
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dukan-Product</title>
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
        <!-- Start Product Details Area -->
        <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img src={{ URL::asset('images/product_images/'.$product->p_img); }} alt="full-image" height="450px" width="330px">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2>{{$product->p_name}}</h2>
                                <ul  class="pro__prize">
                                    <li>Rs. {{$product->p_price}}</li>
                                </ul>
                                <p class="pro__info">{{$product->p_s_desc}}</p>
                                <div class="ht__pro__desc">
                                    <div class="sin__desc">
                                        <p><span>Availability:</span>
                                            @if ($product->p_quant>0)
                                            In Stock
                                            @else
                                            Out Of Stock    
                                            @endif
                                        </p>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>Categories:</span></p>
                                        <ul class="pro__cat__list">
                                            <li>{{$product->cat_id}}</li>
                                        </ul>
                                    </div>
                                    <div class="sin__desc align--left">
                                        @if (Session::get('user'))
                                            @php
                                                $checkcart = App\Http\Controllers\ModelControllers\CartController::checkpresenceincart(Session::get('user'),$product->p_id);
                                            @endphp
                                            @if ($checkcart)
                                                <a href='/cart' class='fr__btn' style='background-color:rgb(70, 73, 70)'>Go To Cart</a>
                                            @else
                                                <a href='/addtocart/{{$product->p_id}}' class='fr__btn'>Add To Cart</a>
                                            @endif
                                        @else
                                            <a href='/addtocart/{{$product->p_id}}' class='fr__btn'>Add To Cart</a>
                                        @endif
                                        <a href='/buydetail/{{$product->p_id}}' class='fr__btn' style='margin-left:8px;background-color:green'>BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area -->
        <!-- Start Product Description -->
        <section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View -->
                        <ul class="pro__details__tab" role="tablist">
                            <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>
                        </ul>
                        <!-- End List And Grid View -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                                <div class="pro__tab__content__inner">
                                    <p><span style="font-size:1.5rem;color:red">Warning: </span>There may be slight diffrence between colors of image and actual product duw to internal lights.</p>
                                    <h4 class="ht__pro__title">Description</h4>
                                    <p>{{$product->p_s_desc}}</p>
                                    <h4 class="ht__pro__title">Detailed Description</h4>
                                    <p>{{$product->p_f_desc}}</p>
                                    </div>
                            </div>
                            <!-- End Single Content -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- End Product Description -->
        <!-- Start Product Area -->
        <section class="htc__product__area--2 pb--100 product-details-res">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                            <p>Latest arrivals tou may like of this category</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__wrap clearfix">
                        @php
                         $prds = App\Http\Controllers\ModelControllers\ProductController::getLatestProductsByCategory($product->cat_id,4);    
                        @endphp
                        @foreach ($prds as $prd)
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href='/productdetail/{{$prd->p_id}}'>
                                        <img src={{ URL::asset('images/product_images/'.$prd->p_img); }} alt="product images" height="320px">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href='/productdetail/{{$prd->p_id}}'>{{$prd->p_name}}</a></h4>
                                    <ul class="fr__pro__prize">
                                        <li>Rs. {{$prd->p_price}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->    
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->
        <!-- End Banner Area -->
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
           
       
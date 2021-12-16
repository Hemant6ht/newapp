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
    <!-- Start Product Grid -->
    <section class="htc__product__grid bg__white ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col">
                    <!-- Start Product View -->
                    @if ($products->isEmpty())
                    <h2 style='margin-top:2rem;margin-left:2%;'>Sorry no product found....</h2>
                    @else
                    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr)">
                        @foreach ($products as $product)
                        <!-- Start grid view of product Product -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12" style="width:100%">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href='/productdetail/{{$product->p_id}}'>
                                        <img src={{ URL::asset('images/product_images/'.$product->p_img); }} alt="product images" height="320px">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product-details.html">{{$product->p_name}}</a></h4>
                                    <ul class="fr__pro__prize">
                                        <li>Rs. {{$product->p_price}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->    
                        @endforeach
                    </div>    
                    @endif
                    <!-- End Product View -->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Grid -->
    <!-- Start Brand Area -->
    <div class="htc__brand__area bg__cat--4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ht__brand__inner">
                        <ul class="brand__list owl-carousel clearfix">
                            <li><a href="#"><img src={{ URL::asset('images/brand/1.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/2.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/3.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/4.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/5.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/5.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/1.png'); }} alt="brand images"></a></li>
                            <li><a href="#"><img src={{ URL::asset('images/brand/2.png'); }} alt="brand images"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->
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
       
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
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-remove">Remove</th>
                                            <th class="product-buy">Buy</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartprds as $cartprd)
                                        @php
                                            $prd = App\Http\Controllers\ModelControllers\ProductController::getAllProductsBypid($cartprd->p_id);
                                        @endphp
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src={{ URL::asset('images/product_images/'.$prd->p_img); }} alt="product img" /></a></td>
                                            <td class="product-name"><a href="#">{{ $prd->p_name }}</a>
                                                <ul  class="pro__prize">
                                                    <li>{{ $prd->p_price }}</li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">{{ $prd->p_price }}</span></td>
                                            <td class="product-remove"><a href='/cartdelete/{{ $prd->p_id }}'><i class="icon-trash icons"></i></a></td>
                                            <td class="product-buy"><a href='/buydetail/{{ $prd->p_id }}' class='btn btn-success'>BUY NOW</a></td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="/">Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
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
		
		

       
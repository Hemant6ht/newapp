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
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="contact-form" method="POST" action='/login'>
                                    {{ csrf_field() }}
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="email" placeholder="Your Email*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" placeholder="Your Password*" style="width:100%" required>
										</div>
									</div>
									
									<div class="contact-btn">
										<input value="Login" type="submit" class="fv-btn">
									</div>
								</form>
							</div>
					    </div> 
                    </div>
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="contact-form" method="POST" action="/register">
                                    {{ csrf_field() }}
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Name*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="email" placeholder="Your Email*" style="width:100%" required>
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="mobile" placeholder="Your Mobile*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" placeholder="Your Password*" style="width:100%" required>
										</div>
                                    </div>
                                    <div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="address" placeholder="Your Address*" style="width:100%">
										</div>
									</div>
									<div class="contact-btn">
										<input value="Register" type="submit" class="fv-btn">
									</div>
								</form>
							</div>
						</div> 
                    </div>
				</div>
            </div>
        </section>
        <!-- End Contact Area -->

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
		
		

       
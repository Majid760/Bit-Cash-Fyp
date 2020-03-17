<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- mega-menu -->
    <link rel="stylesheet" href="{{asset('frontend/css/megamenu.css')}}">


    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')
  </head>
  <body class="goto-here">
		<div class="py-1 " style="background-color:#EA3562">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md-3 col-sm-2 pr-4 d-flex topper  align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+92 35 2355 98</span>
					    </div>
					    <div class="col-md-3 col-sm-2 pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">email@email.com</span>
					    </div>
				 <div class="col-md-6 col-sm-6 pr-1 d-flex topper  text-lg-right">

                    <nav class="navbar ml-0 px-0">
                        <a class="nav-item nav-link text-warning py-0 px-1" href="#">Balance |</a>
                        <a class="nav-item nav-link text-warning py-0 px-1" href="#">How It Works? |</a>
                        <a class="nav-item nav-link text-warning py-0 px-1" href="{{url('contact')}}">CONTACT |</a>
                        <a class="nav-item nav-link text-warning py-0 px-1" href="{{url('about')}}">ABOUT |</a>
                        <a class="nav-item nav-link text-warning py-0 px-1" href="{{url('blog')}}">BLOG |</a>
                        <a class="nav-item nav-link text-warning py-0 px-1" href="#">DOWNLOAD APP </a>
                    </nav>

				</div>
			</div>
		 </div>
		</div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light " id="ftco-navbar" style="margin-top:0 !important">
	    <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><span style="color:#EA3562">BIT</span><span style="color:#ffe100">-CASH<span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav">
              <li class="nav-item active  ml-3"><a href="{{route('home')}}" class="nav-link">HOME</a></li>
	          <li class="nav-item dropdown mr-1">
              <a class="nav-link dropdown-toggle mega-drop-down" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04" >

                <div class="col-md-6 col-lg-4" style="display:inline">
            	<a class="dropdown-item" href="shop.html">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
                </div>
                <div class="col-md-6 col-lg-4" style="display:inline">
                    <a class="dropdown-item" href="shop.html">Shop</a>
                      <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                    <a class="dropdown-item" href="product-single.html">Single Product</a>
                    <a class="dropdown-item" href="cart.html">Cart</a>
                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                </div>
                <div class="col-md-6 col-lg-4" style="display:inline">
                    <a class="dropdown-item" href="shop.html">Shop</a>
                      <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                    <a class="dropdown-item" href="product-single.html">Single Product</a>
                    <a class="dropdown-item" href="cart.html">Cart</a>
                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                </div>
                    <!--mega-menu -->
                    {{-- <div class="animated fadeIn  mega-menu  ">
                        <div class="mega-menu-wrap">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 ">
                                    <h4 class="row mega-title ">Feature</h4>
                                    <ul class="stander">
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">laptop</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">I pad</a></li>
                                        <li><a class="view-more btn- btn-sm" href="#">View more</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                        <h4 class="row mega-title">Standers</h4>
                                    <ul class="stander">
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">laptop</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">I pad</a></li>
                                        <li><a class="view-more btn- btn-sm" href="#">View more</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h4 class="row mega-title">Description</h4>
                                    <ul class="description">
                                        <li><a href="#">Women</a>
                                            <span>Description of Women</span>
                                        </li>
                                        <li><a href="#">Men</a>
                                                <span>Description of men Cloths</span>
                                        </li>
                                        <li><a href="#">Kids</a>
                                                <span>Description of Kids Cloths</span>
                                        </li>
                                        <li><a href="#">Others</a>
                                                <span>Description of Others Cloths</span>
                                        </li>
                                        <li>
                                        <a class="view-more btn btn-sm " href="#">View more</a>

                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                <h4 class="row mega-title">Icon + Description</h4>
                                    <ul class="icon-des">
                                        <li><a href="#"><i class="fa fa-globe"></i>Web</a></li>
                                        <li><a href="#"><i class="fa fa-mobile"></i>Mobile</a></li>
                                        <li><a href="#"><i class="fa fa-arrows-h"></i>Responsive</a></li>
                                        <li><a href="#"><i class="fa fa-desktop"></i>Desktop</a></li>
                                        <li><a href="#"><i class="fa fa-paint-brush"></i>UI/UX</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                  --}}

              </div>


              <!-- end of mega-menu -->
            </li>
	          <li class="nav-item "><a href="about.html" class="nav-link">stores</a></li>
	          <li class="nav-item "><a href="blog.html" class="nav-link">deals</a></li>
	          <li class="nav-item "><a href="contact.html" class="nav-link">offers</a></li>
	          <!-- <li class="nav-item mr-1 cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->
            <!-- <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <input type="text" class="form-control  input-sm ml-1" placeholder="search..." >
                    <div class="input-group-append">
                        <span class="btn btn-outline-warning text-center input-group-lg" style="padding:10px 5px" >Search</span>
                    </div>
                </div>
                <a class="btn btn-lg btn-primary ml-2" href="{{ route('user.register') }}" style="border-radius:5px">Register</a>
                <a class="btn btn-lg btn-danger ml-2" href="{{ route('user.login') }}" style="border-radius:5px; width:100px;">Login</a>

            </form>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    @yield('content')


    <!-- footer -->


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                          <a href="#" class="mouse-icon">
                              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                          </a>
                      </div>
            </div>
          <div class="row mb-5">
            <div class="col-md py-3">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Vegefoods</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5 px-3 py-3">
                <h2 class="ftco-heading-2">Menu</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Shop</a></li>
                  <li><a href="#" class="py-2 d-block">About</a></li>
                  <li><a href="#" class="py-2 d-block">Journal</a></li>
                  <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
               <div class="ftco-footer-widget mb-4 px-3 py-3">
                <h2 class="ftco-heading-2">Help</h2>
                <div class="d-flex">
                    <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                      <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                      <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                      <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                      <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                    </ul>
                    <ul class="list-unstyled">
                      <li><a href="#" class="py-2 d-block">FAQs</a></li>
                      <li><a href="#" class="py-2 d-block">Contact</a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 px-3 py-3">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | BIT-<span style="color:#ffe100">CASH<span>.PK
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          </p>
            </div>
          </div>
        </div>
      </footer>



            <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- slider -->
        <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>
        <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{asset('js/google-map.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/megamenu.js')}}"></script>

        <!-- font-awesome -->
        <script src="https://use.fontawesome.com/ddf0dbc894.js"></script>
        <script src="https://use.fontawesome.com/7b1b5f4647.js"></script>

      @yield('scripts')
  </body>
</html>

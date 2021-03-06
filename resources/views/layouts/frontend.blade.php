<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- include masonary css -->
    <link href="{{ asset('frontend/css/masonry/labs.css')}}" rel="stylesheet" >
    <link href="{{ asset('frontend/css/masonry/masonry.css')}}" rel="stylesheet" >
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">



    <!-- user dashboard css -->
    <link href="{{ asset('backend/css/user-dashboard-style.css')}}" rel="stylesheet" >
    {{-- <!-- sign in and up css -->
    <link rel="stylesheet" href="{{asset('/frontend/css/sign-in-up-style.css')}}"> --}}

    <!-- css files -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">


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
    <link rel="stylesheet" href="{{ asset('frontend/css/product-detail.css')}}" />

    <!-- mega  menu -->

    <link href="{{ asset('frontend/css/mega-menu.css') }}" rel="stylesheet" id="bootstrap-css">


    <!-- store page layout -->

    <link rel="stylesheet" href="{{asset('frontend/css/daterangepicker.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/util.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/product-detail.css')}}"/>
    @yield('styles')
  </head>
  <body class="goto-here">
		<div class="py-1 " style="background-color:#EA3562">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md-3 col-sm-2 pr-4 col-lg-3 d-flex topper  align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <span class="text">bitcash@support.com</span>
                            </div>
                            <div class="col-md-3 col-sm-2 col-lg-3 pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                {{-- <span class="text">+92 35 2355 98</span> --}}

                            </div>
                            <div class="col-md-6 col-sm-8 col-lg-6 pr-1 d-flex topper  text-lg-right">
                                <nav class="navbar  px-0 top-navbar">

                                    <a class="nav-item nav-link text-warning py-0 px-1 " href="#how-to-work">How It Works? |</a>
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

    <!-- Start nav -->
    <nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light " id="ftco-navbar" style="margin-top:0 !important">
        <div class="container">
            <a class="navbar-brand" href="/"><span style="color:#EA3562">BIT</span><span style="color:#ffe100">-CASH<span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav">
              <li class="nav-item active  ml-3"><a href="/" class="nav-link">HOME</a></li>
              <!-- start of product mega menu -->
              <li class="nav-item dropdown mr-1 menu-area">
              <a class="nav-link dropdown-toggle mega-drop-down" href="#" id="mega-one" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCT</a>
              <div class="dropdown-menu mega-area" aria-labelledby="mega-one" >

                <div class="row bg-warning">


                        <div class="wrapper">
                            <div class="masonry">
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>1]) }}" name="category" class="dropdown-item d-block text-left py-0 my-1 text-uppercase"><i class="fa fa-female fa-lg mr-2" aria-hidden="true"></i>Men-clothing</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>2]) }}" name="category" class="dropdown-item d-block text-left py-0 my-1 text-uppercase"><i class="fa fa-male fa-lg mr-2" aria-hidden="true">women-clothing</i></a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>3]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-camera-retro fa-lg mr-2" aria-hidden="true"></i>Consumer-electronics</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>4]) }}"  name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-home fa-lg mr-2" aria-hidden="true"></i>Home & Garden</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>5]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-car fa-lg mr-2" aria-hidden="true"></i>Automobiles & Motorcycles</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>6]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-mobile fa-lg mr-2" aria-hidden="true"></i>Phones & Telecommunications</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>7]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-laptop fa-lg mr-2" aria-hidden="true"></i>Computer & Office</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>8]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-paw fa-lg mr-2" aria-hidden="true"></i>Beauty & Health</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>9]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-diamond fa-lg mr-2" aria-hidden="true"></i>Jewelry & Accessories</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>10]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-grav fa-lg mr-2" aria-hidden="true"></i>Toys & Hobbies</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>11]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-futbol-o fa-lg mr-2" aria-hidden="true"></i>Sports & Entertainment</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>12]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-child fa-lg mr-2" aria-hidden="true"></i>Mother & Kids</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>13]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-shopping-bag fa-lg mr-2" aria-hidden="true"></i>Luggage & Bags</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>14]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa  fa-ravelry fa-lg mr-2" aria-hidden="true"></i>Hair & Accessories</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>15]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-lightbulb-o fa-lg mr-2" aria-hidden="true"></i>Lights & Lighting</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>16]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><img class="mr-2" src="{{ asset('frontend/images/shoe.png') }}" width="20px" height="20px"/>Shoes</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>17]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-bath fa-lg mr-2" aria-hidden="true"></i>Home Improvement</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>18]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-clock-o fa-lg mr-2" aria-hidden="true"></i>Watches</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>19]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-microchip fa-lg mr-2" aria-hidden="true"></i>Electronic Components & Supplies</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>20]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-shield fa-lg mr-2" aria-hidden="true"></i>Security & Protection</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>21]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-shower fa-lg mr-2" aria-hidden="true"></i>Home Appliances</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>22]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-calculator fa-lg mr-2" aria-hidden="true"></i>Office & School Supplies</a>
                                </div>
                                <div class="brick text-center px-5 py-0 pt-0 my-1 w-100">
                                    <a href="{{ route('category',['id'=>23]) }}" name="category" class="dropdown-item d-block text-left py-0 my-0 text-uppercase"><i class="fa fa-calendar-o fa-lg mr-2" aria-hidden="true"></i>Weddings & Events</a>
                                </div>
                            </div><!-- .masonry -->
                        </div>
                </div>

            </div>
        </li>
              <!-- end of product mega-menu -->

              <!-- start of store mega menu -->

              <li class="nav-item  mr-1 menu-area-store">
                <a class="nav-link dropdown-toggle mega-drop-down" href="#" id="mega-one" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">STORES</a>
                <div class="dropdown-menu mega-area-store" aria-labelledby="mega-one" >

                  <div class="row">
                      <div class="col-sm-6 col-lg-6 product-col">
                          <div class="row">
                              <div class="col-lg-4 col-sm-6">
                                <div class="megamenu-store-title">
                                    <h4>Trending Store</h4>
                                </div>
                                <div class="megamenu-store">
                                   <a href="{{ route('store') }}">
                                    <img src="{{asset('frontend/images/aliexpress.png')}}" class="img-fluid megamenu-store-img-css zoom">
                                   </a>
                                </div>
                                <div class="megamenu-store">
                                <img  src="{{asset('frontend/images/yayvo4.png')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/daraz.jpg')}}" class="img-fluid  megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/elo.png')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/homeshoping.jpg')}}" class="img-fluid megamenu-store-img-css zoom">
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-6">
                                <div class="megamenu-store-title">
                                    <h4>Top Store</h4>
                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/aliexpress.png')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                <img  src="{{asset('frontend/images/elo.png')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/daraz.jpg')}}" class="img-fluid  megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/telemart1.jpg')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/homeshoping.jpg')}}" class="img-fluid megamenu-store-img-css zoom">
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-6">
                                <div class="megamenu-store-title">
                                    <h4>30% plus Cashback Stores</h4>
                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/elo.png')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                <img  src="{{asset('frontend/images/goto.jpg')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/mega.png')}}" class="img-fluid  megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/telemart1.jpg')}}" class="img-fluid megamenu-store-img-css zoom">

                                </div>
                                <div class="megamenu-store">
                                    <img src="{{asset('frontend/images/homeshoping.jpg')}}" class="img-fluid megamenu-store-img-css zoom">
                                </div>
                              </div>
                          </div>

                      </div>

                     <!-- section of megamenu of store-link slider -->
                      <div class="col-sm-6 col-lg-6 product-col">
                          <div class="row">
                              <div class="col-lg-12 col-sm-6">
                                <div class="megamenu-store-title">
                                    <h4>Store of the Day</h4>
                                </div>
                                  <!-- Container for the image gallery -->
                                  <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-content-style slider-home-one">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active slide-1" style="background-image: url(frontend/images/ramdanoffer.png');">
                                            <div class="carousel-caption">
                                                <div class="container">
                                                    <div class="box valign-middle">
                                                        <div class="content text-center">
                                                            <h3 data-animation="animated fadeInUp">Ramdan Offers..</h3>
                                                            <p data-animation="animated fadeInUp">Discount <span class="sep">.</span> Quality <span class="sep">.</span> Trust</p>
                                                            <a data-animation="animated fadeInDown" href="#" class="thm-btn ">Free Delivery</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item slide-2" style="background-image: url(frontend/images/storeoftheday.png) ;">
                                            <div class="carousel-caption">
                                                <div class="container">
                                                    <div class="box valign-middle">
                                                        <div class="content text-center">
                                                            <h3 data-animation="animated fadeInUp">Ramdan Offers.</h3>
                                                            <p data-animation="animated fadeInUp">Discount <span class="sep">.</span> Quality <span class="sep">.</span> Trust</p>
                                                            <a data-animation="animated fadeInDown" href="#" class="thm-btn ">Free Delivery</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
                                        <i class="fa fa-long-arrow-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
                                        <i class="fa fa-long-arrow-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                              </div>
                          </div>

                      </div>
                  </div>

              </div>
          </li>


              <!-- end of store mega menu -->

              <li class="nav-item "><a href="{{ route('deals-coupons') }}" class="nav-link">deal & coupons</a></li>
              {{-- <li class="nav-item "><a href="#" class="nav-link">offer</a></li> --}}
              <!-- <li class="nav-item mr-1 cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->
            <!-- <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-sucecss my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <form class="form-inline ml-auto" action="{{ route('search.product') }}">
                @csrf
                <div class="md-form my-0">
                  <input id="searh-box" name="searchProduct"  class="form-control  border-0 rounded-0 border-bottom-2 border-bottom-warning" type="text" placeholder="Search" aria-label="Search" style="width:300px !important; height:40px !important;">
                </div>
                <button  class="btn border-left-0 btn-warning  px-2 my-2 text-left py-2 rounded-0" type="submit">Search<i class="fa ml-2 fa-search" aria-hidden="true"></i></button>

            </form>

            </ul>
          </div>
          @if (!((isset(Auth::user()->name)) || (isset(Auth::user()->email))))
            <!--Check out button-->
            <div class="dropdown ml-sm-2 ml-lg-6 ml-md-3 float-right">
                <button class=" btn  btn-warning btn-circle text-center rounded-0 py-2   my-3 " data-toggle="" >Sign<i class="fa fa-map-signs ml-2"></i></button>
                <div class="dropdown-content">
                    <a  href="{{ route('user.register') }}"><i class="fa fa-user-plus mr-3" aria-hidden="true"></i>Sign Up</a>
                    <a  href="{{ route('user.login') }}"><i class="fa fa-sign-in mr-3" aria-hidden="true"></i>SignIn</a>
                </div>
            </div>
          @else
          <span class="float-right ml-sm-2 ml-lg-5 ml-md-3 ">{{ Auth::user()->email }}</span>
          <div class="dropdown ml-1">
            <button  id="searh-button" class="text-center py-2  my-3 btn btn-outline-success btn-lg rounded-circle"><i class="fa fa-10x fa-user  text-center"></i></button>
            <div class="dropdown-content">
                <a  href="#" >AVAIL:Rs {{ __('0') }} </a>
                <a  href="#" >PENDING:Rs {{ __('0') }} </a>
                <a  href="{{route('user.dashboard')}}" >My Account <i class="fa fa-user pl-2"></i></a>
                <a  data-toggle="modal" data-target="#modalConfirmDelete">Logout<i class="fa fa-sign-out  pl-2"></i></a>
            </div>
            @endif
        </div>
        </div>
      </nav>
    <!-- END nav -->

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
                <h2 class="ftco-heading-2">Bit-Cash</h2>
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
                  <li><a href="{{ route('about') }}" class="py-2 d-block">About</a></li>
                  <li><a href="{{ route('blog') }}" class="py-2 d-block">Blog</a></li>
                  <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact Us</a></li>
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
                      <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact</a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 px-3 py-3">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">Sector H/10. , Islamabad, Pakistan</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+92 30055973000</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@bit-cash.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <span style="color:#EA3562">BIT-</span><span style="color:#FFBA39">CASH<span>.PK
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          </p>
            </div>
          </div>
        </div>
      </footer>



            <!-- loader -->
             <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!--Modal: modalConfirmDelete-->
    <!-- Logout Modal-->
    <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="{{ route('user.logout') }}">Logout</a>
            </div>
          </div>
        </div>
      </div>



       <!-- scripts -->


       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- <script src="{{asset('js/jquery.min.js')}}"></script> --}}
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
        <!-- Summernote -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <!-- product-details page js -->
        <script src="{{ asset('frontend/js/product-detail.js') }}"></script>



        <!-- font-awesome -->
        <script src="https://use.fontawesome.com/ddf0dbc894.js"></script>
        <script src="https://use.fontawesome.com/7b1b5f4647.js"></script>

        <!-- store page scripts -->

        <script type="text/javascript" src="{{ asset('frontend/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('frontend/js/popper.js')}}"></script>

    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('frontend/js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('frontend/js/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <!-- <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script> -->
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('frontend/js/sweetalert.min.js')}}"></script>

         <!--=============== User Dashboard Javascript section =======================================-->


         <script>
                // front page product category images scripts
                        $(function () {
                            var selectedClass = "";
                            $(".filter").click(function () {
                                selectedClass = $(this).attr("data-rel");
                                $("#gallery").fadeTo(100, 0.1);
                                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                                setTimeout(function () {
                                $("." + selectedClass).fadeIn().addClass('animation');
                                $("#gallery").fadeTo(300, 1);
                                }, 300);
                            });
                            });                        // end front page product category images scripts


        </script>

        <script type="text/javascript">

            $(document).ready(function() {

                //summernote
                $('#summernote').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
                //end of summarnote

                $('#body-row .collapse').collapse('hide');
                // Collapse/Expand icon
                $('#collapse-icon').addClass('fa-angle-double-left');
                // Collapse click
                $('[data-toggle=sidebar-colapse]').click(function() {
                    SidebarCollapse();
                });
                function SidebarCollapse () {
                    $('.menu-collapsed').toggleClass('d-none');
                    $('.sidebar-submenu').toggleClass('d-none');
                    $('.submenu-icon').toggleClass('d-none');
                    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

                    // Treating d-flex/d-none on separators with title
                    var SeparatorTitle = $('.sidebar-separator-title');
                    if ( SeparatorTitle.hasClass('d-flex') ) {
                        SeparatorTitle.removeClass('d-flex');
                    } else {
                        SeparatorTitle.addClass('d-flex');
                    }
                    // Collapse/Expand icon
                    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
                }

        });

</script>
    <!--===============================================================================================-->
    <script src="{{ asset('frontend/js/store-main.js')}}"></script>

    @yield('scripts')
  </body>
</html>

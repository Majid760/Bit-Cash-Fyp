@extends('layouts.frontend')

<!-- style Section -->
@section('styles')

@endsection

@section('content')

    <!-- slider -->
    {{-- <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(frontend/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
	          </div>
	        </div>
	      </div>
	    </div>
    </section> --}}


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid img-slider"  src="{{asset('/frontend/images/category-2.jpg')}}" alt="First slide">

            <div class="carousel-caption d-none d-md-block">
                <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-slider" src="{{asset('/frontend/images/category-3.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-slider" style="height:450px" src="{{asset('/frontend/images/category-4.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- end-slider -->


    <!-- services section -->
    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>
          </div>
        </div>
			</div>
    </section>
    <!-- end services section -->


        <!-- services section -->

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(frontend/images/category.jpg);">
									<div class="text text-center">
										<h2>Vegetables</h2>
										<p>Protect the health of every home</p>
										<p><a href="#" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/category-1.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Fruits</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/category-2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Vegetables</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/category-3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Juices</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Dried</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- end services section -->


        <!-- product listing services section -->
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod">
        <img class="img-fluid" src="frontend/images/product-1.jpg" alt="Colorlib Template">
                    <span class="status">30%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Bell Pepper</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>                  <!-- 1 end of product listing section -->

            <!-- 2 start product showing section -->
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod">
        <img class="img-fluid" src="frontend/images/product-2.jpg" alt="Colorlib Template">
        <span class="status">35%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Strawberry</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>                                      <!-- 2 end product showing section -->
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod">
        <img class="img-fluid" src="frontend/images/product-3.jpg" alt="Colorlib Template">
            <span class="status">20%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Green Beans</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-4.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Purple Cabbage</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-5.jpg" alt="Colorlib Template">
                    <span class="status">30%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Tomatoe</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-6.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Brocolli</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-7.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Carrots</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-8.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Fruit Juice</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="ion-ios-cart"></i></span>
                            </a>
                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-8.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Fruit Juice</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                        <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                            <span><i class="ion-ios-menu"></i></span>
                        </a>
                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                            <span><i class="ion-ios-heart"></i></span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-8.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Fruit Juice</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                        <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                            <span><i class="ion-ios-menu"></i></span>
                        </a>
                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                            <span><i class="ion-ios-heart"></i></span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-8.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Fruit Juice</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                        <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                            <span><i class="ion-ios-menu"></i></span>
                        </a>
                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                            <span><i class="ion-ios-heart"></i></span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/product-8.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Fruit Juice</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                        <p class="price"><span>$120.00</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                            <span><i class="ion-ios-menu"></i></span>
                        </a>
                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                            <span><i class="ion-ios-heart"></i></span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Deal of the day section -->

        <section class="ftco-section img" style="background-image: url(frontend/images/deal-of-the-day111.jpg);">
            <div class="container">
                    <div class="row justify-content-end ">
                        <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate ml-4">
                            <span class="subheading">Best Price For You</span>
                            <h2 class="mb-4">Deal of the day</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <h3><a href="#">Spinach</a></h3>
                            <span class="price">$10 <a href="#">now $5 only</a></span>
                            <div id="timer" class="d-flex mt-5">
                                <div class="time" id="days"></div>
                                <div class="time pl-3" id="hours"></div>
                                <div class="time pl-3" id="minutes"></div>
                                <div class="time pl-3" id="seconds"></div>
                            </div>
                        </div>
                </div>
            </div>
    </section>

    <!-- end of the Deal of the day section -->

    <!-- Satisfied customer section-->

    <section class="ftco-section testimony-section">
        <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                {{-- <span class="subheading">Testimony</span> --}}
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
    <div class="row ftco-animate">
            <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
                <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                    </span>
                    </div>

                    <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="user-img mb-5" style="background-image: url(frontend/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                    </span>
                    </div>
                    <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="user-img mb-5" style="background-image: url(frontend/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                    </span>
                    </div>
                    <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                    </span>
                    </div>
                    <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                    </span>
                    </div>
                    <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>


            <!-- proudy partner section -->
            <hr>

                <section class="ftco-section ftco-partner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                    </div>
                </div>
            </section>

                <!-- end of proudy partner section -->

            <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
            <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
                </div>
            </div>
            </div>
        </section>
                <!-- end of subscriber section -- >




@endsection


@section('scripts')

@endsection

@extends('layouts.frontend')


<!-- style Section -->
@section('styles')

@endsection


@section('content')

    <!-- slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
                <img class="d-block w-100 img-fluid img-slider  " style="height:450px" src="{{asset('/frontend/images/category-4.png')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Amazing Deals:</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint.</p>
                </div>
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid img-slider" style="object-fit:cover"src="{{asset('/frontend/images/category-2.jpg')}}" alt="First slide">

            <div class="carousel-caption d-none d-md-block">
                <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-slider" src="{{asset('/frontend/images/sale60.png')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint</p>
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

      <!-- top different offers -->
      <div class="container">
          <div class="row my-4">
              <div class="col-md-6 col-lg-4 padding-0">
                  <div class="top__offers d-flex align-items-end fadeInUp ftco-animate">
                    <img class=" img-fluid top__offers" height="200px" src="{{asset('frontend/images/1-top-offer.png')}}">
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 padding-0">
                <div class="top__offers d-flex align-items-end fadeInUp ftco-animate">
                    <img class=" img-fluid top__offers" height="200px" src="{{asset('frontend/images/sale-2.png')}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-4 padding-0">
                <div class="top__offers d-flex align-items-end fadeInUp ftco-animate">
                    <img class=" img-fluid top__offers" height="200px" src="{{asset('frontend/images/sale-3.png')}}">
                </div>
            </div>
          </div>
      </div>

    <!-- top different offers -->

        <!-- services section -->

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(frontend/images/product.jpg);">
									<div class="text text-center">
										<h2 class="text-color">Our Quality Products</h2>
										<p>Save the money for your future!</p>
										<p><a href="#" class="btn btn-primary" style="background:#EA3562; border-color:#EA3562;">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/acc.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Accessories</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/clothes.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Clothes</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/shoes.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Shoes</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/mobile-computer.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Laptop & Smart Phones</a></h2>
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
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="#" class="img-prod">
                    <img class="img-fluid product-image" src="frontend/images/Manicure-Milling-Drill-Bit.jpg" alt="Colorlib Template">
                    <span class="status">30%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Manicure-Milling-Drill-Bit</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            {{-- <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p> --}}
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
                        <img class="img-fluid product-image" src="frontend/images/Spider-Nail-Gel.png" alt="Colorlib Template">
                        <span class="status">35%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Spider-Nail-Gel</a></h3>
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
                     <img class="img-fluid product-image" src="frontend/images/Wifi-Repeater.jpg" alt="Colorlib Template">
                    <span class="status">20%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Wifi-Repeater</a></h3>
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
                <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Wireless-Phone-Chargers.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Wireless-Phone-Chargers</a></h3>
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
                <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Phone-Lenses.jpg" alt="Colorlib Template">
                    <span class="status">30%</span>
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Phone-Lenses</a></h3>
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
                <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Home-Security-IP-Camera.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Home-Security-IP-Camera</a></h3>
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
                <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Face-Shield.png" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Face-Shield</a></h3>
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
                <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Car-Phone-Holder.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Car-Phone-Holder</a></h3>
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
                    <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Selfie-Drone-Quadcopter.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Selfie-Drone-Quadcopter</a></h3>
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
                    <a href="#" class="img-prod"><img class="img-fluid" src="frontend/images/Fishing-Quick-Knot-Tool.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Fishing-Quick-Knot-Tool</a></h3>
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
                    <a href="#" class="img-prod"><img class="img-fluid product-image" src="frontend/images/Front-Facing-Baby-Carrier.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Front-Facing-Baby-Carrier</a></h3>
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
                    <a href="#" class="img-prod "><img class="img-fluid product-image" src="frontend/images/Portable-Blender-Electric-Blender.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">Portable-Blender-Electric-Blender</a></h3>
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

        <!-- how to get cash-back section -->
        <section>
            <div class="container" id="how-to-work">
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-3 pt-3">
                        <h3 class="text-center text-color">How to Get Cashback via Bit-Cash?</h3>
                    </div>
                </div>
                <div class="row py-2 my-2 text-center">
                    <div class="col-sm-12 col-md-3 my-2 col-lg-3 service--section">
                        <div class="service-icon">
                            <i class="fa fa-search fa-4x mt-3 custom-font"></i>
                        </div>
                        <p class="service--sectio__title">One step registration</p>
                        <p>Login & Browse Offers from 300+ Online Stores.</p>
                    </div>
                    <div class="col-sm-12 col-md-3 my-2 col-lg-3 service--section">
                        <div class="service-icon">
                            <i class="fa fa-shopping-cart fa-4x mt-3 custom-font"></i>
                        </div>
                        <p class="service--sectio__title">Search 20+ Stores</p>
                        <p>Shop at any Store after Redirecting via Bit-Cash.</p>
                    </div>
                    <div class="col-sm-12 col-md-3 my-2 col-lg-3 service--section">
                        <div class="service-icon">
                            <i class="fa fa-google-wallet fa-4x mt-3 custom-font"></i>
                        </div>

                        <h2 class="service--sectio__title">Amount Verification</h2>
                        <p>Cashback will be tracked into Bit-Cash account in 24-48 hours.</p>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-2  service--section">
                        <div  class="service-icon">
                            <i class="fa fa-money fa-4x mt-3 custom-font"></i>
                        </div>
                        <h2 class="service--sectio__title">redeem</h2>
                        <p>Redeem Earned Cashback to Bank Account</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- end services section -->
    <!-- top store coupans and cashback offers -->
    <section>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 class="text-color py-3 text-center">Top Stores Coupons & Cashback Offers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/daraz.jpg')}}" class="img-fluid  img-css zoom">
                    <h2 class="cashback-offers">Up to 13% Cashback</h2>
                    <p class="cashback-percent">50+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img  src="{{asset('frontend/images/yayvo4.png')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 9% Cashback</h2>
                    <p class="cashback-percent">20+ offers</p>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/aliexpress.png')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 15% Cashback</h2>
                    <p class="cashback-percent">10+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/ishoopingg.jpg')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 20% Cashback</h2>
                    <p class="cashback-percent">50+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/mega.png')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 10% Cashback</h2>
                    <p class="cashback-percent">30+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/goto.jpg')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 10% Cashback</h2>
                    <p class="cashback-percent">26+ offers</p>
                </div>
            </div>
            <!-- 2nd row -->

            <div class="row mt-3">
                <div class="col-sm-6 col-md-4 col-lg-2">
                 <img src="{{asset('frontend/images/telemart2.png')}}" class="img-fluid img-css zoom">
                 <h2 class="cashback-offers">Up to 9% Cashback</h2>
                    <p class="cashback-percent">20+ offers<p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img  src="{{asset('frontend/images/shophive3.jpg')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 10% Cashback</h2>
                    <p class="cashback-percent">40+ offers</p>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/clickypk.jpg')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 10% Cashback</h2>
                    <p class="cashback-percent">10+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/elo.png')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 12% Cashback</h2>
                    <p class="cashback-percent">25+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/homeshoping.jpg')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 17% Cashback</h2>
                    <p class="cashback-percent">20+ offers</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/images/symbios.jpg')}}" class="img-fluid img-css zoom">
                    <h2 class="cashback-offers">Up to 23% Cashback</h2>
                    <p class="cashback-percent">50+ offers</p>
                </div>
            </div> <!--ending row -->
        </div>
    </section>
        <!-- end of top store coupans and cashback offers -->


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
                            <a href="#" class="partner"><img src="frontend/images/amazonn.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/aliexpress-partner.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/daraz-partner.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/yayvo-partner.png" class="img-fluid" alt="Colorlib Template"></a>
                        </div>
                        <div class="col-sm ftco-animate">
                            <a href="#" class="partner"><img src="frontend/images/elo-partner.png" class="img-fluid" alt="Colorlib Template"></a>
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

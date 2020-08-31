@extends('layouts.frontend')


<!-- style Section -->
@section('styles')

@endsection


@section('content')

    @if($products->total()==0)
    <div class="alert alert-warning alert-dismissible mt-3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="alert alert-info text-center">No result found!</h2>
    </div>
    @endif

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
                    {{-- <h5>Amazing Deals:</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint.</p> --}}
                </div>
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid img-slider" style="object-fit:cover"src="{{asset('/frontend/images/category-2.jpg')}}" alt="First slide">

            <div class="carousel-caption d-none d-md-block">
                {{-- <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint</p> --}}
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid img-slider" src="{{asset('/frontend/images/sale60.png')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h5>Amazing Deals:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint, Lorem ipsum dolor sit amet consectetur adipisicing elit veritatis sint</p> --}}
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
          <div class="row my-4 px-5">
              <div class="col-md-6 col-lg-4 ">
                  <div class="top__offers d-flex align-items-center fadeInUp ftco-animate mt-5">
                    <a href="https://s.click.aliexpress.com/e/_dUsjCJc?bz=300*250" target="_blank">
                            <img width="400" height="250" src="https://ae01.alicdn.com/kf/HTB1uQflwASWBuNjSszd762eSpXam/EN_300_250.png"/>
                    </a>
                 </div>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <div class="top__offers d-flex align-items-center fadeInUp ftco-animate mt-5">
                    <a href="https://s.click.aliexpress.com/e/_dVEanBo?bz=300*250" target="_blank">
                        <img width="400" height="250" src="//ae01.alicdn.com/kf/Had93e0a03ab54bca81b36c7da4a2bf44Y.gif"/>
                    </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <div class="top__offers d-flex align-items-center fadeInUp ftco-animate mt-5">
                    <a href="https://s.click.aliexpress.com/e/_d8rJNh4?bz=500*500" target="_blank">
                        <img width="400" height="250" src="//ae01.alicdn.com/kf/H570a54cd21fa4c59ba7a0ec6d368dfe08.png"/>
                    </a>
                 </div>
            </div>
          </div>
      </div>

    <!-- top different offers -->



        <!-- product listing services section -->
    <section class="ftco-section py-0">
    	<div class="container mt-3">
			<div class="row justify-content-center mb-2 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Store Products</span>
                </div>
            </div>
    	</div>
    	<div class="container">
            <div class="row">
                @if($products->total()!=0)
                    @foreach($products as $product)
                        @foreach ($product->productImgsUrls as $url)
                            <div class="col-md-3 col-lg-2 col-sm-4 ftco-animate">
                                <div class="product">
                                    <a href="{{ route('product.detail',['id' =>$product->id])}}"  class="img-prod">
                                        <img class="img-fluid product-image" src="{{ $url->product_img_url }}" alt="{{ $product->product_name }}" height="220" width="220" >
                                        @if($product->discount==null || $product->discount==0)
                                        <span class="status float-right">0% off + {{ ((str_replace('%','',$product->commission)+0)/2).'% Cashback' }}</span>
                                        @else
                                        <span class="status float-right">{{ $product->discount.' '.'off + '.((str_replace('%','',$product->commission)+0)/2).'% Cashback' }}</span>
                                        @endif
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <p><a href="{{ route('product.detail',['id' =>$product->id])}}" title="{{ $product->product_name }}" class="text-justify" style="font-size:12px">{{ implode(' ', array_slice(explode(' ', $product->product_name), 0, 6)) }}</a></p>
                                        <div class="d-flex">
                                            <div class="pricing">
                                                <p class="price" >
                                                    @if($product->discount!=null && $product->discount!=0)
                                                        @if ($product->original_price)
                                                        <span class="mr-2 price-dc">{{ $product->original_price.''.'$'}}</span>
                                                        @endif
                                                        @if($product->sale_price)
                                                        <span class="price-sale ml-1">{{ $product->sale_price.' '.'$'}}</span>
                                                        @endif
                                                    @else
                                                        @if($product->original_price)
                                                        <span class="price-sale ml-1">{{ $product->original_price.' '.'$'}}</span>
                                                        @endif
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        {{-- <div class="bottom-area d-flex px-3">
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
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            @break
                        @endforeach
                    @endforeach

            @endif
                          <!-- 1 end of product listing section -->
            </div>
            <div class="row">
                @if(count($products)!=0 || count($products)!=null)
                <div class="col-lg12 col-md-12 col-sm-12">
                    <div class="d-flex align-items-center justify-content-center">{{ $products->links() }}</div>
                </div>
                @endif
            </div>
        </div>
    </section>


    <!-- top store coupans and cashback offers -->
    <div class="container my-5">


        <!-- Section: Block Content -->
        <section class="dark-grey-text text-center">

          <h3 class="font-weight-bold mb-4 pb-2">Our Best Stores</h3>
          <p class="text-muted w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-4">

              <div class="view overlay rounded z-depth-1">
                <img src="{{ asset('frontend/images/aliexpress1.gif') }}" class="img-fluid" alt="Sample project image" >
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                <h4 class="font-weight-bold mt-1 mb-3">AliExpress.com</h4>
                <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
                <a href="https://www.aliexpress.com" target="_blank" class="btn btn-warning mt-2  btn-rounded "> Visit Site</a>
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

              <div class="view overlay rounded z-depth-1">
                <img src="{{ asset('frontend/images/ebay1.gif') }}" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                <h4 class="font-weight-bold mt-1 mb-3">ebay.com</h4>
                <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
                <a href="https://www.ebay.com" target="_blank" class="btn btn-warning  btn-rounded mt-2">Visit Site</a>
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

              <div class="view overlay rounded z-depth-1">
                <img src="{{ asset('frontend/images/amazon-discount1.gif') }}" class="img-fluid" alt="Sample project image" >
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                <h4 class="font-weight-bold mt-1 mb-3">Amazon.com</h4>
                <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
                <a class="btn btn-warning mt-2 btn-rounded">Visit Site</a>
              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Block Content -->


      </div>
      <!-- our client -->
      <div class="container z-depth-1 my-5">

        <section class="text-center py-5">

          <p class="mb-4 pb-2 lead font-weight-bold">Our Proud Partner</p>

          <!-- Logo carousel -->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="1800">
            <div class="carousel-inner">
              <!-- First slide -->
              <div class="carousel-item active">
                <!--Grid row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('frontend/images/aliexpress-discount.jpg') }}" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('frontend/images/telemart.jpg') }}" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/6.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/9.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Fourth column-->

                </div>
                <!--/Grid row-->
              </div>
              <!-- First slide -->

              <!-- Second slide -->
              <div class="carousel-item">
                <!--Grid row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/11.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/10.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/12.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/13.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Fourth column-->

                </div>
                <!--/Grid row-->
              </div>
              <!-- Second slide -->

              <!-- Third slide -->
              <div class="carousel-item">
                <!--Grid row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/1a.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/First column-->

                  <!--Second column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/2a.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Second column-->

                  <!--Third column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/3a.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Third column-->

                  <!--Fourth column-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://mdbootstrap.com/img/Photos/Template/4a.png" class="img-fluid px-4" alt="Logo">
                  </div>
                  <!--/Fourth column-->

                </div>
                <!--/Grid row-->
              </div>
              <!-- Third slide -->
            </div>

          </div>
          <!-- Logo carousel -->

        </section>

      </div>


      <!-- end of our client -->




    <!-- Promoted Product of the day section -->
    <div class="container my-5">

        <!-- Section: Block Content -->
        <section>

          <h3 class="d-flex justify-content-center align-items-center text-center dark-grey-text mb-5 btn btn-info text-white">Promoted Products</h3>

          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            @if($promoData)
            @php $i=0
            @endphp
            @foreach($promoData as $data)
             @php if($i==4)break @endphp
            <div class="col-lg-3 col-md-6 mb-4">
              <!-- Card -->
              <div class="card card-ecommerce">
                <!-- Card image -->
                <div class="view overlay">
                <a href="{{ $data->product_link  }}" target="_blank">
                  <img src="{{ $data->image_link }}" class="img-fluid"
                    alt="{{ $data->product_info }}">
                </a>
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body">
                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">
                    <strong>
                      <a href="{{ $data->product_link  }}" target="_blank" class="dark-grey-text text-sm" title="{{ $data->product_info }}">{{ implode(' ', array_slice(explode(' ', $data->product_info), 0, 7)).'...' }}</a>
                    </strong>
                  </h5>
                  <span class="badge badge-danger mb-2 py-2 px-2">bestseller</span>
                  <span class="badge badge-success mb-2 py-2 px-2 float-right">sold={{ $data->sold_quantity+3400 }}</span>


                  <!-- Card footer -->
                  <div class="card-footer py-0 px-0">
                    <div class="row mb-0">
                      <span class="btn btn-success text-center btn-block my-0 py-0">
                        {{ $data->unit_price.'$' }}
                      </span>
                      <span class="float-right">
                        <a class="" href="{{ $data->product_link }}" target="_blank" data-toggle="tooltip" data-placement="top" >
                        </a>
                      </span>

                    </div>
                  </div>
                </div>
                <!-- Card content -->
              </div>
              <!-- Card -->
              @php $i++ @endphp
            </div>
            @endforeach
            @endif
            <!-- Grid column -->
          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row d-flex justify-content-center">
            <p>
              <a class="btn btn-info  btn-rounded mb-5 text-white" data-toggle="collapse" href="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                More Promoted Products
                <i class="fa fa-level-down px-1" aria-hidden="true"></i>
              </a>
            </p>
            <div class="collapse" id="collapseExample">
              <!-- Grid row -->
              <div class="row">
                  @if($promoData)
                  @php $i=0
                  @endphp
                  @php $x=0
                  @endphp
                  @foreach($promoData as $data)
                  @php $x++
                  @endphp
                  @php if($x<5)continue @endphp
                  @php if($i==4)break @endphp
                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-4">
                  <!-- Card -->
                  <div class="card card-ecommerce">
                    <!-- Card image -->
                    <div class="view overlay">
                    <a href="{{ $data->product_link  }}" target="_blank">
                        <img src="{{ $data->image_link }}" class="img-fluid" alt="{{ $data->product_info }}">
                    </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body">
                      <!-- Category & Title -->
                      <h5 class="card-title mb-1">
                        <strong>
                          <a href="{{ $data->product_link }}" target="_blank" class="dark-grey-text">{{ implode(' ', array_slice(explode(' ', $data->product_info), 0, 7)).'...' }}</a>
                        </strong>
                      </h5>
                      <span class="badge badge-danger mb-2 py-2 px-2">bestseller</span>
                      <span class="badge badge-success mb-2 py-2 px-2 float-right">sold={{ $data->sold_quantity+3400 }}</span>


                      <!-- Card footer -->
                      <div class="card-footer py-0 px-0">
                        <div class="row mb-0">
                          <span class="btn btn-success text-center btn-block my-0 py-0">
                            {{ $data->unit_price.'$' }}
                        </span>
                        </div>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>

                <!-- Grid column -->
                @php $i++ @endphp
                @endforeach
                @endif
              </div>
              <!-- Grid row -->
            </div>
          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Block Content -->

      </div>




     <!-- end of the Promoted Product the day section -->

    <section class="ftco-section" id="how-to-work">
    <div class="container my-2  z-depth-1">


        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center dark-grey-text">

          <!--Grid row-->
          <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-xl-6 col-md-8">

              <h3 class="font-weight-bold mt-3">How to get Cashback?</h3>

              <p class="text-muted mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                molestiae
                numquam quas, voluptates omnis nulla ea odio.</p>

              <a class="btn btn-info btn-md ml-0 mt-3 mb-5" href="{{ route('user.login') }}" role="button">SignIn<i class="fa fa-magic ml-2"></i></a>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->


          <!--Grid row-->
          <div class="row">

            <!--First column-->
            <div class="col-lg-3 col-md-6">
              <i class="fa fa-sign-in fa-3x  text-primary" ></i>

              <p class="font-weight-bold my-3">Step One</p>

              <p class="text-muted">First signup/register your account with bitcash.com and get cashback  by per each product order place.</p>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-lg-3 col-md-6">
                <i class="fa fa-search fa-3x text-warning"></i>

                <p class="font-weight-bold my-3">Step Two</p>


                <p class="text-muted">Search more than 25000 products of all type category and enjoy the shooping.</p>
            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-lg-3 col-md-6">
                <i class="fa fa-cart-plus fa-3x text-danger"></i>

                <p class="font-weight-bold my-3">Step Three</p>


                <p class="text-muted">Placing order is to make you able to get cashback.</p>
            </div>
            <!--/Third column-->

            <!--Fourth column-->
            <div class="col-lg-3 col-md-6">
                <i class="fa fa-money fa-3x text-success"></i>

                <p class="font-weight-bold my-3">Step Four</p>

                <p class="text-muted">After placing the order of product successfully, you will be able to draw your cash after two week.</p>
            </div>
            <!--/Fourth column-->

          </div>
          <!--/Grid row-->


        </section>
        <!--Section: Content-->


      </div>
    </section>


    <!-- newsletter -->

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

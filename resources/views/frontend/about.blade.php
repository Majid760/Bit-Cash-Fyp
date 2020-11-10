@extends('layouts.frontend')

@section('styles')


@endsection

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/category-4.png');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p> --}}
            <h1 class="mb-0 bread"><span style="color:#061824">Ab</span><span style="color:#FF7904">out us</span></h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light mt-2">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(frontend/images/about.jpg);">
                      <a href="#" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="icon-play"></span>
                      </a>
                  </div>
                  <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                  <h2 class="mb-4">Welcome to Bit-Cach an eCommerce website</h2>
              </div>
            </div>
            <div class="pb-md-5">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                          <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                          <p><a href="#" class="btn btn-primary">Shop now</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

    <!-- proudy partner section -->
    <hr>

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

    <!-- end of proudy partner section -->


      <hr>
      <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
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
  <hr>




@endsection


<!-- script -->

@section('scripts')

@endsection

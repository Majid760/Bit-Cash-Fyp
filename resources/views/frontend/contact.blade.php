@extends('layouts.frontend')

@section('styles')


@endsection

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/fetival.png');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread"><span style="color:#142A51;">Contact us </span></h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@bitcash.com</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> <a href="#">bitcash.com</a></p>
            </div>
        </div>
      </div>
      <div class="row block-9">

        <div class="col-md-6 order-md-last d-flex">
          <form action="{{ route('contactus') }}" method="POST" class="bg-white p-5 contact-form">
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="alert alert-danger text-center">{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif
            @if(session('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <li class="alert alert-success text-center">{{ session('message') }}</li>
            </div>
            @endif
            <div class="form-group">
              @csrf
              <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject')}}">
            </div>
            <div class="form-group">
              <textarea  id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-success py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>

  @endsection

  @section('scripts')

  @endsection

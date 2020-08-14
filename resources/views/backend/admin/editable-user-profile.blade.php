@extends('layouts.admin-dashb')
@section('style')
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/admin-user-profile.css') }}" />
	<title>Professional profile</title>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
@endsection


@section('content')
<body>
    <form method="post" enctype="multipart/form" action="{{ route('admin.send-email-touser') }}">
        @csrf
	<div class="profile-main">
		<div class="profile-header">
			<div class="user-detail">
				<div class="user-image">
					<img src="http://nicesnippets.com/demo/up-profile.jpg">
				</div>
				<div class="user-data">
					<h2>{{ $user->username }}</h2>
					{{-- <span class="post-label">Admin</span>
					<span class="post-label">Speaker</span>
					<span class="post-label">AMA</span> --}}
					<p>Subscriber <strong>User</strong><br>
					<i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $user->city }}, {{ $user->country }}
                    </p>
                    <p><strong><input type="email" name="user_email" value="{{ $user->email }}"></strong></p>
				</div>
                @if($user->status==1)
                <div class="float-right">
				    <a href="#" class="btn btn-success btn-circle mt-3  btn-lg">
                        <i class="fas fa-check text-center"></i>
                    </a>
                </div>
                @else
                <div class="float-right">
                    <a  href="#" class="btn btn-warning btn-circle mt-3  btn-lg">
                        <i class="fas fa-exclamation-triangle text-center"></i>
                    </a>
                </div>
                @endif
            </div>
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
            @if(session('successMsg'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                        <li>{{ session('successMsg') }}</li>
                        </ul>
                </div>
            @endif
			<div class="tab-panel-main">
				<ul class="tabs">
					<li class="tab-link current" data-tab="Basic-detail">Basic Detail</li>
					<li class="tab-link" data-tab="Edu-detail">Educational Detail</li>
					<li class="tab-link" data-tab="Portfolio">Compose Email</li>
				</ul>
				<div id="Basic-detail" class="tab-content current">
					<div class="skill-box">
					  <ul>
						<li><strong>Full Name:</strong></li>
						<li><strong><p>{{ $user->firstname }}</p></strong></li>

						<li><strong><p>{{ $user->lastname }}</p></strong></li>
					  </ul>
					</div>
					<div class="bio-box">
						<div class="heading">
							<p>Professional Bio
							<label>10 Year Experience</label></p>
						</div>
						<div class="desc">
							{{ $user->about }}
						</div>
					</div>
					<div class="detail-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                       <strong><li>Birth date</li></strong>
                                       <strong> <li>City</li></strong>
                                       <strong> <li>Country</li></strong>
                                       <strong> <li>Address</li></strong>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                    <strong><p>8 March 1997,</p></strong>
                                    <strong><p>{{ $user->city }},</p></strong>
                                    <strong><p>{{ $user->country }},</p></strong>
                                    <strong><p>{{ $user->address }}</p></strong>


                            </div>

                        </div>


					</div>
				</div>
				<div id="Edu-detail" class="tab-content">
					<div class="Edu-box-main">
						 <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</h2>
						 <div class="Edu-box">
						 	<h5><span>User Profession</span> <br>
						 		2005 - 2007 | Infoway Corporation</h5>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						 </div>
						 <div class="Edu-box">
						 	<h5><span>Experience</span> <br>
						 		2007 - 2009 | Light Corporation</h5>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						 </div>
					</div>
				</div>
				<div id="Portfolio" class="tab-content">
					<div class="portfolio-box">

                            <textarea id="summernote" name="msgbody"></textarea>
                            <div class="float-right mb-5">
                                <button type="submit" class="btn btn-primary mt-2">Send Message</button>
                            </div>


					</div>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="footer mt-3">
			<div class="footer-box"><i class="fa fa-facebook"></i></div>
			<div class="footer-box"><i class="fa fa-twitter"></i></div>
			<div class="footer-box"><i class="fa fa-linkedin"></i></div>
			<div class="footer-box"><i class="fa fa-google"></i></div>
            <div class="footer-box"><i class="fa fa-instagram"></i></div>
            <div class="float-right mr-5 back-btn">
                <a href="{{ route('admin.all-user')}}" class="btn btn-lg btn-primary">
                    <i class="fa fa-7x fa-angle-double-left" aria-hidden="true"></i>
                Previous Page
                </a>
            </div>
        </div>


    </div>
</form>
</body>
@endsection
@section('script')

@endsection


@extends('layouts.user-dashboard')

@section('style')
@endsection

@section('use-dashboard')
<!-- ./Tabs -->
<section class=" ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center ">
                <nav class="nav-justified ">
                <div class="nav nav-tabs " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Profile</a>
                    <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Password Reset</a>
                    {{-- <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false">PW Cashback Voucher Details</a> --}}

                </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <!-- Transaction History section -->

                        <div class="container mt-3">

                            <div class="content">
                                <div class="row ">
                                <div class="col-md-8">
                                    @if($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger text-center">{{ $error }}</div>
                                        @endforeach
                                    @endif

                                    @if(session('successMsg'))
                                        <div class="alert alert-success text-center "> {{ session('successMsg') }}</div>
                                    @endif
                                    <div class="card">
                                    <div class="card-header">
                                        <h5 class="title"> Profile</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{ route('user.profile.update')}}">
                                        <div class="row">

                                            <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                @csrf
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $userData['name'] }}" disabled>
                                            </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $userData['email'] }}">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Company" value="{{ $userData['firstname'] }}">
                                            </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ $userData['lastname'] }}">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Home Address" value="{{ $userData['address'] }}">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" value="{{ $userData['city'] }}">
                                            </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="country" placeholder="Country" value="{{ $userData['country'] }}">
                                            </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="4" cols="80" name="about" class="form-control" placeholder="Here can be your description" value="">{{ $userData['about'] }}</textarea>
                                            </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-user">
                                    <div class="image">

                                        <img src="{{ asset('frontend/images/storeoftheday.png') }}" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="{{ asset('frontend/images/person_1.jpg') }}">
                                            <h6 class="title">{{ $userData['firstname'] }} &nbsp; {{  $userData['lastname'] }} </h6>
                                        </a>
                                        {{--  --}}
                                        </div>
                                        <p class="description text-center">
                                        "{{ $userData['about'] }}"
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="button-container">
                                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                        <i class="fa fa-facebook"></i>
                                        </button>
                                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                        <i class="fa fa-twitter"></i>
                                        </button>
                                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                        <i class="fa fa-google-plus"></i>
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>



                     <!-- End of Transaction History section -->
                </div>

                        <!-- Reset Password section -->
                <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                    <div class="pt-3"></div>

                    <!-- form card change password -->
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @endforeach
        @endif
        @if(session('message'))
            <div class="alert alert-danger text-center">{{ session('message') }}</div>
        @endif
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Change Password</h3>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off" action="{{ route('user.password-update') }}" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="inputPasswordOld">Current Password</label>
                        <input type="password" name="old_password" class="form-control" id="inputPasswordOld" required="">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNew">New Password</label>
                        <input type="password" name="password" class="form-control" id="inputPasswordNew" required="">
                        <span class="form-text small text-muted">
                                The password must be 8-20 characters, and must <em>not</em> contain spaces.
                            </span>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNewVerify">Verify Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordNewVerify" required="">
                        <span class="form-text small text-muted">
                                To confirm, type the new password again.
                            </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /reset password -->


                </div>

                       <!-- PW Cashback Voucher Details -->
                <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                    <div class="pt-3"></div>
                        <p>3. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

                </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection

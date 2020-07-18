@extends('layouts.user-dashboard')

@section('style')
@endsection



    <!--  main content  -->
    @section('use-dashboard')


        <div class="container-fluid">

            <div class="content">
                <div class="row">
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
                            <h5 class="title">{{ $userData['firstname'] }} &nbsp; {{  $userData['lastname'] }} </h5>
                        </a>
                        <p class="description">
                            {{ $userData['name'] }}
                        </p>
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

@endsection
        <!-- end of  main content  -->

@section('script')

@endsection

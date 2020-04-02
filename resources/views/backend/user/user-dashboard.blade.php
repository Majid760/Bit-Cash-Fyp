@extends('layouts.frontend')

@section('styles')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-left text-info pl-3 my-3">Account Summary</h3>
        </div>

        <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url('{{asset('backend/img/avatar5.jpg')}}');"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
                <a href="#">Account Overview</a>
	          </li>
	          <li>
	              <a href="#">My Profile</a>
	          </li>
	          <li>
                  <a href="#">Refers and Earns</a>
	          </li>
	          <li>
                <a href="#">Customer Support</a>
	          </li>
	          <li>
                <a href="#">Redeem History</a>
	          </li>
	        </ul>



	      </div>
    	</nav>

        <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        {{-- <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="fa fa-bars"></i>
                            <span class="sr-only">Toggle Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button> --}}

                        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        </div> --}}
                    </div>
                </nav>

                <h2 class="mb-4">Sidebar #01</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
		</div>

    </div>


  @endsection

  @section('scripts')

  <script src="{{ asset('backend/js/user-dashboard-popper.js') }}"></script>
  <script src="{{ asset('backend/js/user-dashboard.js') }}"></script>

  @endsection

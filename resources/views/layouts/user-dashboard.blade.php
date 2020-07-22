@extends('layouts.frontend')

@section('styles')
 <link rel="stylesheet" href="{{ asset('frontend/css/user-dashboard.css') }}">
 <link rel="stylesheet" href="{{ asset('frontend/css/now-ui-dashboard.min.css') }}">
 <link rel="stylesheet" href="{{ asset('frontend/css/slim.min.css')}}">


@endsection
@section('content')
    <div class="container">

        <div class="container-fluid p-1 mt-4">

            <!-- Bootstrap row -->
            <div class="row" id="body-row">
                <!-- Sidebar -->
                <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                    <!-- Bootstrap List Group -->
                    <ul class="list-group">


                        <!-- Menu with submenu -->

                        <a href="{{ route('user.account') }}" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-home fa-fw mr-3"></span>
                                <span class="menu-collapsed">Account Overview</span>
                                <span class="submenu-icon ml-auto"></span>
                            </div>
                        </a>

                        <a href="{{ route('user.profile') }}"   class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-user fa-fw mr-3"></span>
                                <span class="menu-collapsed">Profile</span>
                            </div>
                        </a>
                        <!-- Submenu content -->
                        {{-- <div id='submenu2' class="collapse sidebar-submenu">
                            <a href="{{ route('user.profile') }}" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Edit Profile</span>
                            </a>
                            <a href="{{ route('user.password-reset') }}" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Password Reset</span>
                            </a>
                        </div> --}}
                        <a href="{{ route('user.account-activity') }}" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-tasks fa-fw mr-3"></span>
                                <span class="menu-collapsed">Account History</span>
                            </div>
                        </a>
                        <!-- Separator with title -->
                        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                            <small>OPTIONS</small>
                        </li>
                        <!-- /END Separator -->
                        <a href="{{ route('user.payment') }}" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-cogs fa-fw mr-3"></span>
                                <span class="menu-collapsed">Payment Setting</span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-line-chart fa-fw mr-3"></span>
                                <span class="menu-collapsed">Refer and Earn</span>
                            </div>
                        </a>
                        <!-- Separator without title -->
                        <li class="list-group-item sidebar-separator menu-collapsed"></li>
                        <!-- /END Separator -->
                        <a href="{{ route('customer.support') }}" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-question fa-fw mr-3"></span>
                                <span class="menu-collapsed">Customer Support</span>
                            </div>
                        </a>
                        <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                                <span id="collapse-text" class="menu-collapsed">
                                Collapse</span>
                            </div>
                        </a>
                        <!-- Logo -->
                        <li class="list-group-item logo-separator d-flex justify-content-center">
                        </li>
                    </ul><!-- List Group END-->
                </div><!-- sidebar-container END -->

                <!-- MAIN -->
                <div class="col">

                    @yield('use-dashboard')


                </div><!-- Main Col END -->

            </div><!-- body-row END -->


        </div><!-- container -->



    </div>
    @endsection

    @section('scripts')

    @endsection




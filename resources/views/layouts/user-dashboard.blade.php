@extends('layouts.frontend')

@section('styles')
 <link rel="stylesheet" href="{{ asset('frontend/css/user-dashboard.css') }}">
 <link rel="stylesheet" href="{{ asset('frontend/css/now-ui-dashboard.min.css') }}">

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

                        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-user fa-fw mr-3"></span>
                                <span class="menu-collapsed">Profile</span>
                                <span class="submenu-icon ml-auto"></span>
                            </div>
                        </a>
                        <!-- Submenu content -->
                        <div id='submenu2' class="collapse sidebar-submenu">
                            <a href="{{ route('user.profile') }}" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Edit Profile</span>
                            </a>
                            <a href="{{ route('user.password-reset') }}" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Password Reset</span>
                            </a>
                        </div>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-tasks fa-fw mr-3"></span>
                                <span class="menu-collapsed">Tasks</span>
                            </div>
                        </a>
                        <!-- Separator with title -->
                        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                            <small>OPTIONS</small>
                        </li>
                        <!-- /END Separator -->
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-calendar fa-fw mr-3"></span>
                                <span class="menu-collapsed">Calendar</span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-envelope-o fa-fw mr-3"></span>
                                <span class="menu-collapsed">Messages <span class="badge badge-pill badge-primary ml-2">5</span></span>
                            </div>
                        </a>
                        <!-- Separator without title -->
                        <li class="list-group-item sidebar-separator menu-collapsed"></li>
                        <!-- /END Separator -->
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-question fa-fw mr-3"></span>
                                <span class="menu-collapsed">Help</span>
                            </div>
                        </a>
                        <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                                <span id="collapse-text" class="menu-collapsed">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
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

    <script src="{{asset('js/jquery.min.js')}}"></script>

    @endsection



    <script>
                // Hide submenus
            $('#body-row .collapse').collapse('hide');

            // Collapse/Expand icon
            $('#collapse-icon').addClass('fa-angle-double-left');

            // Collapse click
            $('[data-toggle=sidebar-colapse]').click(function() {
                SidebarCollapse();
            });

            function SidebarCollapse () {
                $('.menu-collapsed').toggleClass('d-none');
                $('.sidebar-submenu').toggleClass('d-none');
                $('.submenu-icon').toggleClass('d-none');
                $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

                // Treating d-flex/d-none on separators with title
                var SeparatorTitle = $('.sidebar-separator-title');
                if ( SeparatorTitle.hasClass('d-flex') ) {
                    SeparatorTitle.removeClass('d-flex');
                } else {
                    SeparatorTitle.addClass('d-flex');
                }

                // Collapse/Expand icon
                $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
            }


</script>



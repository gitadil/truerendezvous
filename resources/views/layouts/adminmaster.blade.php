<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('adminasset/images/favicon.png') }}">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('adminasset/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('adminasset/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminasset/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
          rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ asset('adminasset/plugins/c3-master/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('adminasset/css/style.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('adminasset/css/pages/dashboard.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('adminasset/css/colors/default-dark.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Pro</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/admin">
                    <!-- Logo icon --><b>
                        <img src="{{ asset('adminasset/images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                        <span>
                            <img src="{{ asset('adminasset/images/logo-text.png')}}" alt="homepage" class="dark-logo"/>
                        </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item hidden-xs-down search-box"><a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i
                                        class="ti-close"></i></a>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-dark" href="#"><img
                                    src="{{ asset('adminasset/images/users/1.jpg')}}" alt="user"
                                    class="profile-pic"/></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li><a class="waves-effect waves-dark" href="/admin" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li><a class="waves-effect waves-dark" href="admin/users" aria-expanded="false"><i
                                    class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a></li>
                    {{--<li><a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i
                                    class="mdi mdi-table"></i><span class="hide-menu">Table</span></a></li>
                    <li><a class="waves-effect waves-dark" href="icon-material.html" aria-expanded="false"><i
                                    class="mdi mdi-emoticon"></i><span class="hide-menu">Icons</span></a></li>
                    <li><a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i
                                    class="mdi mdi-earth"></i><span class="hide-menu">Map</span></a></li>
                    <li><a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                                    class="mdi mdi-book-open-variant"></i><span class="hide-menu">Blank</span></a></li>
                    <li><a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                                    class="mdi mdi-help-circle"></i><span class="hide-menu">404</span></a></li>--}}
                </ul>
               {{-- <div class="text-center m-t-30">
                    <a href="https://wrappixel.com/templates/adminpro"
                       class="btn waves-effect waves-light btn-info hidden-md-down"> Upgrade to Pro</a>
                </div>--}}
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2017 - All Rights with offsidetech</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('adminasset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('adminasset/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('adminasset/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('adminasset/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('adminasset/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('adminasset/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="{{ asset('adminasset/plugins/chartist-js/dist/chartist.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--c3 JavaScript -->
<script src="{{ asset('adminasset/plugins/d3/d3.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/c3-master/c3.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{ asset('adminasset/js/dashboard.js')}}"></script>
</body>

</html>
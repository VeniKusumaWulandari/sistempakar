<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
   @include('admin.template.section.assets')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="{{url('/')}}" onclick=" return confirm('Yakin ke halaman awal aplikasi?')">
                SISTEM PAKAR
            </a>
            @include('admin.template.section.navtop')
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light bg-primary text-white">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
           @include('admin.template.section.sidebar')
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->


        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            
            <div class="container">
                @include('admin.template.utils.notif')
                @yield('content')
            </div>

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark" target="_blank">SISTEM PAKAR DIABETES</a> © @php
                                 date('Y');
                            @endphp</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">VENI</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->
@include('admin.template.section.js')

</body>

</html>
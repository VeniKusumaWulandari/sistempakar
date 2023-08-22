<!DOCTYPE html>
<html lang="en">

<head>
   @include('template.section.assets')
</head>

<body>
    <!-- Navbar Start -->
   @include('template.section.navbar')


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            
            @yield('content')

        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
      
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <p class="font-weight-bold" href="#">TI POLITAP 2023</p>. All Rights Reserved.</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

@include('template.section.js')
</body>

</html>
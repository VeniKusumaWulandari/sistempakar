<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>SISTEM PAKAR </title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{url('public/assets-admin')}}/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">

            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(public/assets-admin/dist/img/dokter1.jpeg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Senyummu saja yang manis, jangan darahmu.</h1>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(public/assets-admin/dist/img/Diabetes2.jpeg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h3 class="display-3 text-white mb-20">Kesehatan adalah Prioritas</h3>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">

                                <form action="{{url('login')}}" method="post">
                                    @csrf
                                    <h1 class="display-4 mb-10">Selamat Datang</h1>
                                    <p class="mb-30">Masuk Untuk Memulai Diagnosa Pasien Anda</p>
                                     @include('admin.template.utils.notif')
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email" name="email">
                                    </div>
                                    <div class="form-group form-input-password">
                                        <div class="input-group">
                                            <input class="form-control input_password" placeholder="Password" name="password" type="password">
                                        </div>
                                        <span class="btn-span">
                                            <span class="feather-icon">
                                                <i data-feather="eye-off"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{url('public/assets-admin')}}/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('public/assets-admin')}}/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{url('public/assets-admin')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{url('public/assets-admin')}}/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{url('public/assets-admin')}}/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="{{url('public/assets-admin')}}/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{url('public/assets-admin')}}/dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="{{url('public/assets-admin')}}/dist/js/init.js"></script>
    <script src="{{url('public/assets-admin')}}/dist/js/login-data.js"></script>
    <script>
        $('.btn-span').on('click', function(){

            
            var passwordField = $(".input_password");
            var fieldType = passwordField.attr("type");

            // Toggle jenis input antara 'password' dan 'text'
            if (fieldType === "password") {
                passwordField.attr("type", "text");
            } else {
                passwordField.attr("type", "password");
            }
        })
    </script>
</body>

</html>
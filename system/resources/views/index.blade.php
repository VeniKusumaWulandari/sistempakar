<!DOCTYPE html>
<html lang="en">

<head>
   @include('template.section.assets')
</head>

<body>
    <!-- Navbar Start -->
   @include('template.section.navbar')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{url('public/assets-user')}}/img/penderita-diabetes-1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">MEMPUNYAI PENYAKIT DARAH MANIS?</h2>
                        <h1 class="display-1 text-white m-0">DIABETES</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{url('public/assets-user')}}/img/diabetes1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">MEMPUNYAI PENYAKIT DARAH MANIS?</h2>
                        <h1 class="display-1 text-white m-0">DIABETES</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Diabetes</h4>
                <h1 class="display-4">Mengenal Diabetes Melitus</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Apa itu Diabetes?</h1>
                    <p>Diabetes adalah kondisi sel-sel tubuh yang tidak bisa menyerap cukup glukosa gula (sumber utama energi tubuh) dari darah, akibat kurangnya hormon insulin yang biasa diproduksi oleh prankeas. Bila insulin kurang, glukosa akan menumpuk di darah dan urin. Sel-sel harus menggunakan lemak sebagai sumber energi, bukannya glukosa, yang akan menuju ke penumpukan produk sampingan yang beracun. Penyakit ini berlangsung lama atau kronis serta ditandai dengan kadar gula (glukosa) darah yang tinggi atau di atas nilai normal. Glukosa yang menumpuk di dalam darah akibat tidak diserap sel tubuh dengan baik dapat menimbulkan berbagai gangguan organ tubuh. Jika diabetes tidak dikontrol dengan baik, dapat timbul berbagai komplikasi yang membahayakan nyawa penderita.</p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{url('public/assets-user')}}/img/gambar1.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Apa Gejala Diabetes?</h1>
                    <p>Pengidap diabetes tahap awal biasanya mengeluhkan gejala sakit kepala, badan lesu, dan tidak bertenaga. <br> <br> Ada dua faktor penyebab gejala-gejala ini, yaitu kadar gula darah yang terlalu tinggi (hiperglikemia) atau terlalu rendah (hipoglikemia).</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h4>
                <h1 class="display-4">Yang Sering Dipertanyakan</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{url('public/assets-user')}}/img/slide1.png" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Siapa Saja Beresiko Diabetes?</h4>
                            <p class="m-0">Orang dengan berat badan berlebih atau obesitas berisiko terkena diabetes. Hal ini terjadi karena jaringan lemak berlebih di tubuh bisa menyebabkan tubuh sulit menggunakan insulin secara efektif</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{url('public/assets-user')}}/img/slide2.png" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Tips Hidup Sehat</h4>
                            <p class="m-0"> Makan makanan yang bergizi seperti makan sayur dan buah sebanyak 400 gram/5 porsi dalam sehari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{url('public/assets-user')}}/img/slide3.png" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Cara untuk mengetahui penyakit Diabetes secara dini</h4>
                            <p class="m-0">Pengidap diabetes tahap awal biasanya mengeluhkan gejala sakit kepala, badan lesu, dan tidak bertenaga. Ada dua faktor penyebab gejala-gejala ini, yaitu kadar gula darah yang terlalu tinggi (hiperglikemia) atau terlalu rendah (hipoglikemia).</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{url('public/assets-user')}}/img/slide4.png" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Langkah Jika Terdiagnosa</h4>
                            <p class="m-0">Mengikuti Edukasi (penyuluhan dan konseling) tentang DM di : • Pos Pembinaan Terpadu (Posbindu PTM) </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



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
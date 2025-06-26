<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Pengguna SiPeercouns.id</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Pengguna/img/logo.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/bootstrap.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/nice-select.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/font-awesome.min.css') }}">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/icofont.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/slicknav.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/owl-carousel.css') }}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/datepicker.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/animate.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/magnific-popup.css') }}">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('Pengguna/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Pengguna/css/responsive.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="{{ route ('berandapengguna') }}" class="logonav">
                <!-- Your logo image here -->
                <img src="Pengguna/img/logonav.png" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navbarContent">
                <ul class="navbar-nav navbar-nav-hover ms-auto d-none d-md-flex">
                    <li class="nav-item mx-2">
                        <a href="{{ route('carikonselor') }}" role="button" class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Konseling</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="" role="button" class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Live Chat</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="" role="button" class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Riwayat</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="" role="button" class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">List Percouns</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-auto">
                    <a href="{{ url('/regist') }}" class="button regist btn-primary ml-2">KONSELING</a>
                    <a href="{{ url('/login') }}" class="button login btn-secondary ml-2">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="page-header-custom min"></div>

    <div class="container">
        <section class="pt-3 pb-6" id="individual">
            <div class="bg-custom-background position-relative border-radius-xl custom-background"
                style="background-image: url('{{ asset('Pengguna/img/latar.jpg') }}');">
                <span class="mask mask-custom border-radius-xl"></span>
                <div class="container pb-lg-9 pb-10 pt-7 position-relative z-index-2">
                    <div class="row">
                        <div class="col-md-6 mx-auto text-center position-relative">
                            <h3 class="custom-text-white">Individual</h3>
                            <p class="custom-text-white2">"Konseling yang dilakukan antara individu bersama Psikolog baik secara tatap muka ataupun online dengan durasi 60 menit/sesi."</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-7 mx-auto text-center">
                            <div class="custom-nav-wrapper mt-5 position-relative z-index-2">
                                <ul class="custom-nav custom-nav-pills nav-fill flex-row p-1 flex-column on-resize" id="tabs-pricing" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="custom-nav-link mb-0 active" href="{{ route('carikonselor') }}" role="tab" aria-controls="monthly1" aria-selected="true">Cari Konselor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>        
    </div>    
    <!-- Footer Area -->
    <footer class="bg-main-blue text-white py-6 mt-n1">
        <div class="container">
            <hr class="horizontal light mt-4">
            <div class="row">
                <div class="col-12 col-lg-10 text-white">
                    <h5 class="text-white">Gabung Group #PejuangKesehatanMental</h5>
                    <p class="mb-lg-0 mb-3">Butuh teman cerita dan informasi terbaru seputar kesehatan mental? Yuk,
                        gabung grup WhatsApp!</p>
                </div>
                <div class="col-lg-2 col-6 align-self-center">
                    <a href=""
                        class="btn-sm w-100 px-3 bg-gradient-main-yellow btn-round mb-0">Join Group</a>
                </div>
            </div>
            <hr class="horizontal light mt-4">
        </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="{{ asset('Pengguna/js/jquery.min.js') }}"></script>
    <!-- jquery Migrate JS -->
    <script src="{{ asset('Pengguna/js/jquery-migrate-3.0.0.js') }}"></script>
    <!-- jquery Ui JS -->
    <script src="{{ asset('Pengguna/js/jquery-ui.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('Pengguna/js/easing.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ asset('Pengguna/js/colors.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('Pengguna/js/popper.min.js') }}"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="{{ asset('Pengguna/js/bootstrap-datepicker.js') }}"></script>
    <!-- Jquery Nav JS -->
    <script src="{{ asset('Pengguna/js/jquery.nav.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('Pengguna/js/slicknav.min.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('Pengguna/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Niceselect JS -->
    <script src="{{ asset('Pengguna/js/niceselect.js') }}"></script>
    <!-- Tilt Jquery JS -->
    <script src="{{ asset('Pengguna/js/tilt.jquery.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('Pengguna/js/owl-carousel.js') }}"></script>
    <!-- counterup JS -->
    <script src="{{ asset('Pengguna/js/jquery.counterup.min.js') }}"></script>
    <!-- Steller JS -->
    <script src="{{ asset('Pengguna/js/steller.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('Pengguna/js/wow.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('Pengguna/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('Pengguna/js/bootstrap.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('Pengguna/js/main.js') }}"></script>
</body>

</html>

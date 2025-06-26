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
            <a href="{{ route('berandapengguna') }}" class="logonav">
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
                        <a href="{{ route('carikonselor') }}" role="button"
                            class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Konseling</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ route('livechat') }}" role="button"
                            class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Live Chat</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ route('riwayatkonsultasi') }}" role="button"
                            class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Riwayat</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ route('artikel') }}" role="button"
                            class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Artikel</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ route('profile') }}" role="button"
                            class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Profile</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-auto">
                    <a href="{{ route('carikonselor') }}" class="button regist btn-primary ml-2">KONSELING</a>
                    <a href="{{ url('/login') }}" class="button login btn-secondary ml-2">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('Pengguna/img/bg.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('Pengguna/img/bg.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>

    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <div class="container new-content-container">
        <div class="row flex">
            <div class="col-lg-12 z-index-1 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                <div class="row flex">
                    <div class="col-lg-3 col-md-6 col-12 position-relative">
                        <div class="p-2 text-center">
                            <h2 class="text-gradient text-warning h1">500+</h2>
                            <p class="mt-2">Cerita telah dipercayakan kepada SiPeercouns.id sejak 2023</p>
                        </div>
                        <hr class="vertical dark extended-border">
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 position-relative">
                        <div class="p-2 text-center">
                            <h2 class="text-gradient text-warning h1">6+</h2>
                            <p class="mt-2">PeerCouns teman sebaya dalam berbagai bidang keahlian</p>
                        </div>
                        <hr class="vertical dark extended-border">
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 position-relative">
                        <div class="p-2 text-center">
                            <h2 class="text-gradient text-warning h1">99.4%</h2>
                            <p class="mt-2">Mahasiswa & Mahasiswi merasakan terbantu setelah sesi konseling bersama
                                SiPeercouns.id</p>
                        </div>
                        <hr class="vertical dark extended-border">
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="p-2 text-center">
                            <h2 class="text-gradient text-warning h1">60%</h2>
                            <p class="mt-2">Mahasiswa & Mahasiswi menggunakan layanan konseling SiPeercouns.id lebih
                                dari sekali</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/End Start schedule Area -->

    <div class="mt-7 pb-8">
        <div class="container">
            <div class="row flex">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="text-main-blue">Layanan SiPeercouns.Id</h2>
                    <p class="lead">
                        "Temukan dukungan dan pemahaman di setiap langkah perjalanan kesehatan mentalmu bersama
                        SiPeercouns.Id"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-2 mb-5 py-5 bg-gradient-softblue2 position-relative overflow-hidden">
        <div class="relative-container">
            <img src="https://www.ibunda.id/assets/img/shapes/waves-gray.svg" alt="pattern-lines"
                class="position-absolute custom-start custom-top custom-opacity">
        </div>
        <div class="container position-relative z-index-2">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-4 py-md-2 py-1 d-flex">
                    <div class="card bg-gradient-main-blue2 flex-fill">
                        <img class="card-img-top" src="{{ asset('pengguna/img/konseling.jpg') }}"
                            style="object-fit: cover" alt="...">
                        <div class="card-body text-center mb-8 pb-8">
                            <h4 class="text-white">Konseling</h4>
                            <p class="text-white2">
                                Konseling yang dilakukan antara individu bersama PeerCouns baik secara tatap muka
                                ataupun online.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('carikonselor') }}"
                                class="btn-round bg-gradient-main-yellow icon-move-right">
                                Mulai Konseling
                                <img src="{{ asset('pengguna/img/arah.png') }}" alt="Arrow" class="arrow-icon">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row flex">
                <div class="col-md-7 col-12 my-2 align-self-center">
                    <h2 class="text-gradient text-main-yellow">Apapun masalahmu, </h2>
                    <h2 class="text-gradient text-main-blue">Konselor SiPeercouns.id siap mendengarkan!</h2>
                    <p class="pe-md-5 mb-4">
                        Kamu bisa bebas memilih PeerCouns berlisensi sesuai preferensi, pengalaman, serta topik keahlian
                        yang sesuai dengan kebutuhanmu.
                    </p>
                    <span class="badge badge-lg badge-secondary mb-1">Akademik</span>
                    <span class="badge badge-lg badge-secondary mb-1">Kekerasan Seksual</span>
                    <span class="badge badge-lg badge-secondary mb-1">Pribadi</span>
                    <span class="badge badge-lg badge-secondary mb-1">Kesehatan Mental</span>
                </div>
                <div class="col-md-5 col-12 my-auto">
                    <div class="row flex">
                        <div class="col-md-8 mx-auto">
                            <div class="swiper recent swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-a3d2771010a224251e" aria-live="off"
                                    style="">
                                    <!-- Slide 1 -->
                                    <div class="swiper-slide" role="group" aria-label="1/4"
                                        style="margin-right: 24px;">
                                        <div class="card shadow-none border">
                                            <div class="text-center mt-4">
                                                <img class="avatar-custom rounded-circle"
                                                    src="{{ asset('storage/' . $konselor->img) }}" alt="...">
                                            </div>
                                            <div class="text-center card-body">
                                                <h6 class="text-main-blue2">PeerCouns</h6>
                                                <a href="">
                                                    <h5 class="custom-font-size">
                                                        <strong>{{ $konselor->name }}</strong>
                                                    </h5>
                                                </a>
                                                <div class="mt-4 px-4">
                                                    <div class="d-flex pb-2">
                                                        <div>
                                                            <img src="{{ asset('pengguna/img/orang.png') }}"
                                                                class="custom-icon" alt="Users Icon">
                                                        </div>
                                                        <div class="ps-3">
                                                            <span>{{ $konselor->riwayat_count }} + Sesi</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex pb-2">
                                                        <div>
                                                            <img src="{{ asset('pengguna/img/koper.png') }}"
                                                                class="custom-icon" alt="Briefcase Icon">
                                                        </div>
                                                        <div class="ps-3">
                                                            <span>2 Tahun</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <h2 class="text-gradient text-main-yellow2 text-center">Kata mereka yang telah berproses</h2>
            <h2 class="text-gradient text-main-blue3 text-center">bersama SiPeercouns.id</h2>
            <p class="pe-md-5 mb-5 text-center">
                Kisah #PejuangKesehatan Mental yang sudah menggunakan layanan SiPeercouns.id.
                <br>
                Kamu juga bisa seperti mereka, karena ceritamu layak didengar.
            </p>
            <div class="row d-none d-md-flex">
                @php
                    $riwayat1 = $riwayat->get(0);
                    $riwayat2 = $riwayat->get(1);
                    $riwayat3 = $riwayat->get(2);
                @endphp

                @if ($riwayat1)
                    <div class="col d-flex">
                        <div class="custom-card border shadow-none flex-fill">
                            <div class="custom-card-body pb-0 mb-0">
                                <h5 class="mb-0">{{ $riwayat1->nama_lengkap }}</h5>
                                <small>{{ $riwayat1->jenis_konsultasi }}</small>
                                <p class="mt-3">
                                    {{ $riwayat1->kesan_pesan }}
                                </p>
                            </div>
                            <div class="custom-card-footer mt-0 pt-0 text-end">
                                <small>{{ $riwayat1->created_at->format('d-m-Y H:i') }}</small>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($riwayat2)
                    <div class="col d-flex">
                        <div class="custom-card border shadow-none flex-fill bg-gradient-main-blue text-white">
                            <div class="custom-card-body pb-0 mb-0">
                                <h5 class="mb-0 text-white">{{ $riwayat2->nama_lengkap }}</h5>
                                <small>{{ $riwayat2->jenis_konsultasi }}</small>
                                <p class="mt-3 text-white">{{ $riwayat2->kesan_pesan }}</p>
                            </div>
                            <div class="custom-card-footer mt-0 pt-0 text-end">
                                <small>{{ $riwayat2->created_at->format('d-m-Y H:i') }}</small>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($riwayat3)
                    <div class="col d-flex">
                        <div class="custom-card border shadow-none flex-fill">
                            <div class="custom-card-body pb-0 mb-0">
                                <h5 class="mb-0">{{ $riwayat3->nama_lengkap }}</h5>
                                <small>{{ $riwayat3->jenis_konsultasi }}</small>
                                <p class="mt-3">{{ $riwayat3->kesan_pesan }}</p>
                            </div>
                            <div class="custom-card-footer mt-0 pt-0 text-end">
                                <small>{{ $riwayat3->created_at->format('d-m-Y H:i') }}</small>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                });
            });
        </script>
    @endif
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

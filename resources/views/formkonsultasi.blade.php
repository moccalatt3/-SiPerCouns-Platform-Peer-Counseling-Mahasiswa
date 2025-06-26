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
                <img src="{{ asset('Pengguna/img/logonav.png') }}" alt="Logo">
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
                        <a href="" role="button"
                            class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Live Chat</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="" role="button"
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
    <div class="counseling-form">
        <h1 class="form-title">Counseling With</h1>
        <p class="form-subtitle">{{ $konselor->name }}</p>

        <form action="{{ route('konsultasi.store', ['id_konselor' => $konselor->id_konselor]) }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="nama_lengkap" class="form-label">Nama Lengkap :</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="program_studi" class="form-label">Program Studi :</label>
                <select class="form-control" id="program_studi" name="program_studi" required>
                    <option value="">Pilih Program Studi</option>
                    <option value="teknik_mesin">Teknik Mesin</option>
                    <option value="teknik_informatika">Teknik Informatika</option>
                    <option value="teknik_pendingin">Teknik Pendingin</option>
                    <option value="keperawatan">Keperawatan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="gender" class="form-label">Gender :</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Pilih Gender</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="mahasiswi">Mahasiswi</option>
                    <option value="anonymous">Anonymous</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_konsultasi" class="form-label">Jenis Konsultasi :</label>
                <select class="form-control" id="jenis_konsultasi" name="jenis_konsultasi" required>
                    <option value="">Pilih Jenis Konsultasi</option>
                    <option value="akademik">Akademik</option>
                    <option value="kekerasan_seksual">Kekerasan Seksual</option>
                    <option value="pribadi">Pribadi</option>
                    <option value="kesehatan_mental">Kesehatan Mental</option>
                </select>
            </div>

            <div class="form-group">
                <label for="topik_konsultasi" class="form-label">Topik Konsultasi :</label>
                <input type="text" class="form-control" id="topik_konsultasi" name="topik_konsultasi" required>
            </div>

            <div class="form-group">
                <label for="mode_konsultasi" class="form-label">Mode Konsultasi :</label>
                <select class="form-control" id="mode_konsultasi" name="mode_konsultasi" required>
                    <option value="">Pilih Mode Konsultasi</option>
                    <option value="tatap_muka">Tatap Muka</option>
                    <option value="online">Online</option>
                    <option value="telepon">Telepon</option>
                </select>
            </div>

            <button type="submit" class="submit primary">Kirim</button>
        </form>
    </div>
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

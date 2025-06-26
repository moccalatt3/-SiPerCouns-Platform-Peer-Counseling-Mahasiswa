<!doctype html>
<html class="no-js" lang="zxx">

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
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
                        <a href="{{ route('profile') }}" role="button" class="nav-link ps-2 justify-content-end cursor-pointer align-items-center">Profile</a>
                    </li>  
                </ul>
                <div class="d-flex align-items-center ms-auto">
                    <a href="{{ route('carikonselor') }}" class="button regist btn-primary ml-2">KONSELING</a>
                    <a href="{{ url('/login') }}" class="button login btn-secondary ml-2">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="header-background">
        <div class="container py-8">
            <div class="row d-flex">
                {{-- <div class="col-3 d-none d-lg-block">
                    <div class="custom-accordion border" id="serviceAccordion">
                        <div class="custom-accordion-item">
                            <div class="custom-accordion-header" id="headingTwo">
                                <div class="custom-accordion-title fw-bold" aria-expanded="true">
                                    Jenis Konsultasi
                                </div>
                            </div>
                            <div id="serviceType" class="custom-accordion-collapse show" aria-labelledby="headingTwo">
                                <div class="custom-accordion-body text-sm opacity-8">
                                    <div class="service-category mb-3">
                                        <p class="category-title fw-bold mt-0 mb-2">Akademik</p>
                                        <p class="category-title fw-bold mt-0 mb-2">Kekerasan Sexsual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-15 col-12 p-0 px-md-3">
                    <div class="custom-nav-wrapper position-relative mb-3">
                        <ul class="nav nav-tabs custom-nav-tabs"
                            role="tablist">
                            <li class="nav-item custom-nav-item" role="presentation">
                                <button wire:click="changeTab('schedule')"
                                    class="nav-link custom-nav-link10 active"
                                    id="schedule-tab" type="button" data-bs-toggle="pill"
                                    data-bs-target="#schedule" role="tab" aria-controls="schedule"
                                    aria-selected="true">Jadwal Peercouns</button>
                            </li>
                            <li class="nav-item custom-nav-item" role="presentation">
                                <button wire:click="changeTab('all')"
                                    class="nav-link custom-nav-link10" id="all-tab"
                                    data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab"
                                    aria-controls="all" aria-selected="false">Semua Peercouns</button>
                            </li>
                        </ul>
                    </div>
                    <div class="custom-row-peer mb-3 d-flex justify-content-between">
                        <div class="custom-col col-lg-4 col-6 mb-3 mb-lg-0">
                            <div class="form-group mb-0">
                                <form method="GET" action=""> {{--{{ route('filterkonselor') --}}
                                    <select name="day" class="custom-form-control" id="daySelect"
                                        onchange="this.form.submit()">
                                        <option value="">Semua Hari</option>
                                        <option value="Senin" {{ request('day') == 'Senin' ? 'selected' : '' }}>Senin
                                        </option>
                                        <option value="Selasa" {{ request('day') == 'Selasa' ? 'selected' : '' }}>
                                            Selasa</option>
                                        <option value="Rabu" {{ request('day') == 'Rabu' ? 'selected' : '' }}>Rabu
                                        </option>
                                        <option value="Kamis" {{ request('day') == 'Kamis' ? 'selected' : '' }}>Kamis
                                        </option>
                                        <option value="Jumat" {{ request('day') == 'Jumat' ? 'selected' : '' }}>Jumat
                                        </option>
                                        <option value="Sabtu" {{ request('day') == 'Sabtu' ? 'selected' : '' }}>Sabtu
                                        </option>
                                        <option value="Minggu" {{ request('day') == 'Minggu' ? 'selected' : '' }}>
                                            Minggu</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="custom-col col-lg-4 col-6 mb-3 mb-lg-0">
                            <div class="form-group mb-0">
                                <form method="GET" action="{{ route('filterkonselorbytime') }}">
                                    <select name="time" class="custom-form-control" id="timeSelect"
                                        onchange="this.form.submit()">
                                        <option value="">Semua Waktu</option>
                                        <option value="pagi" {{ request('time') == 'pagi' ? 'selected' : '' }}>Pagi
                                            (00:00 - 11:59)</option>
                                        <option value="siang" {{ request('time') == 'siang' ? 'selected' : '' }}>
                                            Siang (12:00 - 17:59)</option>
                                        <option value="malam" {{ request('time') == 'malam' ? 'selected' : '' }}>
                                            Malam (18:00 - 23:59)</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="custom-col col-lg-4 col-12 mb-3 mb-lg-0">
                            <div class="custom-input-group">
                                <span class="custom-input-group-text">
                                    <i class="bi bi-search" aria-hidden="true"></i>
                                </span>
                                <input id="searchInput" name="search" class="custom-form-control"
                                    placeholder="Masukkan Nama Peercouns" type="text">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row d-flex">
                        <div class="col">
                            <div class="custom-categories mb-5 d-flex">
                                <div id="customDateRangeBtn"
                                    class="custom-div custom-div-elongated custom-div-highlight py-1 px-2"
                                    style="text-transform: none">
                                    <div class="custom-author">
                                        <i class="bi bi-calendar-event-fill custom-icon2" aria-hidden="true"></i>
                                        <div class="custom-name ps-2">
                                            <small class="custom-text">Pilih Tanggal</small>
                                            <div class="custom-stats">
                                                <b class="custom-date">10 Jun - 25 Jun</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="setDate()"
                                    class="custom-div custom-div-square custom-div-schedule py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-text-sm">Semua<br>Jadwal</span>
                                </div>
                                <div onclick="setDate('2024-06-10')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">10 Jun<br>Senin</span>
                                </div>
                                <div onclick="setDate('2024-06-11')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">11 Jun<br>Selasa</span>
                                </div>
                                <div onclick="setDate('2024-06-12')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">12 Jun<br>Rabu</span>
                                </div>
                                <div onclick="setDate('2024-06-13')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">13 Jun<br>Kamis</span>
                                </div>
                                <div onclick="setDate('2024-06-14')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">14 Jun<br>Jumat</span>
                                </div>
                                <div onclick="setDate('2024-06-15')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">15 Jun<br>Sabtu</span>
                                </div>
                                <div onclick="setDate('2024-06-16')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">16 Jun<br>Minggu</span>
                                </div>
                                <div onclick="setDate('2024-06-17')"
                                    class="custom-div custom-div-date custom-div-unselected py-1 px-2"
                                    aria-label="All Category" style="text-transform: none">
                                    <span class="custom-date-text">17 Jun<br>Senin</span>
                                </div>
                                <!-- Tambahkan lebih banyak tombol tanggal jika diperlukan -->
                            </div>
                        </div>
                    </div>
                    <div wire:loading.block>
                        <div class="row mb-3">
                            <div class="col text-center">
                                <div class="spinner-border text-primary" role="status"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div>
                        <div id="konselorContainer" class="container">
                            @foreach ($konselors as $konselor)
                                <div class="custom-card-peer custom-card-body mb-3 p-3 shadow-none border d-none d-md-flex">
                                    <div class="row d-flex">
                                        <div class="col-2 align-self-center text-center px-3">
                                            <div class="ratio ratio-1x1 custom-avatar-wrapper">
                                                <img src="{{ asset('storage/' . $konselor->img) }}"
                                                    class="w-100 rounded-circle custom-avatar" alt="Counselor Avatar">
                                            </div>
                                        </div>
                                        <div class="col align-self-center">
                                            <span class="custom-badge custom-badge-warning mb-2">Peercouns</span>
                                            <h5 class="custom-heading">{{ $konselor->name }}</h5>
                                            <div class="row justify-content-between me-0 d-flex">
                                                <div class="col">
                                                    <div class="custom-flex-container">
                                                        <span class="custom-info text-sm">
                                                            <img src="{{ asset('pengguna/img/orang.png') }}"
                                                                class="custom-icon" alt="Users Icon">
                                                            0 + Sesi
                                                        </span> {{-- {{ $konselor->riwayat_count }} --}}
                                                        {{-- <span class="custom-info text-sm">
                                                            <img src="{{ asset('pengguna/img/jempol.png') }}"
                                                                class="custom-icon" alt="Thumbs Up Icon">
                                                            100% Terbantu (72 Ulasan)
                                                        </span> --}}
                                                        <span class="custom-info text-sm">
                                                            <img src="{{ asset('pengguna/img/koper.png') }}"
                                                                class="custom-icon" alt="Briefcase Icon">
                                                            10 Tahun
                                                        </span>
                                                    </div>
                                                    <p class="fw-bold custom-schedule">
                                                        Jadwal Tersedia:
                                                        <span>{{ $konselor->available_times }}</span>
                                                    </p>
                                                </div>
                                                <div class="custom-container text-lg-end text-center">
                                                    <a href="{{ route('konsultasi.form', $konselor->id_konselor) }}"
                                                        class="custom-booking-button bg-gradient-main-yellow rounded-pill mb-0"
                                                        role="button">
                                                        <span>Konsultasi</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#searchInput').on('input', function() {
                                    var query = $(this).val();
                                    $.ajax({
                                        url: "{{ route('carikonselor.search') }}",
                                        method: 'GET',
                                        data: {
                                            search: query
                                        },
                                        success: function(data) {
                                            $('#konselorContainer').html(data);
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
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

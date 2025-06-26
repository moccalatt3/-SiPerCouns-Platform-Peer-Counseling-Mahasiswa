<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Konselor SiPeercouns.Id</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicons -->
    <link href="{{ asset('Admin/assets/img/logo.png') }}" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Admin/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('Admin/assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">Petsmart</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="custom-badge custom-bg-primary custom-badge-number">{{ $jumlahKonsultasi }}</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have {{ $jumlahKonsultasi }} new notifications
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach ($konsultasis as $konsultasi)
                            <li class="notification-item">
                                <i class="bi bi-exclamation-circle text-warning"></i>
                                <div>
                                    <h4>{{ $konsultasi->nama_lengkap }}</h4>
                                    <p>{{ $konsultasi->topik_konsultasi }}</p>
                                    <p>{{ $konsultasi->created_at->format('d M Y, H:i') }}</p>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                        
                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="custom-yellow-badge custom-yellow-bg-success custom-yellow-badge-number">{{ $jumlahNotifikasiChat }}</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have {{ $jumlahNotifikasiChat }} new messages
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach($liveChatKonsultasis as $konsultasi)
                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $konsultasi->pengguna->img_pengguna) }}" alt="" class="rounded-circle">
                                    <div>
                                        <h4>{{ $konsultasi->nama_lengkap }}</h4>
                                        <p>{{ $konsultasi->tanggapan_pengguna }}</p>
                                        <p>{{ $konsultasi->created_at->format('d M Y H:i') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('storage/' . $konselor->img) }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ $konselor->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ $konselor->name }}</h6>
                            <span>Konselor</span>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.datakonsultasi') }}">
                    <i class="bi bi-menu-button-wide"></i><span>Konsultasi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.tambahartikel') }}">
                    <i class="bi bi-journals"></i><span>Artikel</span>
                </a>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.livechat') }}">
                    <i class="bi bi-chat-left-text"></i><span>Live Chat</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('konselor.riwayat') }}">
                    <i class="bi bi-journal-text"></i><span>Riwayat</span><i class=""></i>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item collapsed">
                <a class="nav-link collapsed" href="{{ route('konselor.profile') }}">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link collapsed" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Riwayat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Riwayat</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Riwayat</h5>
                            <p>Data di bawah merupakan data yang sudah berkonsultasi</p>
        
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Program Studi</th>
                                        <th>Gender</th>
                                        <th>Jenis Konsultasi</th>
                                        <th>Kesan & Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayats as $riwayat)
                                    <tr>
                                        <td>{{ $riwayat->nama_lengkap }}</td>
                                        <td>{{ $riwayat->program_studi }}</td>
                                        <td>{{ $riwayat->gender }}</td>
                                        <td>{{ $riwayat->jenis_konsultasi }}</td>
                                        <td>{{ $riwayat->kesan_pesan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/chart.js') }}/chart.umd.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>

</body>

</html>

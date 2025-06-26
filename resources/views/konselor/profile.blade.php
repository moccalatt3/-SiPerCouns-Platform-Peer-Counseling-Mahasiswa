<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Konselor SiPeercouns.Id</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
                <span class="d-none d-lg-block">SiPeercouns</span>
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
                                    <p>{{ $konsultasi->jenis_konsultasi }}</p>
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
                        <span
                            class="custom-yellow-badge custom-yellow-bg-success custom-yellow-badge-number">{{ $jumlahNotifikasiChat }}</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have {{ $jumlahNotifikasiChat }} new messages
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach ($liveChatKonsultasis as $konsultasi)
                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $konsultasi->pengguna->img_pengguna) }}" alt=""
                                        class="rounded-circle">
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

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.livechat') }}">
                    <i class="bi bi-chat-left-text"></i><span>Live Chat</span>
                </a>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.riwayat') }}">
                    <i class="bi bi-journal-text"></i><span>Riwayat</span><i class=""></i>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item collapsed">
                <a class="nav-link" href="{{ route('konselor.profile') }}">
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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/' . $konselor->img) }}" alt="Profile"
                                class="rounded-circle">
                            <h2>{{ $konselor->name }}</h2>
                            <h3>Konselor</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">{{ $konselor->about }}</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $konselor->name }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">City</div>
                                        <div class="col-lg-9 col-md-8">{{ $konselor->city }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $konselor->email }}</div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <!-- Profile Edit Form -->
                                    <form action="{{ route('konselor.profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ asset('storage/' . $konselor->img) }}" alt="Profile">
                                                <div class="pt-2">
                                                    <input type="file" name="img" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName" value="{{ $konselor->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">{{ $konselor->about }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="city" type="text" class="form-control" id="city" value="{{ $konselor->city }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="email" value="{{ $konselor->email }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="availableTimes" class="col-md-4 col-lg-3 col-form-label">Jadwal Waktu</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="available_times" class="form-control" id="availableTimes">
                                                    <option value="pagi" {{ $konselor->available_times == 'pagi' ? 'selected' : '' }}>Pagi (00:00 - 11:59)</option>
                                                    <option value="siang" {{ $konselor->available_times == 'siang' ? 'selected' : '' }}>Siang (12:00 - 17:59)</option>
                                                    <option value="malam" {{ $konselor->available_times == 'malam' ? 'selected' : '' }}>Malam (18:00 - 23:59)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="availableDays" class="col-md-4 col-lg-3 col-form-label">Hari Kerja</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="available_days" class="form-control" id="availableDays">
                                                    <option value="Senin" {{ $konselor->available_days == 'Senin' ? 'selected' : '' }}>Senin</option>
                                                    <option value="Selasa" {{ $konselor->available_days == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                                    <option value="Rabu" {{ $konselor->available_days == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                                    <option value="Kamis" {{ $konselor->available_days == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                                    <option value="Jumat" {{ $konselor->available_days == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                                    <option value="Sabtu" {{ $konselor->available_days == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                                    <option value="Minggu" {{ $konselor->available_days == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->
                                </div>
                                
                                
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form action="{{ route('konselor.change_password') }}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control"
                                                    id="currentPassword" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="new_password" type="password" class="form-control"
                                                    id="newPassword" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renew_password" type="password" class="form-control"
                                                    id="renewPassword" required>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="primary">Change Password</button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                @if(session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: '{{ session('success') }}',
                                    });
                                </script>
                                @endif
                                
                                @if($errors->any())
                                <script>
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Pastikan inputannya benar!',
                                    });
                                </script>
                                @endif                                
                                
                            </div><!-- End Bordered Tabs -->
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main><!-- End #main -->

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

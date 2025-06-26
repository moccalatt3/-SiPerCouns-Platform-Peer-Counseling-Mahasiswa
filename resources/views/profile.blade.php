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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Pengguna SiPeercouns.id</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Pengguna/img/logo.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
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
    <section class="section profile">
        <div class="row custom-row">
            <div class="col-xl-4">
                <div class="custom-card-profile">
                    <div class="custom-card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('storage/' . $pengguna->img_pengguna) }}" alt="Profile"
                            class="custom-rounded-circle4">
                        <h2>{{ $pengguna->name }}</h2>
                        <h3>Pengguna</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="custom-card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs custom-nav-tabs">
                            <li class="nav-item custom-nav-item">
                                <button class="nav-link custom-nav-link10 active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <button class="nav-link custom-nav-link10" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Edit Profile</button>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <button class="nav-link custom-nav-link10" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active custom-profile-overview" id="profile-overview">
                                <h5 class="custom-card-title">About</h5>
                                <p class="custom-small fst-italic">{{ $pengguna->about }}</p>

                                <h5 class="custom-card-title">Profile Details</h5>

                                <div class="custom-row mb-2">
                                    <div class="custom-col-label">Full Name</div>
                                    <div class="custom-col-value">{{ $pengguna->name }}</div>
                                </div>
                                <div class="custom-row mb-2">
                                    <div class="custom-col-label">City</div>
                                    <div class="custom-col-value">{{ $pengguna->city }}</div>
                                </div>
                                <div class="custom-row mb-2">
                                    <div class="custom-col-label">Email</div>
                                    <div class="custom-col-value">{{ $pengguna->email }}</div>
                                </div>
                            </div>

                            <div class="tab-pane fade custom-profile-edit pt-3" id="profile-edit">
                                <!-- Profile Edit Form -->
                                <form method="POST" action="{{ route('profile.update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- karena Anda akan melakukan update data -->
                                    <div class="custom-row mb-3">
                                        <label for="profileImage" class="custom-col-label col-form-label">Profile
                                            Image</label>
                                        <div class="custom-col-value">
                                            <img src="{{ $pengguna->img_pengguna ? asset('storage/' . $pengguna->img_pengguna) : asset('placeholder.jpg') }}"
                                                alt="Profile">
                                            <input type="file" name="profile_image"
                                                class="form-control-file mt-2">
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="fullName" class="custom-col-label col-form-label">Full
                                            Name</label>
                                        <div class="custom-col-value">
                                            <input name="fullName" type="text" class="form-control"
                                                id="fullName" value="{{ old('fullName', $pengguna->name) }}">
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="about" class="custom-col-label col-form-label">About</label>
                                        <div class="custom-col-value">
                                            <textarea name="about" class="form-control" id="about" style="height: 100px">{{ old('about', $pengguna->about) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="username" class="custom-col-label col-form-label">Username</label>
                                        <div class="custom-col-value">
                                            <input name="username" type="text" class="form-control"
                                                id="username" value="{{ old('username', $pengguna->username) }}">
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="city" class="custom-col-label col-form-label">City</label>
                                        <div class="custom-col-value">
                                            <input name="city" type="text" class="form-control" id="city"
                                                value="{{ old('city', $pengguna->city) }}">
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="Email" class="custom-col-label col-form-label">Email</label>
                                        <div class="custom-col-value">
                                            <input name="email" type="email" class="form-control" id="Email"
                                                value="{{ old('email', $pengguna->email) }}">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="tombol-gradient">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>
                            <div class="tab-pane fade custom-change-password pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form method="POST" action="{{ route('profile.updatePassword') }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="custom-row mb-3">
                                        <label for="currentPassword" class="custom-col-label col-form-label">Current
                                            Password</label>
                                        <div class="custom-col-value">
                                            <input name="current_password" type="password" class="form-control"
                                                id="currentPassword" required>
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="newPassword" class="custom-col-label col-form-label">New
                                            Password</label>
                                        <div class="custom-col-value">
                                            <input name="new_password" type="password" class="form-control"
                                                id="newPassword" required>
                                        </div>
                                    </div>
                                    <div class="custom-row mb-3">
                                        <label for="renewPassword" class="custom-col-label col-form-label">Re-enter
                                            New Password</label>
                                        <div class="custom-col-value">
                                            <input name="new_password_confirmation" type="password"
                                                class="form-control" id="renewPassword" required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="tombol-gradient">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    @if (session('salah'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('salah') }}',
                });
            });
        </script>
    @endif


    <!-- jquery Min JS -->
    <script src="{{ asset('Pengguna/js/jquery.min.js') }}"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('Pengguna/js/bootstrap.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('Pengguna/js/main.js') }}"></script>
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

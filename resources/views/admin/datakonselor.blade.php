<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin SiPeercouns.id</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('Admin/assets/img/logo.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
                <img src="assets/img/logo.png" alt="">
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

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
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
                <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('datapengguna') }}">
                            <i class="bi bi-circle"></i><span>Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.datakonselor') }}" class="active">
                            <i class="bi bi-circle"></i><span>Konselor</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.riwayat') }}">
                    <i class="bi bi-journal-text"></i><span>Riwayat</span>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link collapsed" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li><!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Konselor</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title flex-grow-1">Konselor</h5>
                            <a href="{{ route('admin.tambahkonselor') }}">
                                <i class="bi bi-plus-lg card-icon"></i>
                            </a>
                        </div>
                        <!-- Modal Edit Data Konselor -->
                        <div class="modal fade" id="" tabindex="-1"
                            aria-labelledby="editKonselorModalLabel" aria-hidden="true"> {{-- editKonselorModal --}}
                            <div class="modal-dialog">
                                <form id="editKonselorForm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editKonselorModalLabel">Edit Data Konselor
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="editUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="editUsername"
                                                    name="username" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="editPassword"
                                                    name="password" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="primary2">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Modal for viewing Konselor data -->
                        <div class="modal fade" id="" tabindex="-1"
                            aria-labelledby="viewKonselorModalLabel" aria-hidden="true"> {{--viewKonselorModal--}}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="viewKonselorModalLabel">View Data Konselor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Name :</strong> <span id="viewName"></span></p>
                                        <p><strong>Email :</strong> <span id="viewEmail"></span></p>
                                        <p><strong>City :</strong> <span id="viewCity"></span></p>
                                        <p><strong>Username :</strong> <span id="viewUsername"></span></p>
                                        <p><strong>About :</strong> <span id="viewAbout"></span></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konselors as $konselor)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $konselor->name }}</td>
                                        <td>{{ $konselor->email }}</td>
                                        <td>{{ $konselor->city }}</td>
                                        <td>{{ $konselor->username }}</td>
                                        <td>{{ $konselor->created_at }}</td>
                                        <td>
                                            <a href="#" class="icon-link eye-icon"
                                                data-id="{{ $konselor->id_konselor }}" data-bs-toggle="modal"
                                                data-bs-target="#viewKonselorModal">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a href="#" class="icon-link edit-icon"
                                                data-id="{{ $konselor->id_konselor }}" data-bs-toggle="modal"
                                                data-bs-target="#editKonselorModal">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="icon-link delete-icon"
                                                onclick="confirmDeleteKonselor({{ $konselor->id_konselor }})">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {

                                document.querySelectorAll('.eye-icon').forEach(function(element) {
                                    element.addEventListener('click', function() {
                                        var konselorId = this.getAttribute('data-id');
                                        fetch(`/admin/konselor/${konselorId}`)
                                            .then(response => response.json())
                                            .then(data => {
                                                document.getElementById('viewName').textContent = data.name;
                                                document.getElementById('viewEmail').textContent = data.email;
                                                document.getElementById('viewCity').textContent = data.city;
                                                document.getElementById('viewUsername').textContent = data.username;
                                                document.getElementById('viewAbout').textContent = data.about;
                                            });
                                    });
                                });

                                document.querySelectorAll('.edit-icon').forEach(function(element) {
                                    element.addEventListener('click', function() {
                                        var konselorId = this.getAttribute('data-id');
                                        fetch(`/admin/konselor/${konselorId}`)
                                            .then(response => response.json())
                                            .then(data => {
                                                document.getElementById('editUsername').value = data.username;
                                                document.getElementById('editPassword').value = '';
                                                document.getElementById('editKonselorForm').action =
                                                    `/admin/konselor/${konselorId}`;
                                            });
                                    });
                                });

                                document.getElementById('editKonselorForm').addEventListener('submit', function(event) {
                                    event.preventDefault();
                                    var formData = new FormData(this);
                                    var konselorId = this.action.split('/').pop();

                                    fetch(`/admin/konselor/${konselorId}`, {
                                            method: 'PUT',
                                            headers: {
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify(Object.fromEntries(formData))
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Success',
                                                    text: 'Data berhasil diperbarui!'
                                                }).then(() => {
                                                    location.reload();
                                                });
                                            } else {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Terjadi Kesalahan',
                                                    text: 'Data konselor gagal di edit',
                                                });
                                            }
                                        })
                                        .catch(error => {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Terjadi Kesalahan',
                                                text: 'Data konselor gagal di edit',
                                            });
                                        });
                                });
                            });

                            function confirmDeleteKonselor(id) {
                                Swal.fire({
                                    title: 'Apakah Anda yakin?',
                                    text: "Anda tidak akan dapat mengembalikan data ini!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Ya, hapus!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        fetch(`/admin/konselor/${id}`, {
                                                method: 'DELETE',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                }
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    Swal.fire({
                                                        icon: 'success',
                                                        title: 'Berhasil',
                                                        text: data.success,
                                                        timer: 2000,
                                                        showConfirmButton: false
                                                    }).then(() => {
                                                        location.reload();
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Terjadi Kesalahan',
                                                        text: 'Konselor gagal dihapus.',
                                                        timer: 2000,
                                                        showConfirmButton: false
                                                    });
                                                }
                                            })
                                            .catch(error => {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Terjadi Kesalahan',
                                                    text: 'Konselor gagal dihapus.',
                                                    timer: 2000,
                                                    showConfirmButton: false
                                                });
                                            });
                                    }
                                });
                            }
                        </script>
                        <!-- End Table with stripped rows -->
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

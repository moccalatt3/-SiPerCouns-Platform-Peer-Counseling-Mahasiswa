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
                        <a href="{{ route('datapengguna') }}" class="active">
                            <i class="bi bi-circle"></i><span>Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.datakonselor') }}">
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
            <h1>Data Pengguna</h1>
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
                            <h5 class="card-title flex-grow-1">Pengguna</h5>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penggunas as $pengguna)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $pengguna->name }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        <td>{{ $pengguna->username }}</td>
                                        <td>{{ $pengguna->created_at }}</td>
                                        <td>
                                            <a href="#" class="icon-link eye-icon"
                                                onclick="viewPengguna({{ $pengguna->id_pengguna }})">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a href="#" class="icon-link edit-icon"
                                                onclick="editPengguna({{ $pengguna->id_pengguna }}, '{{ $pengguna->username }}')">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="icon-link delete-icon"
                                                onclick=""> {{--confirmDelete({{ $pengguna->id_pengguna }})--}}
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal View -->
                    <div class="modal fade" id="viewPenggunaModal" tabindex="-1"
                        aria-labelledby="viewPenggunaModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewPenggunaModalLabel">Detail Pengguna</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Name :</strong> <span id="viewName"></span></p>
                                    <p><strong>Email :</strong> <span id="viewEmail"></span></p>
                                    <p><strong>Username :</strong> <span id="viewUsername"></span></p>
                                    <p><strong>Created At :</strong> <span id="viewCreatedAt"></span></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="" tabindex="-1" 
                        aria-labelledby="editPenggunaModalLabel" aria-hidden="true"> {{--editPenggunaModal--}}
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editPenggunaForm">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editPenggunaModalLabel">Edit Pengguna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                name="username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                name="password" required>
                                        </div>
                                        <input type="hidden" id="editPenggunaId" name="id_pengguna">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="primary2">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        function viewPengguna(id) {
                            fetch(`/admin/pengguna/${id}`)
                                .then(response => response.json())
                                .then(data => {
                                    document.getElementById('viewName').innerText = data.name;
                                    document.getElementById('viewEmail').innerText = data.email;
                                    document.getElementById('viewUsername').innerText = data.username;
                                    document.getElementById('viewCreatedAt').innerText = data.created_at;
                                    new bootstrap.Modal(document.getElementById('viewPenggunaModal')).show();
                                })
                                .catch(error => console.error('Error:', error));
                        }

                        function editPengguna(id, username) {
                            document.getElementById('editPenggunaId').value = id;
                            document.getElementById('username').value = username;
                            new bootstrap.Modal(document.getElementById('editPenggunaModal')).show();
                        }

                        document.getElementById('editPenggunaForm').addEventListener('submit', function(event) {
                            event.preventDefault();
                            const id = document.getElementById('editPenggunaId').value;
                            const username = document.getElementById('username').value;
                            const password = document.getElementById('password').value;

                            fetch(`/admin/pengguna/${id}`, {
                                    method: 'PUT',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    },
                                    body: JSON.stringify({
                                        username: username,
                                        password: password
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: data.success,
                                        timer: 2000,
                                        showConfirmButton: false
                                    }).then(() => {
                                        location.reload();
                                    });
                                })
                                .catch(error => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Terjadi Kesalahan',
                                        text: 'Pengguna gagal diperbarui',
                                        timer: 2000,
                                        showConfirmButton: false
                                    });
                                });
                        });

                        function confirmDelete(id) {
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
                                    fetch(`/admin/pengguna/${id}`, {
                                            method: 'DELETE',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                                    'content')
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Berhasil',
                                                text: data.success,
                                                timer: 2000,
                                                showConfirmButton: false
                                            }).then(() => {
                                                location.reload();
                                            });
                                        })
                                        .catch(error => {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Terjadi Kesalahan',
                                                text: 'Pengguna gagal dihapus.',
                                                timer: 2000,
                                                showConfirmButton: false
                                            });
                                        });
                                }
                            });
                        }
                    </script>
                </div> <!-- End Table with stripped rows -->
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

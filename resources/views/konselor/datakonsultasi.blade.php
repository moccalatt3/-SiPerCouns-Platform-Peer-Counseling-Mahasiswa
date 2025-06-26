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
                            <a href="#"><span class="gradient-background">View all</span></a>
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

                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                    <!-- End Notification Dropdown Items -->

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
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach ($liveChatKonsultasis as $konsultasi)
                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('Admin/assets/img/messages-1.jpg') }}" alt=""
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

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

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
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
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
                <a class="nav-link" href="{{ route('konselor.datakonsultasi') }}">
                    <i class="bi bi-menu-button-wide"></i><span>Konsultasi</span>
                </a>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.tambahartikel') }}">
                    <i class="bi bi-journals"></i><span>Artikel</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.livechat') }}">
                    <i class="bi bi-chat-left-text"></i><span>Live Chat</span><i class=""></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.riwayat') }}">
                    <i class="bi bi-journal-text"></i><span>Riwayat</span><i class=""></i>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('konselor.profile') }}">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

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
            <h1>Konsultasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Konsultasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Konsultasi</h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jenis Konsultasi</th>
                                    <th scope="col">Topik Konsultasi</th>
                                    <th scope="col">Mode Konsultasi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasis as $index => $konsultasi)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $konsultasi->nama_lengkap }}</td>
                                        <td>{{ $konsultasi->program_studi }}</td>
                                        <td>{{ $konsultasi->gender }}</td>
                                        <td>{{ $konsultasi->jenis_konsultasi }}</td>
                                        <td>{{ $konsultasi->topik_konsultasi }}</td>
                                        <td>{{ $konsultasi->mode_konsultasi }}</td>
                                        <td>
                                            <a href="#" class="icon-link eye-icon" data-bs-toggle="modal"
                                                data-bs-target="#detailKonsultasiModal{{ $konsultasi->id_konsultasi }}">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a href="#" class="icon-link delete-icon"
                                                data-id="{{ $konsultasi->id_konsultasi }}">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                            <a href="#" class="icon-link tanggapi-icon" data-bs-toggle="modal"
                                                data-bs-target="#tanggapiModal{{ $konsultasi->id_konsultasi }}">
                                                <i class="bi bi-send-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="tanggapiModal{{ $konsultasi->id_konsultasi }}"
                                        tabindex="-1"
                                        aria-labelledby="tanggapiModalLabel{{ $konsultasi->id_konsultasi }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form
                                                    action="{{ route('konsultasi.tanggapan', $konsultasi->id_konsultasi) }}"
                                                    method="POST" class="tanggapan-form">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="tanggapiModalLabel{{ $konsultasi->id_konsultasi }}">
                                                            Tanggapan Konselor</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="tanggapan_konselor"
                                                                class="form-label">Tanggapan</label>
                                                            <textarea class="form-control" id="tanggapan_konselor" name="tanggapan_konselor" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="primary2">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade"
                                        id="detailKonsultasiModal{{ $konsultasi->id_konsultasi }}" tabindex="-1"
                                        aria-labelledby="detailKonsultasiModalLabel{{ $konsultasi->id_konsultasi }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="detailKonsultasiModalLabel{{ $konsultasi->id_konsultasi }}">
                                                        Detail Konsultasi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong>Nama Lengkap:</strong>
                                                                {{ $konsultasi->nama_lengkap }}</p>
                                                            <p><strong>Program Studi:</strong>
                                                                {{ $konsultasi->program_studi }}</p>
                                                            <p><strong>Gender:</strong> {{ $konsultasi->gender }}</p>
                                                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><strong>Jenis Konsultasi:</strong>
                                                                {{ $konsultasi->jenis_konsultasi }}</p>
                                                            <p><strong>Topik Konsultasi:</strong>
                                                                {{ $konsultasi->topik_konsultasi }}</p>
                                                            <p><strong>Mode Konsultasi:</strong>
                                                                {{ $konsultasi->mode_konsultasi }}</p>
                                                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tanggapan Pengguna</h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggapan Konselor</th>
                                    <th scope="col">Tanggapan Pengguna</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Kesan & Pesan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasis as $index => $konsultasi)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $konsultasi->tanggapan_konselor }}</td>
                                        <td>{{ $konsultasi->tanggapan_pengguna }}</td>
                                        <td>{{ $konsultasi->status }}</td>
                                        <td>{{ $konsultasi->kesan_pesan }}</td>
                                        <td>
                                            @if ($konsultasi->status === 'completed')
                                                <button class="btn btn-link icon-link validasi-icon" 
                                                        onclick="confirmCompletion({{ $konsultasi->id_konsultasi }});">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            function confirmCompletion(konsultasiId) {
                                Swal.fire({
                                    title: 'Apakah Anda yakin ingin memindahkan data ini ke riwayat?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes, move it!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        fetch(`/konselor/konsultasi/move_to_history/${konsultasiId}`, {
                                            method: 'POST',
                                            headers: {
                                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                Swal.fire('Moved!', 'Data konsultasi berhasil dipindahkan ke riwayat.', 'success')
                                                    .then(() => {
                                                        window.location.reload();
                                                    });
                                            } else {
                                                Swal.fire('Failed!', 'Gagal memindahkan data konsultasi.', 'error');
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                    }
                                });
                            }
                        </script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const deleteIcons = document.querySelectorAll('.delete-icon');
                                deleteIcons.forEach(icon => {
                                    icon.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        const konsultasiId = this.getAttribute('data-id');
                                        Swal.fire({
                                            title: 'Apakah Anda yakin ingin menghapus data konsultasi ini?',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                fetch(`/konselor/konsultasi/delete/${konsultasiId}`, {
                                                        method: 'DELETE',
                                                        headers: {
                                                            'X-CSRF-TOKEN': document.querySelector(
                                                                'meta[name="csrf-token"]').getAttribute(
                                                                'content')
                                                        }
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (data.success) {
                                                            Swal.fire('Deleted!',
                                                                    'Data konsultasi berhasil dihapus.',
                                                                    'success')
                                                                .then(() => {
                                                                    window.location.reload();
                                                                });
                                                        } else {
                                                            Swal.fire('Failed!',
                                                                'Gagal menghapus data konsultasi.',
                                                                'error');
                                                        }
                                                    })
                                                    .catch(error => console.error('Error:', error));
                                            }
                                        });
                                    });
                                });

                                const tanggapanForms = document.querySelectorAll('.tanggapan-form');
                                tanggapanForms.forEach(form => {
                                    form.addEventListener('submit', function(event) {
                                        event.preventDefault();
                                        const formData = new FormData(this);
                                        const actionUrl = this.getAttribute('action');

                                        fetch(actionUrl, {
                                                method: 'POST',
                                                headers: {
                                                    'X-CSRF-TOKEN': document.querySelector(
                                                        'meta[name="csrf-token"]').getAttribute('content')
                                                },
                                                body: formData
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    Swal.fire('Success!', 'Tanggapan berhasil disimpan.', 'success')
                                                        .then(() => {
                                                            window.location.reload();
                                                        });
                                                } else {
                                                    Swal.fire('Error!', 'Gagal menyimpan tanggapan.', 'error');
                                                }
                                            })
                                            .catch(error => console.error('Error:', error));
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Masukkan jQuery terlebih dahulu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Masukkan Bootstrap JS setelah jQuery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

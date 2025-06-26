\
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
                        <span class="custom-badge custom-bg-primary2 custom-badge-number">{{ $jumlahKonsultasi }}</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have {{ $jumlahKonsultasi }} new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach ($konsultasiList as $konsultasi)
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

                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span
                            class="custom-yellow-badge custom-yellow-bg-success2 custom-yellow-badge-number">{{ $jumlahNotifikasiChat }}</span>
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
                                    <img src="" alt="#" class="rounded-circle">
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
                <a class="nav-link" href="{{ route('konselor.tambahartikel') }}">
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
                <a class="nav-link collapsed" href="{{ route('konselor.riwayat') }}">
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
            <h1>Artikel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Artikel</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title flex-grow-1">Artikel</h5>
                            <a href="#" data-toggle="modal" data-target="#tambahArtikelModal"
                                class="card-icon">
                                <i class="bi bi-plus-lg"></i>
                            </a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Konselor</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikels as $artikel)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $artikel->name_konselor }}</td>
                                        <td>{{ $artikel->judul }}</td>
                                        <td>{{ $artikel->kategori }}</td>
                                        <td>{{ $artikel->created_at }}</td>
                                        <td>
                                            <a href="#" class="icon-link eye-icon" data-toggle="modal"
                                                data-target="#viewArtikelModal"
                                                data-name_konselor="{{ $artikel->name_konselor }}"
                                                data-judul="{{ $artikel->judul }}"
                                                data-topik="{{ $artikel->topik }}"
                                                data-kategori="{{ $artikel->kategori }}">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>

                                            <form id="delete-form-{{ $artikel->id }}" action="{{ route('konselor.artikel.delete', $artikel->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="icon-link delete-icon" style="background:none; border:none; color:inherit;">
                                                    <i class="ri-delete-bin-5-fill"></i>
                                                </button>
                                            </form>

                                            <a href="#" class="icon-link edit-icon" data-toggle="modal"
                                                data-target="#editArtikelModal" data-id="{{ $artikel->id }}"
                                                data-judul="{{ $artikel->judul }}"
                                                data-topik="{{ $artikel->topik }}"
                                                data-img_artikel="{{ $artikel->img_artikel }}"
                                                data-kategori="{{ $artikel->kategori }}">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
            <div class="modal fade" id="viewArtikelModal" tabindex="-1" role="dialog"
                aria-labelledby="viewArtikelModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editArtikelModalLabel">Detail Artikel</h5>
                            <button type="button" class="btn-close" data-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nama Konselor:</strong> <span id="view_name_konselor"></span></p>
                            <p><strong>Judul:</strong> <span id="view_judul"></span></p>
                            <p><strong>Topik:</strong> <span id="view_topik"></span></p>
                            <p><strong>Kategori:</strong> <span id="view_kategori"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editArtikelModal" tabindex="-1" aria-labelledby="editArtikelModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('artikel.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="edit_id">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editArtikelModalLabel">Edit Artikel</h5>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="edit_judul">Judul</label>
                                    <input type="text" class="form-control" id="edit_judul" name="judul"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="edit_topik">Topik</label>
                                    <input type="text" class="form-control" id="edit_topik" name="topik"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="edit_img_artikel">Gambar Artikel</label>
                                    <input type="file" class="form-control" id="edit_img_artikel"
                                        name="img_artikel">
                                </div>
                                <div class="form-group">
                                    <label for="edit_kategori">Kategori</label>
                                    <select class="form-control" id="edit_kategori" name="kategori" required>
                                        <option value="pribadi">Pribadi</option>
                                        <option value="akademik">Akademik</option>
                                        <option value="kekerasan_seksual">Kekerasan Seksual</option>
                                        <option value="kesehatan_mental">Kesehatan Mental</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="tambahArtikelModal" tabindex="-1" aria-labelledby="tambahArtikelModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahArtikelModalLabel">Tambah Artikel Baru</h5>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="topik">Topik</label>
                                    <input type="text" class="form-control" id="topik" name="topik"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="img_artikel">Gambar Artikel</label>
                                    <input type="file" class="form-control" id="img_artikel" name="img_artikel">
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori" required>
                                        <option value="pribadi">Pribadi</option>
                                        <option value="akademik">Akademik</option>
                                        <option value="kekerasan_seksual">Kekerasan Seksual</option>
                                        <option value="kesehatan_mental">Kesehatan Mental</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="primary2">Simpan Artikel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
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
    <!-- Bootstrap Modal Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#tambahArtikelModal').on('shown.bs.modal', function() {
                $('#judul').focus();
            });
            $('#editArtikelModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var judul = button.data('judul');
                var topik = button.data('topik');
                var kategori = button.data('kategori');

                var modal = $(this);
                modal.find('#edit_id').val(id);
                modal.find('#edit_judul').val(judul);
                modal.find('#edit_topik').val(topik);
                modal.find('#edit_kategori').val(kategori);
            });

            $(document).ready(function() {
                $('.delete-icon').on('click', function(e) {
                    e.preventDefault();
                    var formId = $(this).closest('form').attr('id');
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak akan dapat mengembalikan ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#' + formId).submit();
                        }
                    });
                });
            });

            $('#viewArtikelModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var name_konselor = button.data('name_konselor');
                var judul = button.data('judul');
                var topik = button.data('topik');
                var kategori = button.data('kategori');

                var modal = $(this);
                modal.find('#view_name_konselor').text(name_konselor);
                modal.find('#view_judul').text(judul);
                modal.find('#view_topik').text(topik);
                modal.find('#view_kategori').text(kategori);
            });
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 1500
                });
            @elseif (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error') }}'
                });
            @endif
        });
    </script>
</body>

</html>

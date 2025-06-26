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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('Pengguna/css/bootstrap.min.css') }}">
    <!-- Nice Select CSS -->
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
    <div class="container3">
        <div class="background3">
        </div>
        <div class="card3">
            <div class="card-body3">
                <h5 class="card-title3">Riwayat Konsultasi</h5>
                <!-- Table with hoverable rows -->
                <table class="table3">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Topik Konsultasi</th>
                            <th scope="col">Tanggapan Konselor</th>
                            <th scope="col">Tanggapan Pengguna</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayatKonsultasi as $index => $konsultasi)
                            <tr class="row-hover3">
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $konsultasi->nama_lengkap }}</td>
                                <td>{{ $konsultasi->topik_konsultasi }}</td>
                                <td>{{ $konsultasi->tanggapan_konselor }}</td>
                                <td>{{ $konsultasi->tanggapan_pengguna }}</td>
                                <td>{{ $konsultasi->status }}</td>
                                <td>
                                    <a href="#" class="tombol-detail" data-bs-toggle="modal"
                                        data-bs-target="#detailModal{{ $konsultasi->id_konsultasi }}">Detail</a>
                                    <a href="#" class="tombol-tanggapi" data-bs-toggle="modal"
                                        data-bs-target="#tanggapiModal{{ $konsultasi->id_konsultasi }}">Tanggapi</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="{{ $konsultasi->id_konsultasi }}" tabindex="-1"
                                aria-labelledby="detailModalLabel{{ $konsultasi->id_konsultasi }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detailModalLabel{{ $konsultasi->id_konsultasi }}">Detail
                                                Konsultasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Nama Lengkap:</strong> {{ $konsultasi->nama_lengkap }}</p>
                                            <p><strong>Program Studi:</strong> {{ $konsultasi->program_studi }}</p>
                                            <p><strong>Gender:</strong> {{ $konsultasi->gender }}</p>
                                            <p><strong>Jenis Konsultasi:</strong> {{ $konsultasi->jenis_konsultasi }}
                                            </p>
                                            <p><strong>Topik Konsultasi:</strong> {{ $konsultasi->topik_konsultasi }}
                                            </p>
                                            <p><strong>Mode Konsultasi:</strong> {{ $konsultasi->mode_konsultasi }}</p>
                                            <p><strong>Tanggapan Konselor:</strong>
                                                {{ $konsultasi->tanggapan_konselor }}</p>
                                            <p><strong>Tanggapan Pengguna:</strong>
                                                {{ $konsultasi->tanggapan_pengguna }}</p>
                                            <p><strong>Status:</strong> {{ $konsultasi->status }}</p>
                                            <p><strong>Kesan Pesan:</strong> {{ $konsultasi->kesan_pesan }}</p>
                                            <p><strong>Created At:</strong> {{ $konsultasi->created_at }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="modal fade" id="tanggapiModal{{ $konsultasi->id_konsultasi }}" tabindex="-1"
                                aria-labelledby="tanggapiModalLabel{{ $konsultasi->id_konsultasi }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('konsultasi.tanggapi') }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tanggapiModalLabel{{ $konsultasi->id_konsultasi }}">Tanggapan
                                                    Pengguna</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id_konsultasi" value="{{ $konsultasi->id_konsultasi }}">
                                                <div class="mb-3">
                                                    <label for="tanggapan_pengguna" class="form-label">Tanggapan</label>
                                                    <textarea class="form-control" id="tanggapan_pengguna" name="tanggapan_pengguna" rows="3" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="tombol-livechat" name="action" value="live_chat">Live
                                                    Chat</button>
                                                <button type="submit" class="tombol-konsultasi" name="action" value="completed">Konsultasi
                                                    Selesai</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="modal fade" id="kesanModal{{ $konsultasi->id_konsultasi }}" tabindex="-1"
                                aria-labelledby="kesanModalLabel{{ $konsultasi->id_konsultasi }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('konsultasi.kesan') }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="kesanModalLabel{{ $konsultasi->id_konsultasi }}">Kesan dan
                                                    Pesan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id_konsultasi" value="{{ $konsultasi->id_konsultasi }}">
                                                <div class="mb-3">
                                                    <label for="kesan_pesan" class="form-label">Kesan dan
                                                        Pesan</label>
                                                    <textarea class="form-control" id="kesan_pesan" name="kesan_pesan" rows="3" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with hoverable rows -->
            </div>
        </div>
    </div>

    @if (session('show_kesan_modal'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var kesanModal = new bootstrap.Modal(document.getElementById(
                    'kesanModal{{ session('show_kesan_modal') }}'));
                kesanModal.show();
            });
        </script>
    @endif

    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 2000,
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

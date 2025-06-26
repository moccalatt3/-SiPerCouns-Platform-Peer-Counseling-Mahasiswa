a
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
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach ($liveChatKonsultasis as $konsultasi)
                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $konsultasi->pengguna->img_pengguna) }}" alt="#" class="rounded-circle">
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
                <a class="nav-link" href="{{ route('konselor.livechat') }}">
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
            <h1>Live Chat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Live Chat</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section profile">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card chat-app">
                            <div id="plist" class="people-list">
                                <ul class="list-unstyled chat-list mt-2 mb-0">
                                    @foreach ($konsultasis as $konsultasi)
                                        <li class="clearfix-custom"
                                            data-id_konsultasi="{{ $konsultasi->id_konsultasi }}"
                                            data-nama_lengkap="{{ $konsultasi->nama_lengkap }}">
                                            <img src="{{ asset('storage/' . $konsultasi->pengguna->img_pengguna) }}"
                                                alt="avatar">
                                            <div class="about-custom">
                                                <div class="name-custom">{{ $konsultasi->nama_lengkap }}</div>
                                                <div class="status-custom">
                                                    <i class="bi bi-circle-fill online"></i> <span class="online-text">online</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#view_info">
                                                <img class="chat-avatar"
                                                    src="{{ asset('storage/' . $konsultasi->pengguna->img_pengguna) }}"
                                                    alt="avatar">
                                            </a>
                                            <div class="chat-about">
                                                <h6 class="name-header">{{ $konselor->nama_lengkap }}</h6>
                                                <i class="bi bi-circle-fill online"></i> <span class="online-text">online</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="m-b-0">
                                        <!-- Chat history goes here -->
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text send-button"><i
                                                    class="bi bi-send-fill"></i></span>
                                        </div>
                                        <input type="text" class="form-control message-input"
                                            placeholder="Enter text here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var messageInput = document.querySelector('.message-input');
            var sendButton = document.querySelector('.send-button');
            var chatHistory = document.querySelector('.chat-history ul');
            var chatHeaderName = document.querySelector('.chat-header .chat-about h6');
            var chatHeaderAvatar = document.querySelector('.chat-header img.chat-avatar');
            var chatListItems = document.querySelectorAll('.chat-list li');

            // Memilih pengguna pertama secara otomatis saat halaman dimuat
            var firstUser = document.querySelector('.chat-list li:first-child');
            firstUser.classList.add('active-custom'); // Tandai pengguna pertama sebagai aktif

            var initialKonsultasiId = firstUser.getAttribute('data-id_konsultasi');
            var initialNamaLengkap = firstUser.getAttribute('data-nama_lengkap');
            var initialImgPengguna = firstUser.querySelector('img').getAttribute('src');

            // Memperbarui header chat dengan nama lengkap dan gambar pengguna pertama
            chatHeaderName.textContent = initialNamaLengkap;
            chatHeaderAvatar.src = initialImgPengguna;

            // Memuat riwayat chat untuk pengguna pertama saat halaman dimuat
            fetchChatHistory(initialKonsultasiId);

            // Event listener untuk setiap item dalam daftar pengguna
            chatListItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    // Menghapus kelas aktif dari semua item
                    chatListItems.forEach(function(i) {
                        i.classList.remove('active-custom');
                    });
                    // Menambahkan kelas aktif ke item yang diklik
                    item.classList.add('active-custom');

                    var konsultasiId = item.getAttribute('data-id_konsultasi');
                    var namaLengkap = item.getAttribute('data-nama_lengkap');
                    var imgPengguna = item.querySelector('img').getAttribute('src');

                    // Memperbarui header chat dengan nama lengkap dan gambar pengguna yang dipilih
                    chatHeaderName.textContent = namaLengkap;
                    chatHeaderAvatar.src = imgPengguna;

                    // Memuat riwayat chat untuk pengguna yang dipilih
                    fetchChatHistory(konsultasiId);
                });
            });

            // Fungsi untuk memuat riwayat chat
            function fetchChatHistory(konsultasiId) {
                chatHistory.innerHTML = ''; // Mengosongkan riwayat chat sebelum memuat yang baru

                fetch(`/konselor/livechat/fetch/${konsultasiId}`, {
                        method: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(message => {
                            appendMessageToChat(message);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching chat history:', error);
                    });
            }

            // Fungsi untuk mengirim pesan
            function sendMessage() {
                var message = messageInput.value.trim();
                if (message !== '') {
                    var activeChatListItem = document.querySelector('.chat-list .active-custom');
                    var konsultasiId = activeChatListItem.getAttribute('data-id_konsultasi');

                    var formData = new FormData();
                    formData.append('message', message);
                    formData.append('sender_id', '{{ Auth::guard('konselor')->user()->id }}');

                    fetch(`/konselor/livechat/send/${konsultasiId}`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json',
                            },
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Message sent:', data);
                            messageInput.value = ''; // Mengosongkan input setelah pesan terkirim
                            appendMessageToChat(data); // Menampilkan pesan yang dikirim di UI
                        })
                        .catch(error => {
                            console.error('Error sending message:', error);
                        });
                }
            }

            // Event listener untuk mengirim pesan saat tombol Enter ditekan
            messageInput.addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    sendMessage();
                }
            });

            // Event listener untuk mengirim pesan saat tombol Send diklik
            sendButton.addEventListener('click', function() {
                sendMessage();
            });

            // Fungsi untuk menambahkan pesan yang dikirim ke UI
            function appendMessageToChat(messageData) {
                var newMessage = document.createElement('li');
                var messageContent = document.createElement('div');
                var messageTime = document.createElement('div');

                messageContent.classList.add('message');
                messageContent.textContent = messageData.message;

                messageTime.classList.add('message-data-time');
                messageTime.textContent = new Date(messageData.created_at).toLocaleTimeString();

                // Menambahkan kelas sesuai dengan tipe pengirim
                if (messageData.sender_type === 'konselor') {
                    newMessage.classList.add('konselor-message', 'other-message');
                    messageTime.classList.add('konselor-time'); // Menambahkan kelas untuk konselor
                } else {
                    newMessage.classList.add('user-message', 'my-message');
                    messageTime.classList.add('user-time'); // Menambahkan kelas untuk pengguna
                }

                newMessage.appendChild(messageContent);
                newMessage.appendChild(messageTime); // Menambahkan waktu setelah konten pesan
                chatHistory.appendChild(newMessage);
            }
        });
    </script>


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

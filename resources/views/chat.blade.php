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
    <section class="section profile8">
        <div class="container-custom">
            <div class="row8 clearfix8">
                <div class="col-lg-128">
                    <div class="card8 chat-app8">
                        <div id="plist8" class="people-list8">
                            <div class="search-group-custom">
                                <div class="search-prepend-custom">
                                    <span class="search-text-custom"><i class="bi bi-search"></i></span>
                                </div>
                                <input type="text" class="search-input-custom" placeholder="Search...">
                            </div>
                            <ul class="list-unstyled8 chat-list8 mt-3 mb-08">
                                @forelse($activeKonselors as $konselor)
                                    <li class="clearfix8 konselor-item"
                                        data-id_konsultasi="{{ $konselor->id_konsultasi }}"
                                        data-name="{{ $konselor->name }}"
                                        data-img="{{ asset('storage/' . $konselor->img) }}">
                                        <img src="{{ asset('storage/' . $konselor->img) }}" alt="avatar">
                                        <div class="about8">
                                            <div class="name8">{{ $konselor->name }}</div>
                                            <div class="status8">
                                                <i class="fa fa-circle online8"></i> online
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li class="clearfix8 active8">
                                        <div class="about8">
                                            <div class="name8">Belum melakukan konsultasi.</div>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="chat8">
                            <div class="chat-header8 clearfix8">
                                <div class="row8">
                                    <div class="col-lg-68">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img id="chat-header-img"
                                                src="{{ $konselorPertama ? asset('storage/' . $konselorPertama->img) : '' }}"
                                                alt="avatar">
                                        </a>
                                        <div class="chat-about8">
                                            <h6 class="m-b-08" id="chat-header-name">
                                                {{ $konselorPertama ? $konselorPertama->name : 'Belum Ada Konsultasi' }}
                                            </h6>
                                            <small>Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history8">
                                <ul class="messages-list8" id="message-list">
                                    <!-- Tempatkan pesan-pesan di sini menggunakan JavaScript -->
                                </ul>
                            </div>
                            <div class="message-box-custom clearfix-custom">
                                <form id="message-form">
                                    @csrf
                                    <div class="input-group mb-0">
                                        <input type="text" class="form-control message-input-custom"
                                            placeholder="Enter text here..." name="message">
                                        <div class="input-group-append">
                                            <button type="submit" class="tombol-kirim">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

    <script>
        const sendMessageUrlTemplate = "{{ route('send.message.user', ['id_konsultasi' => ':id_konsultasi']) }}";
        const fetchMessagesUrlTemplate = "{{ route('fetch.messages', ['id_konsultasi' => ':id_konsultasi']) }}";
        let sendMessageUrl = sendMessageUrlTemplate.replace(':id_konsultasi', '{{ $id_konsultasi }}');
        let fetchMessagesUrl = fetchMessagesUrlTemplate.replace(':id_konsultasi', '{{ $id_konsultasi }}');
    
        document.addEventListener("DOMContentLoaded", function() {
            const messageForm = document.getElementById('message-form');
            const messageList = document.getElementById('message-list');
    
            // Fungsi untuk mengambil dan menampilkan pesan
            function fetchMessages() {
                fetch(fetchMessagesUrl)
                    .then(response => response.json())
                    .then(messages => {
                        messageList.innerHTML = ''; // Hapus pesan yang ada
                        messages.forEach(message => {
                            const li = document.createElement('li');
                            li.classList.add(message.sender_type === 'pengguna' ? 'my-message8' : 'konselor-message8');
                            li.innerHTML =
                                `<div>${message.message}</div>
                                <div class="${message.sender_type === 'pengguna' ? 'user-time8' : 'konselor-time8'} message-time8">
                                    ${new Date(message.created_at).toLocaleString()}
                                </div>`;
                            messageList.appendChild(li);
                        });
                    })
                    .catch(error => console.error('Error fetching messages:', error));
            }
    
            // Ambil pesan ketika halaman dimuat
            fetchMessages();
    
            // Tangani pengiriman form untuk mengirim pesan
            messageForm.addEventListener('submit', function(event) {
                event.preventDefault();
    
                const formData = new FormData(messageForm);
                const message = formData.get('message');
    
                fetch(sendMessageUrl, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(message => {
                        const li = document.createElement('li');
                        li.classList.add(message.sender_type === 'pengguna' ? 'my-message8' : 'konselor-message8');
                        li.innerHTML =
                            `<div>${message.message}</div>
                            <div class="${message.sender_type === 'pengguna' ? 'user-time8' : 'konselor-time8'} message-time8">
                                ${new Date(message.created_at).toLocaleString()}
                            </div>`;
                        messageList.appendChild(li);
                        messageForm.reset(); // Reset form setelah mengirim pesan
                    })
                    .catch(error => console.error('Error sending message:', error));
            });
    
            // Fungsi untuk memperbarui header obrolan dengan data konselor yang dipilih
            function updateChatHeader(name, img) {
                document.getElementById('chat-header-name').textContent = name;
                document.getElementById('chat-header-img').src = img;
            }
    
            // Fungsi untuk memperbarui URL untuk mengirim dan mengambil pesan
            function updateUrls(id_konsultasi) {
                sendMessageUrl = sendMessageUrlTemplate.replace(':id_konsultasi', id_konsultasi);
                fetchMessagesUrl = fetchMessagesUrlTemplate.replace(':id_konsultasi', id_konsultasi);
            }
    
            // Tambahkan event listener ke setiap item konselor
            const konselorItems = document.querySelectorAll('.konselor-item');
            konselorItems.forEach(item => {
                item.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const img = this.getAttribute('data-img');
                    const id_konsultasi = this.getAttribute('data-id_konsultasi');
                    updateChatHeader(name, img);
                    updateUrls(id_konsultasi);
                    fetchMessages(); // Ambil pesan untuk konselor yang baru dipilih
                });
            });
    
            // Tampilkan data konselor pertama di header secara otomatis
            @if($konselorPertama)
                updateChatHeader("{{ $konselorPertama->name }}", "{{ asset('storage/' . $konselorPertama->img) }}");
            @endif
        });
    </script>
    
    


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

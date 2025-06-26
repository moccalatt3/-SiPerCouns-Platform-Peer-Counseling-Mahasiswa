<div class="custom-card-peer custom-card-body mb-3 p-3 shadow-none border d-none d-md-flex">
    <div class="row d-flex">
        <div class="col-2 align-self-center text-center px-3">
            <div class="ratio ratio-1x1 custom-avatar-wrapper">
                <img src="{{ asset('storage/' . $konselor->img) }}"
                    class="w-100 rounded-circle custom-avatar" alt="Counselor Avatar">
            </div>
        </div>
        <div class="col align-self-center">
            <span class="custom-badge custom-badge-warning mb-2">Peercouns</span>
            <h5 class="custom-heading">{{ $konselor->name }}</h5>
            <div class="row justify-content-between me-0 d-flex">
                <div class="col">
                    <div class="custom-flex-container">
                        <span class="custom-info text-sm">
                            <img src="{{ asset('pengguna/img/orang.png') }}"
                                class="custom-icon" alt="Users Icon">
                            {{ $konselor->riwayat_count }} + Sesi
                        </span>
                        {{-- <span class="custom-info text-sm">
                            <img src="{{ asset('pengguna/img/jempol.png') }}"
                                class="custom-icon" alt="Thumbs Up Icon">
                            100% Terbantu (72 Ulasan)
                        </span> --}}
                        <span class="custom-info text-sm">
                            <img src="{{ asset('pengguna/img/koper.png') }}"
                                class="custom-icon" alt="Briefcase Icon">
                            10 Tahun
                        </span>
                    </div>
                    <p class="fw-bold custom-schedule">
                        Jadwal Tersedia:
                        <span>{{ $konselor->available_times }}</span>
                    </p>
                </div>
                <div class="custom-container text-lg-end text-center">
                    <a href="{{ route('konsultasi.form', $konselor->id_konselor) }}"
                        class="custom-booking-button bg-gradient-main-yellow rounded-pill mb-0"
                        role="button">
                        <span>Konsultasi</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
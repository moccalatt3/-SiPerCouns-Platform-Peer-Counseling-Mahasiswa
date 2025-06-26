<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Konsultasi</h5>

            <p>Nama: {{ $konsultasi->nama_lengkap }}</p>
            <p>Program Studi: {{ $konsultasi->program_studi }}</p>
            <p>Gender: {{ $konsultasi->gender }}</p>
            <p>Jenis Konsultasi: {{ $konsultasi->jenis_konsultasi }}</p>
            <p>Topik Konsultasi: {{ $konsultasi->topik_konsultasi }}</p>
            <p>Mode Konsultasi: {{ $konsultasi->mode_konsultasi }}</p>
        </div>
    </div>
</div>
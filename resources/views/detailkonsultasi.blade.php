<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Konsultasi</h5>
        <p><strong>Nama Lengkap:</strong> {{ $konsultasi->nama_lengkap }}</p>
        <p><strong>Program Studi:</strong> {{ $konsultasi->program_studi }}</p>
        <p><strong>Gender:</strong> {{ $konsultasi->gender }}</p>
        <p><strong>Jenis Konsultasi:</strong> {{ $konsultasi->jenis_konsultasi }}</p>
        <p><strong>Topik Konsultasi:</strong> {{ $konsultasi->topik_konsultasi }}</p>
        <p><strong>Mode Konsultasi:</strong> {{ $konsultasi->mode_konsultasi }}</p>
        <p><strong>Tanggapan Konselor:</strong> {{ $konsultasi->tanggapan_konselor }}</p>
        <p><strong>Tanggapan Pengguna:</strong> {{ $konsultasi->tanggapan_pengguna }}</p>
        <a href="{{ route('riwayatkonsultasi') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
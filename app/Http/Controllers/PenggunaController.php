<?php

// PenggunaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;
use App\Models\Konselor;
use App\Models\Konsultasi;
use App\Models\Riwayat;
use App\Models\Artikel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;


class PenggunaController extends Controller
{
    // PenggunaController.php

    public function beranda()
    {
        $id_pengguna = session('id_pengguna');
        $pengguna = Pengguna::findOrFail($id_pengguna);
        
        // Ambil satu data konselor secara acak beserta jumlah riwayat
        $konselor = Konselor::withCount('riwayat')->inRandomOrder()->first();
        
        // Ambil tiga data riwayat secara acak
        $riwayat = Riwayat::inRandomOrder()->take(3)->get();

        return view('beranda', compact('pengguna', 'konselor', 'riwayat'));
    }


    public function konseling()
    {
        $pengguna = Auth::guard('pengguna')->user();
        return view('konseling', compact('pengguna'));
    }

    public function cariKonselor(Request $request)
    {
        $pengguna = Auth::guard('pengguna')->user();
        return view('carikonselor', compact('pengguna'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function showForm($id)
    {
        $konselor = Konselor::findOrFail($id);
        return view('formkonsultasi', compact('konselor'));
        
    }

    public function showFormKonsultasi($id_konselor)
    {
        $konselor = Konselor::findOrFail($id_konselor);
        return view('formkonsultasi', compact('konselor'));
    }

    public function storeKonsultasi(Request $request, $id_konselor)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'jenis_konsultasi' => 'required|string|max:255',
            'topik_konsultasi' => 'required|string|max:255',
            'mode_konsultasi' => 'required|string|max:255',
        ]);

        // Mengambil id_pengguna dari session
        $id_pengguna = session('id_pengguna');

        Konsultasi::create([
            'id_pengguna' => $id_pengguna,
            'id_konselor' => $id_konselor,
            'nama_lengkap' => $request->nama_lengkap,
            'program_studi' => $request->program_studi,
            'gender' => $request->gender,
            'jenis_konsultasi' => $request->jenis_konsultasi,
            'topik_konsultasi' => $request->topik_konsultasi,
            'mode_konsultasi' => $request->mode_konsultasi,
        ]);

        return redirect()->route('berandapengguna')->with('success', 'Form konsultasi berhasil dikirim.');
    }


    public function showRiwayatKonsultasi()
    {
        $id_pengguna = session('id_pengguna');

        if (!$id_pengguna) {
            return redirect()->route('login')->withErrors('Anda harus login untuk mengakses halaman ini.');
        }

        $riwayatKonsultasi = Konsultasi::where('id_pengguna', $id_pengguna)->get();
        return view('riwayatkonsultasi', compact('riwayatKonsultasi'));
    }

    public function detailKonsultasi($id_konsultasi)
    {
        $konsultasi = Konsultasi::findOrFail($id_konsultasi);
        return view('detailkonsultasi', compact('konsultasi'));
    }

    public function storeTanggapan(Request $request)
    {
        $request->validate([
            'id_konsultasi' => 'required|exists:konsultasi,id_konsultasi',
            'tanggapan_pengguna' => 'required|string|max:255',
        ]);

        $konsultasi = Konsultasi::findOrFail($request->id_konsultasi);
        $konsultasi->tanggapan_pengguna = $request->tanggapan_pengguna;

        // Update status based on the action button pressed
        if ($request->input('action') === 'live_chat') {
            $konsultasi->status = 'live_chat';
        } elseif ($request->input('action') === 'completed') {
            $konsultasi->status = 'completed';
        }

        $konsultasi->save();

        if ($request->input('action') === 'completed') {
            return redirect()->route('riwayatkonsultasi')->with(['success' => 'Tanggapan berhasil dikirim.', 'show_kesan_modal' => $request->id_konsultasi]);
        }

        return redirect()->route('riwayatkonsultasi')->with('success', 'Tanggapan berhasil dikirim.');
    }

    public function storeKesanPesan(Request $request)
    {
        $request->validate([
            'id_konsultasi' => 'required|exists:konsultasi,id_konsultasi',
            'kesan_pesan' => 'required|string|max:255',
        ]);

        $konsultasi = Konsultasi::findOrFail($request->id_konsultasi);
        $konsultasi->kesan_pesan = $request->kesan_pesan;
        $konsultasi->save();

        return redirect()->route('riwayatkonsultasi')->with('success', 'Kesan dan pesan berhasil dikirim.');
    }  

    public function liveChat()
    {
        $pengguna = Auth::guard('pengguna')->user();

        // Cari semua konsultasi yang pernah dilakukan pengguna
        $konsultasis = Konsultasi::where('id_pengguna', $pengguna->id_pengguna)
            ->where('status', 'live_chat')
            ->get();

        // Jika tidak ada konsultasi yang pernah dilakukan
        if ($konsultasis->isEmpty()) {
            // Anda bisa menangani kasus ini sesuai kebutuhan, misalnya kembalikan pesan atau halaman lain
            return view('chat', [
                'activeKonselors' => [],
                'id_konsultasi' => null, // Mengirimkan $id_konsultasi sebagai null jika tidak ada konsultasi aktif
            ]);
        }

        // Jika ada konsultasi yang pernah dilakukan, ambil konselor yang aktif
        $activeKonselors = [];
        foreach ($konsultasis as $konsultasi) {
            $konselor = Konselor::findOrFail($konsultasi->id_konselor);
            $activeKonselors[] = $konselor;
        }

        // Ambil $id_konsultasi dari konsultasi pertama (atau sesuaikan dengan logika Anda)
        $id_konsultasi = $konsultasis->first()->id_konsultasi;

        return view('chat', compact('activeKonselors', 'id_konsultasi'));
    }

    public function showKonselors(Request $request)
    {
        $day = $request->input('day');
        if ($day) {
            $konselors = Konselor::where('available_days', 'LIKE', "%{$day}%")->get();
        } else {
            $konselors = Konselor::all();
        }
        return view('carikonselor', compact('konselors'));
    }  

    public function artikel()
    {
        $artikels = Artikel::all(); // Ambil semua artikel
        $artikelUtama = $artikels->first(); // Ambil artikel pertama sebagai artikel utama
        $artikelLainnya = $artikels->slice(1); // Ambil artikel kedua dan seterusnya sebagai artikel lainnya

        return view('artikel', compact('artikelUtama', 'artikelLainnya'));
    }


    public function tukarArtikel($id)
    {
        $artikelUtama = Artikel::first(); // Artikel utama
        $artikelLainnya = Artikel::findOrFail($id); // Artikel yang dipilih untuk ditukar

        // Menyimpan sementara nilai dari artikel utama
        $temp = $artikelUtama->replicate(['created_at', 'updated_at']);
        
        // Menukar nilai dari artikel lainnya ke artikel utama
        $artikelUtama->judul = $artikelLainnya->judul;
        $artikelUtama->img_artikel = $artikelLainnya->img_artikel;
        $artikelUtama->img_konselor = $artikelLainnya->img_konselor;
        $artikelUtama->name_konselor = $artikelLainnya->name_konselor;
        $artikelUtama->topik = $artikelLainnya->topik;
        $artikelUtama->created_at = $artikelLainnya->created_at;
        $artikelUtama->updated_at = $artikelLainnya->updated_at;
        $artikelUtama->save();

        // Menukar nilai dari artikel utama ke artikel lainnya
        $artikelLainnya->judul = $temp->judul;
        $artikelLainnya->img_artikel = $temp->img_artikel;
        $artikelLainnya->img_konselor = $temp->img_konselor;
        $artikelLainnya->name_konselor = $temp->name_konselor;
        $artikelLainnya->topik = $temp->topik;
        $artikelLainnya->created_at = $temp->created_at;
        $artikelLainnya->updated_at = $temp->updated_at;
        $artikelLainnya->save();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil ditukar.');
    }

    // PenggunaController.php

    public function profile()
    {
        $id_pengguna = session('id_pengguna');

        if (!$id_pengguna) {
            return redirect()->route('login')->withErrors('Anda harus login untuk mengakses halaman ini.');
        }

        $pengguna = Pengguna::select('name', 'email', 'about', 'city', 'img_pengguna')->findOrFail($id_pengguna);
        return view('profile', compact('pengguna'));
    }

    public function update(Request $request)
    {
        $id_pengguna = session('id_pengguna');
        $pengguna = Pengguna::findOrFail($id_pengguna);

        $request->validate([
            'fullName' => 'required|string|max:255',
            'about' => 'nullable|string',
            'username' => 'required|string|max:255|unique:pengguna,username,'.$pengguna->id_pengguna.',id_pengguna',
            'city' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pengguna,email,'.$pengguna->id_pengguna.',id_pengguna',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar
        ]);

        // Update data profil
        $pengguna->name = $request->fullName;
        $pengguna->about = $request->about;
        $pengguna->username = $request->username;
        $pengguna->city = $request->city;
        $pengguna->email = $request->email;

        // Mengelola gambar profil jika ada yang diunggah
        if ($request->hasFile('profile_image')) {
            // Hapus gambar profil lama jika ada
            if ($pengguna->img_pengguna) {
                Storage::delete('public/' . $pengguna->img_pengguna);
            }

            // Simpan gambar baru
            $path = $request->file('profile_image')->store('public/pengguna-images');
            // Ubah path untuk disimpan di database
            $pengguna->img_pengguna = str_replace('public/', '', $path);
        }

        $pengguna->save();

        if ($pengguna->save()) {
            return redirect()->route('profile')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->route('profile')->with('error', 'Failed to update profile. Please try again.');
        }
    }

    public function updatePassword(Request $request)
{
    $id_pengguna = session('id_pengguna');
    $pengguna = Pengguna::findOrFail($id_pengguna);

    $request->validate([
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    // Memeriksa apakah password saat ini sesuai
    if (!Hash::check($request->current_password, $pengguna->password)) {
        return redirect()->route('profile')->with('error', 'The current password is incorrect.');
    }

    // Mengubah password
    $pengguna->password = Hash::make($request->new_password);

    if ($pengguna->save()) {
        return redirect()->route('profile')->with('success', 'Password updated successfully.');
    } else {
        return redirect()->route('profile')->with('error', 'Failed to update Password. Please try again.');
    }
}



}
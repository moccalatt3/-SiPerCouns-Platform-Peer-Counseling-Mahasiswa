<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Konselor;
use App\Models\Konsultasi;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;
use App\Models\Riwayat;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class KonselorController extends Controller
{
    public function index()
    {
        $konselors = Konselor::all();
        return view('admin.datakonselor', compact('konselors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:konselor,email',
            'city' => 'required',
            'username' => 'required|unique:konselor,username',
            'password' => 'required',
            'terms' => 'required'
        ]);

        $konselor = new Konselor();
        $konselor->name = $request->name;
        $konselor->email = $request->email;
        $konselor->city = $request->city;
        $konselor->username = $request->username;
        $konselor->password = bcrypt($request->password);

        if ($konselor->save()) {
            // Menggunakan SweetAlert untuk sukses
            return Redirect::route('admin.tambahkonselor')->with('success', 'Konselor added successfully.');
        } else {
            // Menggunakan SweetAlert untuk gagal
            return Redirect::back()->with('error', 'Failed to add Konselor.');
        }
    }


    public function destroy($id_konselor)
    {
        $konselor = Konselor::findOrFail($id_konselor);
        $konselor->delete();

        return response()->json(['success' => 'Konselor deleted successfully.']);
    }
    
    
    public function dashboard()
    {
        $konselor = Auth::guard('konselor')->user();
        $jumlahPengguna = Pengguna::count();
        $jumlahKonsultasi = Konsultasi::where('id_konselor', $konselor->id_konselor)->count();
        $jumlahRiwayat = Riwayat::where('id_konselor', $konselor->id_konselor)->count();
        $konsultasiList = Konsultasi::where('id_konselor', $konselor->id_konselor)->get();

        // Ambil data konsultasi dengan status live_chat
        $liveChatKonsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
            ->where('status', 'live_chat')
            ->get();

        // Hitung jumlah notifikasi chat
        $jumlahNotifikasiChat = $liveChatKonsultasis->count();

        $artikels = Artikel::where('id_konselor', $konselor->id_konselor)->get();


        return view('konselor.dashboard', compact('konselor', 'jumlahPengguna', 'jumlahKonsultasi', 'jumlahRiwayat', 'konsultasiList', 'liveChatKonsultasis', 'jumlahNotifikasiChat','artikels'));
    }



    // Di dalam KonselorController.php
    public function showDataKonsultasi()
    {
        $konselor = Auth::guard('konselor')->user();
        $konsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)->orderBy('created_at', 'desc')->get();
        $jumlahKonsultasi = $konsultasis->count();

        $liveChatKonsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
        ->where('status', 'live_chat')
        ->get();

        // Hitung jumlah notifikasi chat
        $jumlahNotifikasiChat = $liveChatKonsultasis->count();

        return view('konselor.datakonsultasi', compact('konsultasis', 'konselor', 'jumlahKonsultasi','liveChatKonsultasis', 'jumlahNotifikasiChat'));
    }


    
    public function showKonselors()
    {
        $konselors = Konselor::all();
        $konselors = Konselor::withCount('riwayat')->get();
        return view('carikonselor', compact('konselors'));
    }

    public function showProfile()
    {
        $konselor = Auth::guard('konselor')->user();
        $konsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)->orderBy('created_at', 'desc')->get();
        $jumlahKonsultasi = $konsultasis->count();

        $liveChatKonsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
        ->where('status', 'live_chat')
        ->get();

        // Hitung jumlah notifikasi chat
        $jumlahNotifikasiChat = $liveChatKonsultasis->count();

        return view('konselor.profile', compact('konsultasis', 'konselor', 'jumlahKonsultasi','liveChatKonsultasis', 'jumlahNotifikasiChat' ));
    }

    public function showRiwayat()
    {
        $konselor = Auth::guard('konselor')->user();
        $riwayats = Riwayat::where('id_konselor', $konselor->id_konselor)->get();
        $konsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)->orderBy('created_at', 'desc')->get();
        $jumlahKonsultasi = $konsultasis->count(); 

        $liveChatKonsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
        ->where('status', 'live_chat')
        ->get();

        // Hitung jumlah notifikasi chat
        $jumlahNotifikasiChat = $liveChatKonsultasis->count();

        return view('konselor.riwayat', compact('riwayats', 'konselor','jumlahKonsultasi','konsultasis','liveChatKonsultasis', 'jumlahNotifikasiChat'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'about' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'available_days' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'available_times' => 'required|in:pagi,siang,malam', // Validasi pilihan waktu
        ]);

        $konselor = Auth::guard('konselor')->user();
        $konselor->name = $request->name;
        $konselor->email = $request->email;
        $konselor->city = $request->city;
        $konselor->about = $request->about;
        $konselor->available_days = $request->available_days;
        $konselor->available_times = $request->available_times; // Simpan pilihan waktu

        if ($request->hasFile('img')) {
            if ($konselor->img) {
                Storage::delete('public/' . $konselor->img);
            }
            $filePath = $request->file('img')->store('profile_images', 'public');
            $konselor->img = $filePath;
        }

        $konselor->save();

        return redirect()->route('konselor.profile')->with('success', 'Profile updated successfully.');
    }


    public function deleteProfileImage()
    {
        $konselor = Auth::guard('konselor')->user();
        if ($konselor->img) {
            Storage::delete('public/' . $konselor->img);
            $konselor->img = null;
            $konselor->save();
        }

        return redirect()->route('konselor.profile')->with('success', 'Profile image removed successfully.');
    }

    public function viewKonsultasi($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $konselor = Auth::guard('konselor')->user();
        return view('konselor.viewkonsultasi', compact('konsultasi', 'konselor'));
    }

    public function saveTanggapan(Request $request, $id)
    {
        $request->validate([
            'tanggapan_konselor' => 'required|string',
        ]);

        $konsultasi = Konsultasi::findOrFail($id);
        $konsultasi->tanggapan_konselor = $request->tanggapan_konselor;
        $success = $konsultasi->save();

        return response()->json(['success' => $success]);
    }


    public function validateKonsultasi(Request $request, $id)
    {
        $konsultasi = Konsultasi::findOrFail($id);

        if ($request->input('action') == 'complete') {
            $konsultasi->status = 'completed';
            $konsultasi->kesan_pesan = $request->input('kesan_pesan');
        } elseif ($request->input('action') == 'live_chat') {
            $konsultasi->status = 'live_chat';
        }

        $konsultasi->save();

        return redirect()->route('konselor.datakonsultasi')->with('success', 'Status konsultasi berhasil diperbarui.');
    }

    public function liveChat()
    {
        $konselor = Auth::guard('konselor')->user();

        // Cari semua konsultasi yang pernah dilakukan oleh konselor
        $konsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
            ->where('status', 'live_chat')
            ->get();
        $konsultasiList = Konsultasi::where('id_konselor', $konselor->id_konselor)->orderBy('created_at', 'desc')->get();
        $jumlahKonsultasi = $konsultasiList->count();

        $liveChatKonsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
        ->where('status', 'live_chat')
        ->get();

        // Hitung jumlah notifikasi chat
        $jumlahNotifikasiChat = $liveChatKonsultasis->count();

        return view('konselor.livechat', compact('konsultasis', 'konselor','jumlahKonsultasi','konsultasiList','liveChatKonsultasis', 'jumlahNotifikasiChat'));
    }



    public function moveToHistory($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);

        Riwayat::create($konsultasi->toArray());

        $konsultasi->delete();

        return response()->json(['success' => true]);
    }


    public function filterByDay(Request $request)
    {
        $day = $request->input('day');
        if ($day) {
            $konselors = Konselor::where('available_days', 'LIKE', "%{$day}%")->withCount('riwayat')->get();
        } else {
            $konselors = Konselor::withCount('riwayat')->get();
        }
        return view('carikonselor', compact('konselors'));
    }

    public function filterByTime(Request $request)
    {
        $time = $request->input('time');
        if ($time) {
            $konselors = Konselor::where('available_times', 'LIKE', "%{$time}%")->withCount('riwayat')->get();
        } else {
            $konselors = Konselor::withCount('riwayat')->get();
        }
        return view('carikonselor', compact('konselors'));
    }

    public function searchByName(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $konselors = Konselor::where('name', 'LIKE', "%{$search}%")->withCount('riwayat')->get();
        } else {
            $konselors = Konselor::withCount('riwayat')->get();
        }

        $html = '';
        foreach ($konselors as $konselor) {
            $html .= view('partials.konselor-card', compact('konselor'))->render();
        }

        return response()->json($html);
    }

    public function deleteKonsultasi($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $konsultasi->delete();

        return response()->json(['success' => 'Konsultasi deleted successfully.']);
    }
    
    public function getKonselor($id)
    {
        $konselor = Konselor::findOrFail($id);
        return response()->json($konselor);
    }

    public function updateKonselor(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $konselor = Konselor::findOrFail($id);
        $konselor->username = $request->username;
        $konselor->password = bcrypt($request->password);
        $konselor->save();

        return response()->json(['success' => 'Konselor data updated successfully.']);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'renew_password' => 'required|same:new_password',
        ]);

        $konselor = Auth::guard('konselor')->user();

        if (!Hash::check($request->current_password, $konselor->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $konselor->password = bcrypt($request->new_password);
        $konselor->save();

        return redirect()->route('konselor.profile')->with('success', 'Password changed successfully.');
    }

    public function showArtikel()
    {
        $konselor = Auth::guard('konselor')->user();
        $artikels = Artikel::where('id_konselor', $konselor->id_konselor)->get();

        $konsultasiList = Konsultasi::where('id_konselor', $konselor->id_konselor)->orderBy('created_at', 'desc')->get();
        $jumlahKonsultasi = $konsultasiList->count();

        $liveChatKonsultasis = Konsultasi::where('id_konselor', $konselor->id_konselor)
        ->where('status', 'live_chat')
        ->get();

        // Hitung jumlah notifikasi chat
        $jumlahNotifikasiChat = $liveChatKonsultasis->count();

        return view('konselor.tambahartikel', compact('artikels','konselor','jumlahKonsultasi','konsultasiList','liveChatKonsultasis', 'jumlahNotifikasiChat'));
    }

    public function storeArtikel(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'topik' => 'required|string',
            'img_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori' => 'required|string|in:pribadi,akademik,kekerasan_seksual,kesehatan_mental',
        ]);

        $konselor = Auth::guard('konselor')->user();
        
        $artikel = new Artikel();
        $artikel->id_konselor = $konselor->id_konselor;
        $artikel->img_konselor = $konselor->img;
        $artikel->judul = $request->judul;
        $artikel->topik = $request->topik;
        $artikel->name_konselor = $konselor->name;
        
        if ($request->hasFile('img_artikel')) {
            $filePath = $request->file('img_artikel')->store('artikel_images', 'public');
            $artikel->img_artikel = $filePath;
        }

        $artikel->kategori = $request->kategori;
        $artikel->save();

        return redirect()->route('konselor.tambahartikel')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function updateArtikel(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'topik' => 'required|string',
            'img_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori' => 'required|string|in:pribadi,akademik,kekerasan_seksual,kesehatan_mental',
        ]);

        $artikel = Artikel::findOrFail($request->id);
        $artikel->judul = $request->judul;
        $artikel->topik = $request->topik;
        $artikel->kategori = $request->kategori;

        if ($request->hasFile('img_artikel')) {
            if ($artikel->img_artikel) {
                Storage::delete('public/' . $artikel->img_artikel);
            }
            $filePath = $request->file('img_artikel')->store('artikel_images', 'public');
            $artikel->img_artikel = $filePath;
        }

        $artikel->save();

        return redirect()->route('konselor.tambahartikel')->with('success', 'Artikel berhasil diupdate.');
    }

    public function deleteArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('konselor.tambahartikel')->with('success', 'Artikel berhasil dihapus.');
    }


    public function viewArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return response()->json($artikel);
    }

}

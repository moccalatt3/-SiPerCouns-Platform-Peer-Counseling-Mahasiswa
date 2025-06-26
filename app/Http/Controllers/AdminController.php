<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Konselor;
use App\Models\Artikel;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showPengguna()
    {
        $penggunas = Pengguna::all();
        return view('admin.datapengguna', compact('penggunas'));
    }

    public function adminDashboard()
    {
        $jumlahPengguna = Pengguna::count();
        $jumlahKonselor = Konselor::count();
        $jumlahKonselorDihapus = Konselor::onlyTrashed()->count();
        
        // Ambil maksimal 3 artikel
        $artikels = Artikel::latest()->take(3)->get();

        return view('admin.dashboard', compact('jumlahPengguna', 'jumlahKonselor', 'jumlahKonselorDihapus', 'artikels'));
    }


    public function showRiwayat()
    {
        $deletedKonselors = Konselor::onlyTrashed()->get(); 
        return view('admin.riwayat', compact('deletedKonselors'));
    }

    public function destroyPengguna($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();

        return response()->json(['success' => 'Pengguna berhasil dihapus.']);
    }

    public function updatePengguna(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->username = $request->username;
        $pengguna->password = Hash::make($request->password);
        $pengguna->save();

        return response()->json(['success' => 'Pengguna berhasil diperbarui.']);
    }

    public function getPengguna($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return response()->json($pengguna);
    }

    

}

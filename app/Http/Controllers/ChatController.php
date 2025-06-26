<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use App\Models\Konsultasi;
use App\Models\Konselor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class ChatController extends Controller
{
    // Fungsi untuk mengirim pesan dari konselor (sudah ada)
    public function sendMessage(Request $request, $id_konsultasi)
    {
        // Ambil ID konselor dari tabel konsultasi
        $konsultasi = Konsultasi::findOrFail($id_konsultasi);
        $id_konselor = $konsultasi->id_konselor;

        $user = Auth::guard('konselor')->user(); // Ambil data konselor yang sedang login
        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        Log::info('Request received', ['request' => $request->all(), 'id_konsultasi' => $id_konsultasi]);

        $message = ChatMessage::create([
            'id_konsultasi' => $id_konsultasi,
            'sender_id' => $id_konselor, // Atur sender_id dari konselor yang terkait dengan konsultasi
            'sender_type' => 'konselor',
            'message' => $request->message,
        ]);

        Log::info('Message saved', ['message' => $message]);

        return response()->json($message);
    }

    // Fungsi untuk mengirim pesan dari pengguna
    public function sendMessageFromUser(Request $request, $id_konsultasi)
    {
        // Pastikan pengguna telah login
        $id_pengguna = Auth::guard('pengguna')->user()->id_pengguna;

        // Validasi pesan
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        $message = ChatMessage::create([
            'id_konsultasi' => $id_konsultasi,
            'sender_id' => $id_pengguna,
            'sender_type' => 'pengguna',
            'message' => $validatedData['message'],
        ]);

        return response()->json($message);
    }

    // Fungsi untuk mengambil pesan
    public function fetchMessages($id_konsultasi)
    {
        $messages = ChatMessage::where('id_konsultasi', $id_konsultasi)->get();
        return response()->json($messages);
    }

    public function liveChat(Request $request)
{
    $pengguna = Auth::guard('pengguna')->user();

    // Ambil semua konsultasi dengan status 'live_chat' yang terkait dengan pengguna
    $konsultasis = Konsultasi::where('id_pengguna', $pengguna->id_pengguna)
        ->where('status', 'live_chat')
        ->get();

    // Log untuk debugging
    Log::info('Konsultasi yang ditemukan:', ['konsultasis' => $konsultasis]);

    // Jika tidak ada konsultasi ditemukan, kirimkan response yang sesuai
    if ($konsultasis->isEmpty()) {
        return view('chat', [
            'activeKonselors' => [],
            'id_konsultasi' => null,
            'konselorPertama' => null,
        ]);
    }

    // Ambil konselor pertama dari daftar konsultasi
    $konselorPertama = $konsultasis->first()->konselor;

    // Jika ada konsultasi, ambil konselor yang aktif
    $activeKonselors = [];
    foreach ($konsultasis as $konsultasi) {
        $konselor = Konselor::findOrFail($konsultasi->id_konselor);
        $konselor->id_konsultasi = $konsultasi->id_konsultasi; // Menyimpan id_konsultasi terkait di objek konselor
        $activeKonselors[] = $konselor;
    }

    // Ambil id_konsultasi dari konsultasi pertama (atau sesuaikan dengan logika Anda)
    $id_konsultasi = $konsultasis->first()->id_konsultasi;

    // Tambahkan penanganan jika pengguna memilih konselor pertama
    if ($request->filled('selected_konselor')) {
        $selectedKonselor = Konselor::findOrFail($request->selected_konselor);
        $id_konsultasi = $selectedKonselor->konsultasi->id_konsultasi;
        $konselorPertama = $selectedKonselor;
    }

    // Log untuk debugging
    Log::info('Live chat data prepared', [
        'user_id' => $pengguna->id_pengguna,
        'id_konsultasi' => $id_konsultasi,
        'activeKonselors' => $activeKonselors,
        'konselorPertama' => $konselorPertama,
    ]);

    return view('chat', compact('activeKonselors', 'id_konsultasi', 'konselorPertama'));
}


    

}

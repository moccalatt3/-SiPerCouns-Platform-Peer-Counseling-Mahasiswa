<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KonselorController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RiwayatController;




Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/regist', function () {
    return view('auth.regist');
})->name('regist');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/regist', function () {
    return view('auth.regist');
})->name('regist');
Route::post('/register', [AuthController::class, 'register'])->name('register');





Route::get('/admin/datakonselor', [KonselorController::class, 'index'])->name('admin.datakonselor');
Route::get('/admin/tambahkonselor', function () {
    return view('admin.tambahkonselor');
})->name('admin.tambahkonselor');    
Route::get('/datapengguna', [AdminController::class, 'showPengguna'])->name('datapengguna');
Route::get('/admin/riwayat', [AdminController::class, 'showRiwayat'])->name('admin.riwayat');
Route::get('/admin/konselor/create', [KonselorController::class, 'create'])->name('admin.konselor.create');
Route::post('/admin/konselor', [KonselorController::class, 'store'])->name('admin.konselor.store');
Route::delete('/admin/konselor/{id_konselor}', [KonselorController::class, 'destroy'])->name('admin.konselor.destroy');
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::delete('/admin/pengguna/{id}', [AdminController::class, 'destroyPengguna'])->name('admin.pengguna.destroy');
Route::put('/admin/pengguna/{id}', [AdminController::class, 'updatePengguna'])->name('admin.pengguna.update');
Route::get('/admin/pengguna/{id}', [AdminController::class, 'getPengguna'])->name('admin.pengguna.get');
Route::get('/admin/konselor/{id}', [KonselorController::class, 'getKonselor'])->name('admin.konselor.get');
Route::put('/admin/konselor/{id}', [KonselorController::class, 'updateKonselor'])->name('admin.konselor.update');


Route::middleware('auth:konselor')->group(function () {
    Route::get('/konselor/dashboard', [KonselorController::class, 'dashboard'])->name('konselor.dashboard');
    Route::get('/konselor/datakonsultasi', [KonselorController::class, 'showDataKonsultasi'])->name('konselor.datakonsultasi');
    Route::get('/konselor/profile', [KonselorController::class, 'showProfile'])->name('konselor.profile');
    Route::post('/konselor/profile', [KonselorController::class, 'updateProfile'])->name('konselor.profile.update');
    Route::post('/konselor/profile/delete-image', [KonselorController::class, 'deleteProfileImage'])->name('konselor.profile.deleteImage');
    Route::post('/konselor/konsultasi/{id}/tanggapan', [KonselorController::class, 'saveTanggapan'])->name('konsultasi.tanggapan');
    Route::post('/konselor/konsultasi/{id}/validate', [KonselorController::class, 'validateKonsultasi'])->name('konsultasi.validate');
    Route::get('/konselor/livechat', [KonselorController::class, 'liveChat'])->name('konselor.livechat');
    Route::post('/konselor/livechat/send/{id_konsultasi}', [ChatController::class, 'sendMessage'])->name('livechat.sendMessage');
    Route::get('/konselor/livechat/fetch/{id_konsultasi}', [ChatController::class, 'fetchMessages'])->name('livechat.fetchMessages');
    Route::get('/konselor/riwayat', [KonselorController::class, 'showRiwayat'])->name('konselor.riwayat');
    Route::get('/konselor/konsultasi/{id}', [KonselorController::class, 'viewKonsultasi'])->name('konsultasi.view');
    Route::delete('/konselor/konsultasi/delete/{id}', [KonselorController::class, 'deleteKonsultasi'])->name('konsultasi.delete');
    Route::post('/konselor/change_password', [KonselorController::class, 'changePassword'])->name('konselor.change_password');
    Route::get('/konselor/tambahartikel', [KonselorController::class, 'showArtikel'])->name('konselor.tambahartikel');
    Route::post('/artikel/store', [KonselorController::class, 'storeArtikel'])->name('artikel.store');
    Route::put('/artikel/update', [KonselorController::class, 'updateArtikel'])->name('artikel.update');
    Route::delete('/konselor/artikel/{id}/delete', [KonselorController::class, 'deleteArtikel'])->name('konselor.artikel.delete');
    Route::get('/konselor/artikel/{id}', [KonselorController::class, 'viewArtikel'])->name('konselor.artikel.view');
    Route::post('/konselor/konsultasi/move_to_history/{id}', [KonselorController::class, 'moveToHistory'])->name('konsultasi.move_to_history');
});



Route::get('/berandapengguna', [PenggunaController::class, 'beranda'])->name('berandapengguna');
Route::get('/konselingpengguna', [PenggunaController::class, 'konseling'])->name('konselingpengguna');
Route::get('/carikonselor', [PenggunaController::class, 'cariKonselor'])->name('carikonselor');
Route::get('/carikonselor', [KonselorController::class, 'showKonselors'])->name('carikonselor');
Route::get('/formkonsultasi/{id_konselor}', [PenggunaController::class, 'showFormKonsultasi'])->name('konsultasi.form');
Route::post('/formkonsultasi/{id_konselor}', [PenggunaController::class, 'storeKonsultasi'])->name('konsultasi.store');
Route::get('/riwayatkonsultasi', [PenggunaController::class, 'showRiwayatKonsultasi'])->name('riwayatkonsultasi');
Route::get('/konsultasi/{id_konsultasi}', [PenggunaController::class, 'detailKonsultasi'])->name('konsultasi.detail');
Route::post('/konsultasi/tanggapi', [PenggunaController::class, 'storeTanggapan'])->name('konsultasi.tanggapi');
Route::post('/konsultasi/kesan', [PenggunaController::class, 'storeKesanPesan'])->name('konsultasi.kesan');
Route::get('/livechat', [ChatController::class, 'liveChat'])->name('livechat'); // Perbaikan disini
Route::post('/send-message-user/{id_konsultasi}', [ChatController::class, 'sendMessageFromUser'])->name('send.message.user');
Route::get('/fetch-messages/{id_konsultasi}', [ChatController::class, 'fetchMessages'])->name('fetch.messages');
Route::get('/filterkonselor', [KonselorController::class, 'filterByDay'])->name('filterkonselor');
Route::get('/filterkonselorbytime', [KonselorController::class, 'filterByTime'])->name('filterkonselorbytime');
Route::get('/carikonselor/search', [KonselorController::class, 'searchByName'])->name('carikonselor.search');
Route::get('/artikel', [PenggunaController::class, 'artikel'])->name('artikel');
Route::get('/tukar-artikel/{id}', [PenggunaController::class, 'tukarArtikel'])->name('tukarArtikel');
Route::get('/profile', [PenggunaController::class, 'profile'])->name('profile');
Route::put('/profile/update', [PenggunaController::class, 'update'])->name('profile.update');
Route::put('/profile/updatePassword', [PenggunaController::class, 'updatePassword'])->name('profile.updatePassword');



Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');

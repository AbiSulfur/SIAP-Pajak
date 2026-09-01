<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome')->name('welcome');
Route::view('/tentang-kami', 'guest.tentang-kami')->name('tentang-kami');
Route::view('/layanan', 'guest.layanan')->name('layanan');
Route::view('/bantuan', 'guest.bantuan')->name('bantuan');
// Rute untuk Wajib Pajak
Route::middleware(['auth', 'verified', 'role:wajib_pajak'])->prefix('wajib-pajak')->name('wajib-pajak.')->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        
        $latestSpt = $user->pphCalculations()->latest()->first();
        $totalPajak = $user->pphCalculations()->sum('pph_terutang');
        $riwayat = $user->pphCalculations()->latest()->take(5)->get();
        
        return view('wajib-pajak.dashboard', compact('user', 'latestSpt', 'totalPajak', 'riwayat'));
    })->name('dashboard');
    Route::view('/lapor-spt', 'wajib-pajak.lapor-spt')->name('lapor-spt');
    Route::view('/riwayat', 'wajib-pajak.riwayat')->name('riwayat');
    Route::view('/profil', 'wajib-pajak.profil')->name('profil');
});

// Rute untuk Admin
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/manajemen-wp', 'admin.manajemen-wp')->name('manajemen-wp');
    Route::view('/validasi', 'admin.validasi')->name('validasi');
    Route::view('/pengaturan', 'admin.pengaturan')->name('pengaturan');
});

// Fallback rute (kalau ada yang mengakses /dashboard langsung, arahkan ke halaman yang sesuai)
Route::get('/dashboard', function () {
    $user = auth()->user();
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('wajib-pajak.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Bawaan breeze (kita hapus profile karena sudah diganti profil wp khusus)
require __DIR__.'/auth.php';

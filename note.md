# Catatan Pengembangan: SIAP Pajak
*(Sistem Informasi Analisis & Pra-isi Pajak Penghasilan)*

## 📌 Informasi Proyek
Aplikasi ini adalah prototipe portal edukasi administrasi perpajakan yang menggunakan pendekatan "Pra-isi (Pre-populated Data)" untuk mempermudah pelaporan Pajak Penghasilan (PPh) Wajib Pajak Orang Pribadi.

- **Stack Teknologi:** Laravel 13, Livewire (Volt), Tailwind CSS, MySQL.
- **Konsep UI/UX:** *Corporate Minimalism* (Fokus pada institutional trust).

## 🔑 Kredensial Akses (Dummy Data)

Aplikasi memiliki dua role (peran) utama. Anda dapat menggunakan akun berikut untuk masuk setelah menjalankan `php artisan migrate:fresh --seed`:

**1. Administrator (Pengurus Pajak)**
- **Email:** `admin@pajak.local`
- **Password:** `password`
- **Fungsi:** Melihat dashboard kepatuhan, mengelola data wajib pajak, menyetujui laporan SPT, atau menolak laporan (yang akan mengubah status menjadi `koreksi_ditolak`).

**2. Wajib Pajak (WP)**
- **Email:** `wp@pajak.local`
- **Password:** `password`
- **Fungsi:** Mengisi/meninjau data penghasilan (Pre-fill), mengkonfirmasi SPT, melihat riwayat lapor (BPE), dan mengedit profil.

## 🛠️ Status Pengembangan Saat Ini
- **Selesai (✅):** 
  - Seluruh layout dan halaman UI/UX (Landing, Login, Register, Dasbor WP & Admin, Riwayat, Profil, Manajemen Data WP, dll) menggunakan *Static UI*.
  - Middleware otorisasi pembagian *Role*.
  - Fungsi Kalkulator PPh (`PPhCalculatorService`) sudah teruji dengan tarif progresif terbaru dan logika PTKP (TK/0 hingga K/3).
  - Togle *Show/Hide Password* di form Login & Register.

- **Selanjutnya (To-Do List 🚀):**
  - Mengubah form Lapor SPT statis menjadi komponen *Livewire vertical stepper*.
  - Menghubungkan *pre-filled data* form Lapor SPT langsung dengan database Eloquent (`DataPenghasilan`).
  - Mengimplementasikan alur "Koreksi Ditolak" dimana Admin wajib mengisi alasan penolakan dan WP bisa melihat alasan tersebut beserta fitur *Kontak Pengurus Pajak*.

## 💡 Perintah Penting (CLI)
Jika Anda perlu mereset ulang seluruh basis data dan mengembalikan data bawaan:
```bash
php artisan migrate:fresh --seed
```
Untuk menjalankan sistem (selalu jalankan 2 perintah ini di terminal terpisah):
```bash
php artisan serve
npm run dev
```

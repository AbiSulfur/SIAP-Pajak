# SIAP PAJAK
**Versi:** 1.0.0
**Tanggal:** 11/08/2026
**Status:** `Draft`

---

## Masalah

Sistem pajak Indonesia menganut prinsip *self-assessment* — wajib pajak menghitung dan melaporkan pajaknya sendiri. Untuk Pajak Penghasilan (PPh), besaran pajak berbeda-beda tiap orang tergantung penghasilan, status keluarga (PTKP), dan lapisan tarif progresif, sehingga tidak bisa disamaratakan menjadi satu angka tetap. Proses pelaporan yang manual dan teknis ini dianggap rumit oleh masyarakat awam. Bahkan setelah sistem digital nasional (Coretax) diterapkan penuh, rendahnya kepatuhan wajib pajak tetap menjadi masalah utama — menandakan bahwa akar masalahnya bukan sekadar kurangnya digitalisasi, melainkan kompleksitas proses itu sendiri.

---

## Rencana

Membangun sistem berbasis web (Laravel) bernama **SIAP Pajak** yang menerapkan pendekatan **pra-isi & konfirmasi**: sistem menghitung estimasi PPh terutang secara otomatis dari data penghasilan yang tersedia, lalu wajib pajak cukup meninjau dan mengonfirmasi hasilnya — atau mengajukan koreksi jika ada ketidaksesuaian, yang kemudian diverifikasi oleh Admin.

---

## Value Prop

Wajib pajak tidak perlu lagi menghitung PPh secara manual dari nol — cukup tinjau hasil perhitungan otomatis dan konfirmasi. Proses pelaporan menjadi lebih cepat dan rendah risiko kesalahan, tanpa mengorbankan akurasi maupun prinsip keadilan perhitungan pajak yang bersifat individual.

---

## Tujuan

- Mengurangi beban manual dalam proses pelaporan PPh.
- Menjaga akurasi & keadilan perhitungan pajak (tidak menghilangkan prinsip self-assessment).
- Memberi kendali akhir kepada wajib pajak lewat mekanisme konfirmasi/koreksi.
- Menerapkan konsep otomatisasi (CLI/Artisan Command) untuk mendukung efisiensi proses backend.

---

## Metrik

- Persentase pengajuan yang dikonfirmasi tanpa perlu koreksi (mengukur akurasi hasil pra-isi).
- Waktu rata-rata dari data masuk sampai dikonfirmasi (mengukur efisiensi proses).
- Jumlah error perhitungan pada kasus uji standar (target: 0).
- Jumlah koreksi yang berhasil diverifikasi Admin dalam rentang waktu tertentu.

---

## Scope

**Included:**
- Perhitungan otomatis PPh berdasarkan PTKP & tarif progresif (khusus Orang Pribadi)
- Alur konfirmasi & koreksi data oleh Wajib Pajak
- Verifikasi koreksi oleh Admin
- Dashboard Wajib Pajak & Admin
- Riwayat/audit trail perubahan status
- CLI untuk simulasi data, perhitungan otomatis, dan pelaporan
- Klasifikasi jenis Wajib Pajak pada data master (Orang Pribadi / Badan / Bendahara) — sebatas pencatatan & pengelolaan data, bukan perhitungan pajak
- Panel ringkas status kesehatan sistem pada Dashboard Admin (status server, database, storage) sebagai fitur informatif tambahan

**Excluded:**
- Integrasi resmi dengan sistem DJP/Coretax
- Perhitungan PPh Badan Usaha (sistem hanya mencatat keberadaan WP Badan sebagai data, tidak menghitung kewajiban pajaknya — rumus dan skema PPh Badan berbeda dari PPh Orang Pribadi dan berada di luar cakupan proyek ini)
- Skema PPh Final UMKM
- Jenis penghasilan luar negeri dan pengurang pajak khusus (zakat, iuran pensiun, dll.)
- Monitoring infrastruktur/DevOps yang sesungguhnya (panel status sistem bersifat tampilan statis/simulatif, bukan terhubung ke monitoring server yang nyata)

---

## User Persona

**1. Wajib Pajak Orang Pribadi (Karyawan)**
Individu dengan penghasilan tetap yang wajib melaporkan PPh tahunan, namun tidak familiar dengan cara menghitung pajak secara manual. Membutuhkan cara cepat untuk mengetahui kewajiban pajaknya tanpa harus memahami rumus perpajakan secara mendalam.

**2. Admin / Petugas**
Pihak yang bertanggung jawab memantau dan memverifikasi data wajib pajak secara terpusat, khususnya data yang diajukan koreksi. Membutuhkan tampilan ringkas berisi status seluruh pengajuan serta kemampuan mengambil keputusan (setuju/tolak) secara efisien.

---

## User Stories & Acceptance Criteria

| User Story | Acceptance Criteria |
|---|---|
| Sebagai Wajib Pajak, saya ingin melihat estimasi PPh saya otomatis, supaya saya tidak perlu menghitung manual. | Sistem menampilkan hasil perhitungan (PTKP, PKP, PPh terutang) segera setelah data penghasilan tersedia, dengan status "pra-isi". |
| Sebagai Wajib Pajak, saya ingin mengonfirmasi data yang sudah benar, supaya proses pelaporan saya selesai. | Setelah menekan tombol konfirmasi, status berubah menjadi "dikonfirmasi" dan tercatat di riwayat status. |
| Sebagai Wajib Pajak, saya ingin mengoreksi data yang salah, supaya hasil akhirnya akurat. | Wajib Pajak dapat mengajukan koreksi beserta dokumen pendukung; status berubah menjadi "dikoreksi" dan diteruskan ke Admin. |
| Sebagai Wajib Pajak, saya ingin melihat riwayat status pengajuan saya, supaya saya tahu progres pelaporan saya. | Halaman riwayat menampilkan seluruh perubahan status secara kronologis. |
| Sebagai Admin, saya ingin melihat seluruh data koreksi yang masuk, supaya saya bisa menindaklanjutinya. | Dashboard Admin menampilkan daftar pengajuan dengan status "dikoreksi" beserta filter status. |
| Sebagai Admin, saya ingin menyetujui atau menolak koreksi, supaya data wajib pajak menjadi valid. | Setelah keputusan diambil, status akhir tersimpan dan notifikasi terkirim ke Wajib Pajak terkait. |
| Sebagai Admin, saya ingin mencetak laporan ringkas lewat CLI, supaya saya tidak perlu membuka dashboard tiap saat. | Perintah `php artisan pph:laporan` menampilkan ringkasan statistik jumlah pengajuan per status di terminal. |

---

## Requirements

### Functional Requirements

| ID | Requirement |
|---|---|
| FR-01 | Sistem harus menyediakan fitur pendaftaran akun baru untuk Wajib Pajak |
| FR-02 | Sistem harus menyediakan fitur login untuk Wajib Pajak dan Admin |
| FR-03 | Sistem harus menyediakan fitur logout |
| FR-04 | Sistem harus mengizinkan pengguna mengelola profil akun |
| FR-05 | Sistem harus mengizinkan pengguna mengganti kata sandi |
| FR-06 | Wajib Pajak harus dapat menginput data penghasilan secara manual |
| FR-07 | Admin harus dapat mengelola data penghasilan wajib pajak |
| FR-08 | Sistem harus dapat mengimpor data penghasilan simulasi (dummy) melalui CLI |
| FR-09 | Sistem harus menghitung PTKP otomatis berdasarkan status wajib pajak |
| FR-10 | Sistem harus menghitung Penghasilan Kena Pajak (total penghasilan dikurangi PTKP) |
| FR-11 | Sistem harus menghitung PPh terutang menggunakan tarif progresif berjenjang |
| FR-12 | Sistem harus menyimpan hasil perhitungan sebagai data berstatus "pra-isi" |
| FR-13 | Sistem harus dapat menjalankan perhitungan otomatis untuk seluruh data melalui CLI |
| FR-14 | Wajib Pajak harus dapat melihat hasil perhitungan pra-isi miliknya |
| FR-15 | Wajib Pajak harus dapat melihat rincian detail perhitungan |
| FR-16 | Wajib Pajak harus dapat mengonfirmasi data pra-isi |
| FR-17 | Wajib Pajak harus dapat mengajukan koreksi data |
| FR-18 | Wajib Pajak harus dapat melampirkan dokumen pendukung koreksi |
| FR-19 | Wajib Pajak harus dapat mengunduh bukti konfirmasi |
| FR-20 | Admin harus dapat melihat seluruh data pengajuan wajib pajak |
| FR-21 | Admin harus dapat meninjau data yang diajukan koreksi |
| FR-22 | Admin harus dapat menyetujui atau menolak pengajuan koreksi |
| FR-23 | Sistem harus mengirim notifikasi ke Wajib Pajak setelah keputusan Admin |
| FR-24 | Sistem harus mencatat setiap perubahan status ke riwayat (audit trail) |
| FR-25 | Wajib Pajak harus dapat melihat riwayat status pengajuannya |
| FR-26 | Admin harus dapat melihat dashboard statistik |
| FR-27 | Sistem harus dapat mencetak laporan ringkas melalui CLI |
| FR-28 | Admin harus dapat mengelola master data PTKP dan tarif pajak |
| FR-29 | Admin harus dapat mencatat dan mengelola jenis Wajib Pajak (Orang Pribadi/Badan/Bendahara) sebagai data klasifikasi, tanpa memicu perhitungan pajak untuk jenis selain Orang Pribadi |
| FR-30 | Admin harus dapat melihat panel ringkas status kesehatan sistem (server, database, storage) pada Dashboard Admin sebagai informasi tambahan |

### Non-Functional Requirements

| ID | Requirement |
|---|---|
| NFR-01 | Antarmuka harus mudah dipahami oleh pengguna awam |
| NFR-02 | Sistem harus menampilkan pesan status yang jelas pada setiap aksi |
| NFR-03 | Sistem harus menerapkan role-based access control (Wajib Pajak vs Admin) |
| NFR-04 | Kata sandi harus disimpan dalam bentuk terenkripsi (hashing) |
| NFR-05 | Seluruh input harus melalui validasi sebelum disimpan ke basis data |
| NFR-06 | Route administratif hanya dapat diakses oleh Admin |
| NFR-07 | Perhitungan PPh otomatis harus selesai dalam waktu singkat |
| NFR-08 | Dashboard statistik harus menampilkan data teragregasi secara efisien |
| NFR-09 | Hasil perhitungan otomatis harus konsisten dengan perhitungan manual |
| NFR-10 | Setiap perubahan status wajib tercatat tanpa ada yang terlewat |
| NFR-11 | Logika perhitungan pajak harus dipisahkan dalam Service Class tersendiri |
| NFR-12 | Struktur kode harus mengikuti konvensi standar Laravel (MVC) |
| NFR-13 | Sistem harus dapat dijalankan pada server berbasis PHP dan MySQL standar |
| NFR-14 | Antarmuka web harus responsif di desktop maupun mobile |
| NFR-15 | Struktur basis data harus mampu menampung pertambahan data tanpa perubahan skema besar |

---

## Desain UI/UX

Gaya desain mengikuti kesan formal dan institusional, terinspirasi dari Coretax DJP — palet warna utama navy blue & putih dengan aksen teal/emas muda, tipografi bersih, dan tata letak berbasis kartu ringkasan serta tabel data.

Halaman utama yang dirancang:
- **Login** — form email & password dengan header bergaya resmi
- **Dashboard Wajib Pajak** — kartu ringkasan (total penghasilan, PPh terutang, status) + tabel riwayat pengajuan
- **Detail Perhitungan PPh** — rincian PTKP, PKP, tarif per lapisan, dan tombol Konfirmasi/Ajukan Koreksi
- **Dashboard Admin** — tabel seluruh wajib pajak dengan filter status + statistik ringkas
- **Riwayat/Audit Trail** — tampilan timeline status pengajuan

Logo dan banner sistem dirancang dengan gaya geometris formal, hindari kesan playful/startup, agar sejalan dengan konteks institusi perpajakan.

---

## Peran dan Hak Akses

| Peran | Hak Akses |
|---|---|
| **Wajib Pajak** | Login/logout, kelola profil, input data penghasilan, lihat hasil pra-isi, lihat detail perhitungan, konfirmasi data, ajukan koreksi + lampiran dokumen, lihat riwayat status, unduh bukti konfirmasi |
| **Admin** | Login/logout, kelola profil, kelola data wajib pajak & penghasilan, kelola klasifikasi jenis wajib pajak (Orang Pribadi/Badan/Bendahara), lihat seluruh data koreksi, setujui/tolak koreksi, kelola master PTKP & tarif pajak, lihat dashboard statistik & status kesehatan sistem, cetak laporan (CLI), kirim notifikasi |

---

*Disusun sebagai bagian dari proyek sekolah (RPL) — Product Requirements Document sistem SIAP Pajak.*

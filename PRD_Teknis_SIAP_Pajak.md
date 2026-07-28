# Product Requirements Document (PRD) — Teknis
## SIAP Pajak (Sistem Informasi Analisis & Pra-isi Pajak Penghasilan)

---

## 1. Ringkasan Teknis

SIAP Pajak dibangun sebagai aplikasi web berbasis **Laravel (PHP)** dengan arsitektur berlapis (layered architecture), dilengkapi antarmuka **CLI (Artisan Command)** untuk kebutuhan otomatisasi dan pelaporan. Fokus utama sistem adalah modul perhitungan Pajak Penghasilan (PPh) otomatis berbasis PTKP dan tarif progresif.

---

## 2. Tech Stack

| Komponen | Teknologi |
|---|---|
| Backend Framework | Laravel (PHP) |
| Basis Data | MySQL |
| ORM | Eloquent |
| Autentikasi | Laravel Breeze / Fortify |
| Frontend | Blade Template + Tailwind CSS |
| Antarmuka CLI | Laravel Artisan Command |
| Penjadwalan Otomatis | Laravel Task Scheduler |
| Data Uji/Dummy | Laravel Factory & Seeder (Faker) |
| Grafik (opsional) | Chart.js (dashboard admin) |

---

## 3. Arsitektur Sistem

```
Presentation Layer      → Blade View, Route
Application Layer       → Controller
Business Logic Layer    → Service Class (PPhCalculatorService)
Data Access Layer       → Eloquent Model
Infrastructure Layer    → Artisan Command, Scheduler
```

Logika perhitungan pajak dipisahkan ke dalam **Service Class**, sehingga dapat dipanggil baik dari Controller (web) maupun Command (CLI) tanpa duplikasi kode.

---

## 4. Struktur Direktori

```
app/Console/Commands/
  ├─ SeedDummyPenghasilan.php
  ├─ HitungPPhOtomatis.php
  └─ LaporanPPh.php

app/Models/
  ├─ User.php
  ├─ DataPenghasilan.php
  ├─ PPhCalculation.php
  └─ StatusHistory.php

app/Services/
  └─ PPhCalculatorService.php

app/Http/Controllers/
  ├─ PPhController.php
  └─ AdminController.php

database/migrations/
database/seeders/
routes/web.php
```

---

## 5. Skema Basis Data

### Tabel: `users`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | bigint (PK) | |
| name | varchar | |
| email | varchar | |
| role | enum | wajib_pajak / admin |
| password | varchar | |

### Tabel: `data_penghasilan`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | bigint (PK) | |
| user_id | bigint (FK → users.id) | |
| sumber | varchar | |
| jumlah | decimal | |
| periode | date | |
| terverifikasi | boolean | |

### Tabel: `pph_calculations`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | bigint (PK) | |
| user_id | bigint (FK → users.id) | |
| total_penghasilan | decimal | |
| ptkp | decimal | |
| penghasilan_kena_pajak | decimal | |
| pph_terutang | decimal | |
| status | enum | pra_isi / dikonfirmasi / dikoreksi |

### Tabel: `status_history`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | bigint (PK) | |
| pph_calculation_id | bigint (FK → pph_calculations.id) | |
| status_lama | varchar | |
| status_baru | varchar | |
| diubah_oleh | bigint (FK → users.id) | |
| keterangan | text | |

### Relasi
- `users` (1) → (N) `data_penghasilan`
- `users` (1) → (N) `pph_calculations`
- `pph_calculations` (1) → (N) `status_history`

---

## 6. Kebutuhan Fungsional — Logika Perhitungan PPh

Modul `PPhCalculatorService` **wajib** menyediakan tiga method inti:

**6.1 `hitungPTKP(statusKawin, jumlahTanggungan)`**
Mengembalikan nilai PTKP sesuai status:
| Status | PTKP/Tahun |
|---|---|
| TK/0 | Rp54.000.000 |
| K/0 | Rp58.500.000 |
| K/1 | Rp63.000.000 |
| K/2 | Rp67.500.000 |
| K/3 | Rp72.000.000 |

**6.2 `hitungPenghasilanKenaPajak(totalPenghasilan, ptkp)`**
Rumus: `totalPenghasilan - ptkp`. Jika hasil negatif → dianggap 0.

**6.3 `hitungPPhProgresif(penghasilanKenaPajak)`**
Dihitung berjenjang per lapisan tarif (bukan flat rate):
| Lapisan | Tarif |
|---|---|
| Rp0 – Rp60.000.000 | 5% |
| >Rp60.000.000 – Rp250.000.000 | 15% |
| >Rp250.000.000 – Rp500.000.000 | 25% |
| >Rp500.000.000 – Rp5.000.000.000 | 30% |
| >Rp5.000.000.000 | 35% |

**Pseudocode:**
```
function hitungPPhProgresif(pkp):
    sisa = pkp
    total = 0
    lapisan = [
      [60000000, 0.05],
      [190000000, 0.15],
      [250000000, 0.25],
      [4500000000, 0.30],
      [INF, 0.35]
    ]
    for [batas, tarif] in lapisan:
        if sisa <= 0: break
        kena = min(sisa, batas)
        total += kena * tarif
        sisa -= kena
    return total
```

**Contoh kasus uji:**
> Input: TK/0, penghasilan bruto = Rp80.000.000
> PTKP = Rp54.000.000 → PKP = Rp26.000.000
> PPh = 5% × Rp26.000.000 = **Rp1.300.000**

---

## 7. Alur Proses (Sequence Logic)

1. `pph:import-data-dummy` → generate data dummy (Faker) → simpan ke `data_penghasilan`
2. `pph:hitung-otomatis` (manual/terjadwal) → ambil data belum dihitung → panggil `PPhCalculatorService` → simpan ke `pph_calculations` dengan status `pra_isi`
3. User login → `PPhController` tampilkan data miliknya
4. User **Konfirmasi** → status → `dikonfirmasi` → insert ke `status_history`
5. User **Ajukan Koreksi** → status → `dikoreksi` → insert ke `status_history` → admin diberi tahu
6. `pph:laporan` → query agregat (COUNT per status, SUM pph_terutang) → cetak ke terminal

---

## 8. CLI Command (Artisan)

| Perintah | Fungsi |
|---|---|
| `php artisan pph:import-data-dummy` | Generate data penghasilan simulasi (Faker) |
| `php artisan pph:hitung-otomatis` | Jalankan perhitungan PPh untuk semua data belum dihitung |
| `php artisan pph:laporan` | Tampilkan ringkasan statistik di terminal |

---

## 9. Routing (Endpoint Web)

| Method | Endpoint | Fungsi | Middleware |
|---|---|---|---|
| GET | `/dashboard` | Dashboard sesuai role | `auth` |
| GET | `/pph/{id}` | Detail perhitungan PPh | `auth` |
| POST | `/pph/{id}/konfirmasi` | Konfirmasi data pra-isi | `auth` |
| POST | `/pph/{id}/koreksi` | Ajukan koreksi | `auth` |
| GET | `/admin/data` | Kelola seluruh data | `auth`, `role:admin` |
| POST | `/admin/verifikasi/{id}` | Verifikasi koreksi | `auth`, `role:admin` |

---

## 10. Kebutuhan Non-Fungsional (Keamanan & Akses)

- Role-based access control: `wajib_pajak` vs `admin`
- Middleware `auth` pada seluruh route yang butuh login
- Middleware `role:admin` khusus route administratif
- Password di-hash (bcrypt bawaan Laravel)
- Validasi input (Form Request Validation) sebelum data disimpan

---

## 11. Rencana Pengujian (Test Plan)

| No | Skenario | Hasil Diharapkan |
|---|---|---|
| 1 | Input data penghasilan baru | Data tersimpan, status "belum dihitung" |
| 2 | Jalankan `pph:hitung-otomatis` | `pph_terutang` sesuai rumus PTKP + tarif progresif |
| 3 | Konfirmasi data pra-isi | Status berubah, `status_history` bertambah 1 baris |
| 4 | Ajukan koreksi | Status → `dikoreksi`, tampil di dashboard admin |
| 5 | Akses `/admin/*` oleh role `wajib_pajak` | Ditolak (403) oleh middleware `role:admin` |

---

## 12. Definition of Done (Kriteria Selesai)

- [ ] Migration & model seluruh tabel selesai dan relasi berjalan
- [ ] `PPhCalculatorService` menghasilkan angka yang sama dengan perhitungan manual pada seluruh kasus uji
- [ ] Ketiga command CLI berjalan tanpa error
- [ ] Role-based access teruji (wajib pajak tidak bisa akses rute admin)
- [ ] Audit trail (`status_history`) tercatat pada setiap perubahan status

---

*Disusun sebagai bagian dari proyek sekolah (RPL) — fokus aspek teknis sistem SIAP Pajak.*

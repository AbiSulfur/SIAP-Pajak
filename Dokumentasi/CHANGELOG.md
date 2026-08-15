# Changelog
## SIAP Pajak (Sistem Informasi Analisis & Pra-isi Pajak Penghasilan)

Semua perubahan signifikan pada perancangan proyek ini dicatat di file ini.

---

## [1.0.0] - 2026-08-11

### Added
- PRD (Product Requirements Document) resmi menggunakan struktur standar: Masalah, Rencana, Value Prop, Tujuan, Metrik, Scope, User Persona, User Stories & Acceptance Criteria, Requirements, Desain UI/UX, Peran & Hak Akses.
- Dokumen Functional Requirements (FR-01 s/d FR-28) dan Non-Functional Requirements (NFR-01 s/d NFR-15) dalam format `.md`.
- Use Case Diagram (PlantUML) dengan 2 aktor: Wajib Pajak dan Admin, mencakup fitur lengkap (autentikasi, input data, konfirmasi/koreksi, verifikasi admin, pengelolaan master data).
- Sequence Diagram (PlantUML) versi terpisah per skenario: alur konfirmasi (data benar) dan alur koreksi (data perlu ditinjau Admin) — dipecah dari versi awal yang memakai blok `alt` agar lebih mudah dibaca.
- Flowchart/Activity Diagram (PlantUML) lengkap dengan swimlane per aktor (Wajib Pajak, Sistem, Admin), mencakup percabangan hasil verifikasi Admin (disetujui/ditolak).
- Kode ERD untuk dbdiagram.io (4 tabel: users, data_penghasilan, pph_calculations, status_history).
- Prompt desain untuk Stitch.ai — versi tampilan aplikasi (mirip Coretax) dan versi banner sistem.
- Saran arah desain logo sistem (4 konsep: checkmark+dokumen, monogram "SP", panah alur, perisai+elemen digital).
- Naskah lengkap carousel Instagram (10 slide) untuk media edukasi/promosi ide sistem, termasuk revisi judul yang lebih menarik.

### Changed
- Use Case Diagram direvisi: aktor abstrak "Pengguna Terdaftar" (actor generalization) dihapus setelah dipertanyakan kegunaannya — disederhanakan menjadi 2 aktor konkret langsung (Wajib Pajak, Admin) tanpa notasi generalization, agar lebih mudah dijelaskan.
- Sequence Diagram direvisi total setelah versi dengan blok `alt` dinilai terlalu rumit dibaca oleh guru — dipecah menjadi 2 diagram linear terpisah.

### Fixed
- N/A

---

## [0.3.0] - Draft Perancangan Sistem

### Added
- Dokumen Perancangan Sistem / Software Design Document (SDD) ditambahkan ke dokumen Word: arsitektur perangkat lunak berlapis, class diagram (deskripsi tekstual), sequence diagram alur pra-isi & konfirmasi, ERD kardinalitas, wireframe deskriptif tiap halaman, dan tabel routing.
- Dokumentasi Teknis (`.txt`) — fokus penuh pada tech stack, arsitektur, skema database, logika perhitungan PPh (dengan pseudocode), alur proses, CLI command, routing, keamanan, dan rencana pengujian.
- PRD teknis awal dalam format `.md`, disusun berdasarkan dokumentasi teknis di atas.

### Changed
- Standar proyek diperbarui: wajib menggunakan framework PHP (Laravel) dan antarmuka CLI, sehingga cakupan sistem diperluas dari rencana awal yang sederhana.

---

## [0.2.0] - Pivot Konsep Sistem

### Changed
- **Perubahan besar arah proyek:** ide awal yang sempat dipresentasikan ke guru (masyarakat cukup bayar pajak tanpa pelaporan rumit) ditemukan tidak mengakomodasi sifat individual perhitungan Pajak Penghasilan (PPh). Proyek dipivot menjadi sistem **"Pra-isi & Konfirmasi"** — PPh dihitung otomatis oleh sistem, wajib pajak tinggal meninjau dan mengonfirmasi/mengoreksi.
- Ide sebelumnya (tracker status restitusi PPN bergaya lacak-paket) digantikan oleh konsep pra-isi PPh ini sebagai fokus utama proyek.

### Added
- Dokumen Word awal: "Dokumentasi Sistem" mencakup latar belakang, landasan konsep, analisis kebutuhan, perancangan sistem, logika perhitungan PPh (PTKP & tarif progresif), implementasi, rencana pengujian, dan kesimpulan.

---

## [0.1.0] - Ide Awal

### Added
- Konsep awal proyek sekolah (RPL): tracker status restitusi pajak (PPN) bergaya UX "lacak paket", sebagai respons atas isu transparansi restitusi yang jadi masalah nyata di Indonesia pada 2026.
- Daftar pertanyaan kritis (teknis & non-teknis) yang diperkirakan akan ditanyakan guru, beserta jawaban rasionalnya.

---

*Changelog ini mencatat riwayat perancangan proyek sekolah (RPL) SIAP Pajak, bukan riwayat commit kode.*

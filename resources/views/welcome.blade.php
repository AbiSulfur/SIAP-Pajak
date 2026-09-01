<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAP Pajak — Sistem Informasi Analisis & Pra-isi Pajak Penghasilan</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">
    <meta name="description" content="Lapor Pajak Penghasilan jadi lebih mudah. Hitung otomatis, tinggal konfirmasi. Portal resmi perpajakan digital Indonesia.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-background text-text-main">

    <!-- Top Navigation -->
    <nav class="bg-surface-white border-b border-border-subtle sticky top-0 z-50">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center justify-between h-16">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined filled text-primary">account_balance</span>
                <span class="text-title-md text-primary font-bold">SIAP Pajak</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-body-sm font-medium text-text-main">
                <a href="#" class="hover:text-primary border-b-2 border-primary pb-0.5 transition-colors">Beranda</a>
                <a href="#" class="hover:text-primary transition-colors">Tentang Kami</a>
                <a href="#" class="hover:text-primary transition-colors">Layanan</a>
                <a href="#" class="hover:text-primary transition-colors">Bantuan</a>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="text-body-sm text-text-main hover:text-primary transition-colors" wire:navigate>Login</a>
                <a href="{{ route('register') }}" class="btn-primary text-body-sm py-2 px-4" wire:navigate>Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary-container relative overflow-hidden">
        <div class="absolute right-0 top-0 w-1/2 h-full bg-surface-tint opacity-20 transform -skew-x-12 origin-top-right hidden md:block"></div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-20 md:py-28 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-on-primary">
                    <span class="inline-block text-label-md uppercase tracking-wider bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full mb-6 border border-white/20">Portal Resmi Perpajakan</span>
                    <h1 class="text-display-lg mb-6">Lapor Pajak Penghasilan<br>Jadi Lebih Mudah</h1>
                    <p class="text-body-md opacity-90 mb-8 max-w-lg">Hitung Otomatis, Tinggal Konfirmasi. Sistem informasi administrasi perpajakan yang dirancang untuk efisiensi dan transparansi.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('login') }}" class="btn-teal text-body-sm py-3 px-6">Lapor Sekarang</a>
                        <a href="#proses" class="btn-secondary text-body-sm py-3 px-6 border-white/50 text-white hover:bg-white/10">Panduan Pengguna</a>
                    </div>
                </div>
                <!-- Document illustration -->
                <div class="hidden md:flex justify-center">
                    <div class="w-72 h-96 bg-surface-white/90 rounded-lg shadow-ambient p-8 relative transform rotate-2">
                        <div class="space-y-3 mb-6">
                            <div class="h-3 bg-surface-container-high rounded w-3/4"></div>
                            <div class="h-3 bg-surface-container-high rounded w-full"></div>
                            <div class="h-3 bg-surface-container-high rounded w-5/6"></div>
                        </div>
                        <div class="space-y-3 mb-6">
                            <div class="flex gap-3">
                                <div class="h-10 bg-surface-container rounded flex-1"></div>
                                <div class="h-10 bg-surface-container rounded flex-1"></div>
                            </div>
                            <div class="h-3 bg-surface-container-high rounded w-full"></div>
                            <div class="h-3 bg-surface-container-high rounded w-2/3"></div>
                        </div>
                        <div class="h-10 bg-surface-container rounded w-full mb-3"></div>
                        <div class="h-3 bg-surface-container-high rounded w-1/2"></div>
                        <!-- Checkmark -->
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-secondary rounded-lg flex items-center justify-center shadow-ambient">
                            <span class="material-symbols-outlined text-on-secondary text-3xl">check</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-surface-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
            <h2 class="text-headline-lg text-primary mb-3">Layanan Digital Terpadu</h2>
            <p class="text-body-md text-text-muted max-w-xl mx-auto mb-12">Inovasi teknologi untuk mempermudah proses pelaporan dan pengelolaan pajak Anda secara mandiri, aman, dan efisien.</p>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="card text-left">
                    <div class="w-12 h-12 bg-primary-fixed rounded-lg flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-primary">auto_fix_high</span>
                    </div>
                    <h3 class="text-title-md text-text-main mb-2">Kalkulasi Otomatis</h3>
                    <p class="text-body-sm text-text-muted">Sistem kami secara otomatis mengisi data formulir pajak (pre-populated data) berdasarkan rekam jejak finansial yang terintegrasi, meminimalkan kesalahan input manual.</p>
                </div>
                <!-- Feature 2 -->
                <div class="card text-left">
                    <div class="w-12 h-12 bg-secondary-fixed rounded-lg flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-secondary">verified_user</span>
                    </div>
                    <h3 class="text-title-md text-text-main mb-2">Konfirmasi Digital</h3>
                    <p class="text-body-sm text-text-muted">Tinjau, setujui, dan kirim laporan pajak Anda hanya dengan beberapa klik. Pengesahan menggunakan otentikasi digital yang sah secara hukum.</p>
                </div>
                <!-- Feature 3 -->
                <div class="card text-left">
                    <div class="w-12 h-12 bg-tertiary-fixed rounded-lg flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-tertiary">shield</span>
                    </div>
                    <h3 class="text-title-md text-text-main mb-2">Keamanan Tingkat Tinggi</h3>
                    <p class="text-body-sm text-text-muted">Data finansial Anda dilindungi oleh enkripsi standar militer dan infrastruktur server nasional yang diawasi ketat selama 24/7.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-display-lg text-primary font-tabular">12.5M+</div>
                    <div class="text-label-md uppercase text-text-muted tracking-wider mt-2">Wajib Pajak Terdaftar</div>
                </div>
                <div>
                    <div class="text-display-lg text-secondary font-tabular">98%</div>
                    <div class="text-label-md uppercase text-text-muted tracking-wider mt-2">Laporan Tepat Waktu</div>
                </div>
                <div>
                    <div class="text-display-lg text-primary font-tabular">2.4M</div>
                    <div class="text-label-md uppercase text-text-muted tracking-wider mt-2">SPT Diproses Bulan Ini</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="proses" class="py-20 bg-surface-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-headline-lg text-primary mb-4">Proses Pelaporan yang Transparan</h2>
                    <p class="text-body-md text-text-muted mb-10">Kami telah merampingkan proses administrasi yang rumit menjadi langkah-langkah linier yang mudah diikuti oleh semua kalangan.</p>

                    <!-- Steps -->
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-secondary rounded-full flex items-center justify-center text-on-secondary font-bold text-body-sm">1</div>
                            <div>
                                <h3 class="text-title-md text-text-main mb-1">Akses & Verifikasi</h3>
                                <p class="text-body-sm text-text-muted">Masuk menggunakan Nomor Pokok Wajib Pajak (NPWP) dan kata sandi Anda. Sistem akan memverifikasi identitas Anda dengan aman.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-surface-container-high rounded-full flex items-center justify-center text-text-main font-bold text-body-sm">2</div>
                            <div>
                                <h3 class="text-title-md text-text-main mb-1">Tinjau Data Pra-isi</h3>
                                <p class="text-body-sm text-text-muted">Sistem menampilkan draf laporan tahunan berdasarkan data potong pajak dari instansi terkait. Periksa kesesuaiannya.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-surface-container-high rounded-full flex items-center justify-center text-text-main font-bold text-body-sm">3</div>
                            <div>
                                <h3 class="text-title-md text-text-main mb-1">Finalisasi & Kirim</h3>
                                <p class="text-body-sm text-text-muted">Lakukan persetujuan akhir. Dapatkan Bukti Penerimaan Elektronik (BPE) langsung ke kotak masuk email Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Document Preview Placeholder -->
                <div class="hidden md:block">
                    <div class="bg-surface rounded-lg border border-border-subtle p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="h-3 bg-surface-container-high rounded w-1/3"></div>
                            <div class="w-10 h-10 bg-surface-container rounded-full"></div>
                        </div>
                        <div class="space-y-4 mb-6">
                            <div class="flex gap-4">
                                <div class="h-12 bg-surface-container rounded flex-1"></div>
                                <div class="h-12 bg-surface-container rounded flex-1"></div>
                            </div>
                            <div class="h-3 bg-surface-container-high rounded w-full"></div>
                            <div class="h-3 bg-surface-container-high rounded w-4/5"></div>
                            <div class="h-3 bg-surface-container-high rounded w-full"></div>
                        </div>
                        <div class="h-12 bg-surface-container rounded w-full mb-4"></div>
                        <div class="space-y-3">
                            <div class="h-3 bg-surface-container-high rounded w-2/3"></div>
                            <div class="h-3 bg-surface-container-high rounded w-1/2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

</body>
</html>

<x-front-layout>
    <!-- Hero Section -->
    <section class="bg-surface-white relative overflow-hidden">
        <!-- Abstract Mesh Background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute top-40 -left-20 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-20 w-[400px] h-[400px] bg-tertiary/10 rounded-full blur-3xl"></div>
            <!-- Grid pattern overlay -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGg0MHY0MEgweiIgZmlsbD0ibm9uZSIvPjxwYXRoIGQ9Ik0wIDEwaDQwTTEwIDB2NDAiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIi8+PC9zdmc+')] opacity-50"></div>
        </div>

        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8 md:py-10 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Text Content -->
                <div class="text-text-main relative">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-8 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                        <span class="text-label-md text-primary font-bold uppercase tracking-wide">Portal Resmi Perpajakan</span>
                    </div>
                    
                    <h1 class="text-[3.5rem] md:text-[4.5rem] leading-[1.1] font-extrabold text-primary mb-6 tracking-tight">
                        Lapor Pajak <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Jadi Lebih Mudah</span>
                    </h1>
                    
                    <p class="text-body-lg text-text-muted mb-10 max-w-lg leading-relaxed">
                        Hitung otomatis, tinggal konfirmasi. Sistem informasi administrasi perpajakan yang dirancang untuk efisiensi, akurasi, dan transparansi maksimal.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('login') }}" class="btn-primary text-title-sm py-4 px-8 rounded-xl flex items-center justify-center gap-2 group hover:shadow-lg hover:shadow-primary/30 transition-all shadow-md">
                            Lapor Sekarang 
                            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                        <a href="#proses" class="bg-surface border-2 border-border-subtle text-primary font-bold text-title-sm py-4 px-8 rounded-xl flex items-center justify-center hover:bg-primary/5 hover:border-primary/30 transition-all">
                            Panduan Pengguna
                        </a>
                    </div>

                    <!-- Trust indicators -->
                    <div class="mt-12 flex items-center gap-6">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full bg-surface-variant border-2 border-white flex items-center justify-center shadow-sm z-30"><span class="material-symbols-outlined text-sm text-text-muted">person</span></div>
                            <div class="w-10 h-10 rounded-full bg-surface-variant border-2 border-white flex items-center justify-center shadow-sm z-20"><span class="material-symbols-outlined text-sm text-text-muted">person</span></div>
                            <div class="w-10 h-10 rounded-full bg-surface-variant border-2 border-white flex items-center justify-center shadow-sm z-10"><span class="material-symbols-outlined text-sm text-text-muted">person</span></div>
                        </div>
                        <div class="text-label-sm text-text-muted">
                            Dipercaya oleh <strong class="text-primary text-body-sm">12 Juta+</strong> <br>Wajib Pajak di Indonesia
                        </div>
                    </div>
                </div>

                <!-- Visual Content -->
                <div class="hidden lg:flex justify-end relative">
                    <!-- Main Image Container -->
                    <div class="relative w-4/5 group">
                        <!-- Decorative offset background -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-secondary/20 rounded-[2rem] transform translate-x-5 translate-y-5 transition-transform duration-500 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                        
                        <img 
                            src="{{ asset('images/top-view-green-card-application.jpg') }}" 
                            alt="Ilustrasi Dokumen Pajak" 
                            class="w-full h-auto rounded-[2rem] shadow-2xl relative z-10 border-8 border-white object-cover transform transition-transform duration-500 group-hover:-translate-y-2" 
                            style="aspect-ratio: 4/5;"
                        >
                        
                        <!-- Floating Glass Card (Bottom Left) -->
                        <div class="absolute -bottom-8 -left-12 bg-white/90 backdrop-blur-md p-5 rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.08)] border border-white z-20 flex gap-4 items-center min-w-[240px] transform transition-transform duration-700 hover:-translate-y-2">
                            <div class="w-12 h-12 rounded-full bg-tertiary/20 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-tertiary text-2xl">verified_user</span>
                            </div>
                            <div>
                                <p class="text-label-sm text-text-muted mb-0.5">Sistem Terenkripsi</p>
                                <p class="text-title-sm text-text-main font-bold">Layanan Aktif 24/7</p>
                            </div>
                        </div>
                        
                        <!-- Small decorative badge (Top Right) -->
                        <div class="absolute top-12 -right-6 bg-white p-4 rounded-2xl shadow-xl border border-white z-20 flex flex-col items-center justify-center transform transition-transform duration-700 hover:scale-110">
                            <span class="material-symbols-outlined text-secondary text-3xl mb-1">speed</span>
                            <span class="text-[10px] font-bold text-text-muted uppercase tracking-wider">Fast</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-surface-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
            <h2 class="text-headline-lg text-primary mb-4 font-bold">Layanan Digital Terpadu</h2>
            <p class="text-body-lg text-text-muted max-w-2xl mx-auto mb-16">Inovasi teknologi untuk mempermudah proses pelaporan dan pengelolaan pajak Anda secara mandiri, aman, dan efisien.</p>

            <div class="grid md:grid-cols-3 gap-8 text-left">
                <!-- Feature 1 -->
                <div class="bg-surface border border-border-subtle rounded-[2rem] overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col">
                    <!-- Visual Area -->
                    <div class="h-56 bg-gradient-to-br from-primary/5 to-transparent relative flex flex-col items-center justify-center gap-4 w-full p-6 border-b border-border-subtle">
                        <!-- Abstract Form Rows -->
                        <div class="w-4/5 h-10 bg-white rounded-xl shadow-sm flex items-center px-4 gap-3 border border-border-subtle transform group-hover:-translate-y-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded flex-shrink-0 bg-surface-variant"></div>
                            <div class="w-1/2 h-2.5 bg-surface-variant rounded-full"></div>
                        </div>
                        <div class="w-4/5 h-10 bg-white rounded-xl shadow-md flex items-center px-4 gap-3 border border-primary/30 relative overflow-hidden transform group-hover:scale-105 transition-all duration-500 z-10">
                            <div class="absolute top-0 left-0 h-full w-full bg-primary/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-[800ms] ease-out"></div>
                            <div class="w-5 h-5 rounded flex-shrink-0 bg-primary/20 text-primary flex items-center justify-center relative z-10"><span class="material-symbols-outlined text-[14px]">auto_awesome</span></div>
                            <div class="w-2/3 h-2.5 bg-primary rounded-full relative z-10"></div>
                            <span class="material-symbols-outlined text-primary text-lg absolute right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-300 z-10">check_circle</span>
                        </div>
                        <div class="w-4/5 h-10 bg-white rounded-xl shadow-sm flex items-center px-4 gap-3 border border-border-subtle transform group-hover:translate-y-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded flex-shrink-0 bg-surface-variant"></div>
                            <div class="w-1/3 h-2.5 bg-surface-variant rounded-full"></div>
                        </div>
                    </div>
                    <!-- Content Area -->
                    <div class="p-8 flex-grow">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-2xl">auto_fix_high</span>
                        </div>
                        <h3 class="text-title-lg text-text-main mb-3 font-bold">Kalkulasi Otomatis</h3>
                        <p class="text-body-sm text-text-muted leading-relaxed">Formulir pajak terisi otomatis dari integrasi data finansial untuk meminimalkan kesalahan input manual</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bg-surface border border-border-subtle rounded-[2rem] overflow-hidden hover:shadow-xl hover:border-secondary/30 transition-all duration-300 group flex flex-col">
                    <!-- Visual Area -->
                    <div class="h-56 bg-gradient-to-br from-secondary/5 to-transparent relative flex items-center justify-center w-full border-b border-border-subtle">
                        <div class="relative flex items-center justify-center w-32 h-32">
                            <!-- Rotating dashed border -->
                            <div class="absolute inset-0 rounded-full border-2 border-dashed border-secondary/30 group-hover:rotate-180 transition-transform duration-[1500ms] linear"></div>
                            <div class="absolute inset-3 rounded-full border border-secondary/20"></div>
                            <!-- Center badge -->
                            <div class="w-16 h-16 bg-gradient-to-tr from-secondary to-teal-400 rounded-full flex items-center justify-center shadow-lg shadow-secondary/30 transform group-hover:scale-110 transition-transform duration-500 z-10 relative">
                                <span class="material-symbols-outlined text-white text-3xl">fingerprint</span>
                                <div class="absolute -top-1 -right-1 w-6 h-6 bg-white rounded-full flex items-center justify-center shadow-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300 border border-border-subtle">
                                    <span class="material-symbols-outlined text-secondary text-[14px]">done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Area -->
                    <div class="p-8 flex-grow">
                        <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-secondary text-2xl">verified_user</span>
                        </div>
                        <h3 class="text-title-lg text-text-main mb-3 font-bold">Konfirmasi Digital</h3>
                        <p class="text-body-sm text-text-muted leading-relaxed">Tinjau dan kirim laporan secara praktis dengan tanda tangan digital (e-Sign) yang sah secara hukum</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="bg-surface border border-border-subtle rounded-[2rem] overflow-hidden hover:shadow-xl hover:border-tertiary/30 transition-all duration-300 group flex flex-col">
                    <!-- Visual Area -->
                    <div class="h-56 bg-gradient-to-br from-tertiary/5 to-transparent relative flex items-center justify-center w-full border-b border-border-subtle overflow-hidden">
                        <div class="relative w-32 h-32 flex items-center justify-center">
                            <!-- Glowing rings -->
                            <div class="absolute inset-0 rounded-full bg-tertiary/10 scale-[1.5] group-hover:scale-[1.8] group-hover:bg-tertiary/20 transition-all duration-700"></div>
                            <div class="absolute inset-0 rounded-full bg-tertiary/10 scale-110 group-hover:scale-125 transition-all duration-500 delay-100"></div>
                            
                            <!-- Shield Icon -->
                            <div class="w-20 h-20 bg-white rounded-2xl shadow-[0_10px_25px_rgba(0,0,0,0.05)] border border-tertiary/20 flex flex-col items-center justify-center z-10 transform group-hover:-translate-y-2 transition-transform duration-500">
                                <span class="material-symbols-outlined text-tertiary text-4xl mb-1">shield_locked</span>
                                <div class="w-8 h-1.5 bg-tertiary/20 rounded-full overflow-hidden">
                                    <div class="h-full bg-tertiary w-0 group-hover:w-full transition-all duration-1000 delay-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Area -->
                    <div class="p-8 flex-grow">
                        <div class="w-12 h-12 bg-tertiary/10 rounded-xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-tertiary text-2xl">security</span>
                        </div>
                        <h3 class="text-title-lg text-text-main mb-3 font-bold">Keamanan Tingkat Tinggi</h3>
                        <p class="text-body-sm text-text-muted leading-relaxed">Data dilindungi enkripsi standar militer dan pengawasan server 24/7 dari ancaman siber</p>
                    </div>
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
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-border-subtle group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <img src="{{ asset('images/tax-return-filing.jpg') }}" alt="Proses Verifikasi SPT" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Section -->
    <section class="py-20 bg-primary-container relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/5"></div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-headline-lg text-on-primary mb-6">Keamanan Data & Privasi Anda Adalah Prioritas Utama</h2>
                    <p class="text-body-md text-on-primary/80 mb-8 leading-relaxed">
                        Kami memahami bahwa informasi finansial dan perpajakan sangat sensitif. Oleh karena itu, SIAP Pajak dibangun di atas infrastruktur keamanan tingkat tinggi yang memenuhi standar internasional untuk memastikan data Anda aman.
                    </p>
                    <ul class="space-y-6">
                        <li class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/10 backdrop-blur rounded-xl flex items-center justify-center shadow-sm border border-white/20">
                                <span class="material-symbols-outlined text-[#4ade80] text-3xl">enhanced_encryption</span>
                            </div>
                            <div>
                                <h4 class="text-title-md text-on-primary mb-1">Enkripsi End-to-End</h4>
                                <p class="text-body-sm text-on-primary/70">Seluruh transmisi data dilindungi oleh enkripsi TLS 1.3 dan AES-256 tingkat militer.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/10 backdrop-blur rounded-xl flex items-center justify-center shadow-sm border border-white/20">
                                <span class="material-symbols-outlined text-[#4ade80] text-3xl">cloud_done</span>
                            </div>
                            <div>
                                <h4 class="text-title-md text-on-primary mb-1">Server Nasional Terdistribusi</h4>
                                <p class="text-body-sm text-on-primary/70">Penyimpanan data 100% berada di dalam negeri dengan sistem redundansi ganda untuk mencegah kehilangan data.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/10 backdrop-blur rounded-xl flex items-center justify-center shadow-sm border border-white/20">
                                <span class="material-symbols-outlined text-[#4ade80] text-3xl">workspace_premium</span>
                            </div>
                            <div>
                                <h4 class="text-title-md text-on-primary mb-1">Sertifikasi & Kepatuhan ISO</h4>
                                <p class="text-body-sm text-on-primary/70">Sistem kami diaudit secara berkala dan bersertifikat ISO 27001 untuk Manajemen Keamanan Informasi.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="hidden lg:block relative">
                    <div class="absolute inset-0 bg-secondary/10 blur-3xl rounded-full transform rotate-12 scale-110"></div>
                    <div class="bg-surface-white p-8 rounded-2xl shadow-2xl border border-border-subtle relative z-10">
                        <div class="flex items-center gap-3 mb-8 border-b border-border-subtle pb-6">
                            <span class="material-symbols-outlined text-secondary text-4xl">verified_user</span>
                            <div>
                                <h3 class="text-title-lg text-text-main">Status Sistem: Aman</h3>
                                <p class="text-label-sm text-secondary">Terpantau secara Real-time</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-body-sm text-text-muted">Firewall Perlindungan Aktif</span>
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-body-sm text-text-muted">Otentikasi Multi-Faktor (MFA)</span>
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-body-sm text-text-muted">Deteksi Anomali Trafik</span>
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-body-sm text-text-muted">Backup Data Harian</span>
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-24 bg-surface-white relative">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="bg-gradient-to-r from-secondary to-primary rounded-3xl p-12 md:p-20 text-center relative overflow-hidden shadow-2xl">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
                
                <div class="relative z-10 max-w-3xl mx-auto">
                    <span class="material-symbols-outlined text-white/80 text-6xl mb-6">rocket_launch</span>
                    <h2 class="text-display-sm text-white mb-6">Sudah Siap Melaporkan Pajak Anda?</h2>
                    <p class="text-body-lg text-white/90 mb-10">Bergabunglah dengan lebih dari 12 juta Wajib Pajak yang telah beralih ke pelaporan digital yang efisien, transparan, dan terpercaya.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('register') }}" class="bg-white text-primary font-bold text-title-sm py-4 px-8 rounded-xl shadow-lg hover:-translate-y-1 hover:shadow-xl transition-all">Daftar Sekarang</a>
                        <a href="{{ route('bantuan') }}" class="bg-transparent border border-white/30 text-white font-bold text-title-sm py-4 px-8 rounded-xl hover:bg-white/10 transition-colors">Baca Panduan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-front-layout>

<x-front-layout>
    <!-- Header -->
    <section class="bg-surface-white border-b border-border-subtle py-16">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
            <span class="inline-block text-label-md uppercase tracking-wider text-primary bg-primary-fixed px-4 py-1.5 rounded-full mb-4">Layanan Digital</span>
            <h1 class="text-display-sm text-text-main mb-4">Solusi Terpadu Perpajakan</h1>
            <p class="text-body-lg text-text-muted max-w-2xl mx-auto">Kami menyediakan berbagai layanan elektronik untuk memudahkan Anda memenuhi kewajiban perpajakan dengan cepat, tepat, dan aman.</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Layanan 1: e-Filing -->
                <div class="card hover:shadow-ambient-lg transition-shadow bg-surface-white cursor-pointer group">
                    <div class="w-14 h-14 bg-primary-fixed rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-primary text-3xl">post_add</span>
                    </div>
                    <h3 class="text-title-lg text-text-main mb-3">e-Filing (Lapor SPT)</h3>
                    <p class="text-body-sm text-text-muted mb-6">Cara penyampaian SPT Tahunan secara elektronik yang dilakukan secara online dan real-time melalui koneksi internet.</p>
                    <a href="{{ route('login') }}" class="text-primary font-medium text-body-sm flex items-center gap-1 hover:gap-2 transition-all">
                        Gunakan Layanan <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Layanan 2: e-Billing -->
                <div class="card hover:shadow-ambient-lg transition-shadow bg-surface-white cursor-pointer group">
                    <div class="w-14 h-14 bg-secondary-fixed rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-secondary text-3xl">receipt_long</span>
                    </div>
                    <h3 class="text-title-lg text-text-main mb-3">e-Billing (Bayar Pajak)</h3>
                    <p class="text-body-sm text-text-muted mb-6">Sistem pembayaran pajak secara elektronik dengan membuat Kode Billing untuk berbagai jenis setoran pajak.</p>
                    <a href="#" class="text-secondary font-medium text-body-sm flex items-center gap-1 hover:gap-2 transition-all">
                        Pelajari Lebih Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Layanan 3: e-Bupot -->
                <div class="card hover:shadow-ambient-lg transition-shadow bg-surface-white cursor-pointer group">
                    <div class="w-14 h-14 bg-tertiary-fixed rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-tertiary text-3xl">assignment</span>
                    </div>
                    <h3 class="text-title-lg text-text-main mb-3">e-Bupot Unifikasi</h3>
                    <p class="text-body-sm text-text-muted mb-6">Aplikasi pembuatan Bukti Pemotongan/Pemungutan dan pelaporan SPT Masa PPh Unifikasi secara elektronik.</p>
                    <a href="#" class="text-tertiary font-medium text-body-sm flex items-center gap-1 hover:gap-2 transition-all">
                        Pelajari Lebih Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Layanan 4: Kalkulator PPh -->
                <div class="card hover:shadow-ambient-lg transition-shadow bg-surface-white cursor-pointer group">
                    <div class="w-14 h-14 bg-surface-container-high rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-text-main text-3xl">calculate</span>
                    </div>
                    <h3 class="text-title-lg text-text-main mb-3">Kalkulator Pajak</h3>
                    <p class="text-body-sm text-text-muted mb-6">Simulasikan perhitungan Pajak Penghasilan (PPh 21) Anda berdasarkan pedoman PTKP dan tarif progresif terbaru.</p>
                    <a href="#" class="text-text-main font-medium text-body-sm flex items-center gap-1 hover:gap-2 transition-all">
                        Coba Simulasi <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Layanan 5: Validasi NPWP -->
                <div class="card hover:shadow-ambient-lg transition-shadow bg-surface-white cursor-pointer group">
                    <div class="w-14 h-14 bg-primary-fixed rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-primary text-3xl">how_to_reg</span>
                    </div>
                    <h3 class="text-title-lg text-text-main mb-3">Validasi NPWP</h3>
                    <p class="text-body-sm text-text-muted mb-6">Periksa status keaktifan Nomor Pokok Wajib Pajak (NPWP) Anda dengan cepat menggunakan integrasi database KTP (NIK).</p>
                    <a href="#" class="text-primary font-medium text-body-sm flex items-center gap-1 hover:gap-2 transition-all">
                        Cek Status <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Layanan 6: Integrasi Data -->
                <div class="card hover:shadow-ambient-lg transition-shadow bg-primary text-on-primary cursor-pointer group relative overflow-hidden">
                    <div class="absolute right-0 bottom-0 opacity-10">
                        <span class="material-symbols-outlined text-9xl">database</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-on-primary text-3xl">hub</span>
                        </div>
                        <h3 class="text-title-lg mb-3">Pre-populated Data</h3>
                        <p class="text-body-sm text-on-primary/80 mb-6">Fitur unggulan kami yang menarik data otomatis dari instansi terkait, sehingga Anda tidak perlu input manual.</p>
                        <a href="{{ route('login') }}" class="text-on-primary font-bold text-body-sm flex items-center gap-1 hover:gap-2 transition-all">
                            Login untuk Mencoba <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-front-layout>

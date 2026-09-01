<x-front-layout>
    <!-- Header -->
    <section class="bg-surface py-16 border-b border-border-subtle">
        <div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop text-center">
            <h1 class="text-display-sm text-primary mb-4">Pusat Bantuan</h1>
            <p class="text-body-lg text-text-muted mb-8">Temukan jawaban dari pertanyaan yang sering diajukan, atau hubungi pusat kontak layanan kami.</p>
            
            <!-- Search bar mock -->
            <div class="relative max-w-xl mx-auto">
                <span class="material-symbols-outlined absolute left-4 top-1/2 transform -translate-y-1/2 text-text-muted">search</span>
                <input type="text" placeholder="Cari topik bantuan (contoh: lupa kata sandi, EFIN)..." class="w-full pl-12 pr-4 py-4 rounded-xl border border-border-subtle focus:border-primary focus:ring-1 focus:ring-primary outline-none text-body-md shadow-ambient">
            </div>
        </div>
    </section>

    <!-- FAQ & Contact -->
    <section class="py-20 bg-surface-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid md:grid-cols-3 gap-12">
                
                <!-- FAQ Accordion -->
                <div class="md:col-span-2 space-y-6">
                    <h2 class="text-headline-sm text-text-main mb-6">Pertanyaan Populer (FAQ)</h2>
                    
                    <div class="bg-surface rounded-xl border border-border-subtle overflow-hidden">
                        <!-- FAQ Item 1 -->
                        <div class="border-b border-border-subtle p-6 hover:bg-surface-white transition-colors cursor-pointer group">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-title-md text-text-main font-semibold group-hover:text-primary transition-colors">Bagaimana jika saya lupa EFIN?</h3>
                                <span class="material-symbols-outlined text-text-muted">expand_more</span>
                            </div>
                            <p class="text-body-sm text-text-muted mt-2">
                                Anda dapat melakukan permohonan lupa EFIN melalui email resmi Kantor Pelayanan Pajak (KPP) terdaftar, atau menggunakan fitur pengenalan wajah (Face Recognition) di aplikasi mobile M-Pajak.
                            </p>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="border-b border-border-subtle p-6 hover:bg-surface-white transition-colors cursor-pointer group">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-title-md text-text-main font-semibold group-hover:text-primary transition-colors">Apa itu sistem Pre-populated Data?</h3>
                                <span class="material-symbols-outlined text-text-muted">expand_more</span>
                            </div>
                            <p class="text-body-sm text-text-muted mt-2">
                                Sistem Pre-populated Data adalah fitur di mana form lapor pajak (SPT) Anda sudah terisi otomatis secara parsial maupun keseluruhan berdasarkan bukti potong yang telah dilaporkan oleh pihak pemberi kerja atau pemotong pajak ke dalam sistem.
                            </p>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="border-b border-border-subtle p-6 hover:bg-surface-white transition-colors cursor-pointer group">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-title-md text-text-main font-semibold group-hover:text-primary transition-colors">Mengapa status SPT saya "Koreksi Ditolak"?</h3>
                                <span class="material-symbols-outlined text-text-muted">expand_more</span>
                            </div>
                            <p class="text-body-sm text-text-muted mt-2">
                                Hal ini terjadi apabila petugas pajak/admin menemukan ketidaksesuaian yang signifikan pada dokumen pendukung yang Anda unggah. Anda dapat melihat catatan penolakan pada dashboard Wajib Pajak dan melakukan pengiriman ulang.
                            </p>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="p-6 hover:bg-surface-white transition-colors cursor-pointer group">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-title-md text-text-main font-semibold group-hover:text-primary transition-colors">Kapan batas akhir pelaporan SPT Tahunan?</h3>
                                <span class="material-symbols-outlined text-text-muted">expand_more</span>
                            </div>
                            <p class="text-body-sm text-text-muted mt-2">
                                Untuk Wajib Pajak Orang Pribadi (WP OP), batas akhir pelaporan adalah 31 Maret setiap tahunnya. Sedangkan untuk Wajib Pajak Badan, batas akhirnya adalah 30 April.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Card -->
                <div>
                    <h2 class="text-headline-sm text-text-main mb-6">Hubungi Kami</h2>
                    
                    <div class="card bg-primary text-on-primary">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur rounded-full flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-on-primary text-3xl">support_agent</span>
                        </div>
                        <h3 class="text-title-lg mb-2">Call Center Resmi</h3>
                        <p class="text-body-sm text-on-primary/80 mb-8">Layanan pengaduan dan informasi (Kring Pajak) beroperasi Senin-Jumat pukul 08:00 - 16:00 WIB.</p>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 bg-white/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined">call</span>
                                <span class="font-bold text-title-md">1 500 200</span>
                            </div>
                            <div class="flex items-center gap-4 bg-white/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined">mail</span>
                                <span class="text-body-sm font-medium">informasi@pajak.go.id</span>
                            </div>
                            <div class="flex items-center gap-4 bg-white/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined">chat</span>
                                <span class="text-body-sm font-medium">Live Chat via WhatsApp</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-front-layout>

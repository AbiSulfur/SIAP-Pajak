<footer class="bg-primary text-on-primary pt-12 pb-6 mt-10">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            <!-- Column 1: Brand & Info -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined filled text-white text-2xl">account_balance</span>
                    <span class="text-title-md text-white font-bold">SIAP Pajak</span>
                </div>
                <p class="text-body-sm text-white/80 mb-6 leading-relaxed">
                    Sistem Informasi Analisis & Pra-isi Pajak Penghasilan. Portal resmi pelaporan pajak warga negara Indonesia yang aman dan transparan.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all shadow-sm">
                        <span class="material-symbols-outlined text-sm">language</span>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all shadow-sm">
                        <span class="material-symbols-outlined text-sm">smart_display</span>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all shadow-sm">
                        <span class="material-symbols-outlined text-sm">share</span>
                    </a>
                </div>
            </div>
            
            <!-- Column 2: Tautan Cepat -->
            <div>
                <h4 class="text-title-sm text-white font-semibold mb-4">Tautan Cepat</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('welcome') }}" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> Beranda</a></li>
                    <li><a href="{{ route('tentang-kami') }}" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> Tentang Kami</a></li>
                    <li><a href="{{ route('layanan') }}" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> Layanan Digital</a></li>
                    <li><a href="{{ route('bantuan') }}" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> Pusat Bantuan</a></li>
                </ul>
            </div>

            <!-- Column 3: Layanan Kami -->
            <div>
                <h4 class="text-title-sm text-white font-semibold mb-4">Layanan Populer</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> e-Filing (Lapor SPT)</a></li>
                    <li><a href="#" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> e-Billing (Bayar Pajak)</a></li>
                    <li><a href="#" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> Kalkulator PPh</a></li>
                    <li><a href="#" class="text-body-sm text-white/80 hover:text-white inline-flex transition-all items-center gap-2"><span class="material-symbols-outlined text-[16px] text-white/50">chevron_right</span> Validasi NPWP (NIK)</a></li>
                </ul>
            </div>

            <!-- Column 4: Hubungi Kami -->
            <div>
                <h4 class="text-title-sm text-white font-semibold mb-4">Hubungi Kami</h4>
                <ul class="space-y-3">
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-white/60 mt-0.5 text-lg">location_on</span>
                        <span class="text-body-sm text-white/90 leading-relaxed">Kantor Pusat DJP<br><span class="text-white/70">Jl. Gatot Subroto No.40-42, Jakarta 12190</span></span>
                    </li>
                    <li class="flex gap-3 items-center">
                        <span class="material-symbols-outlined text-white/60 text-lg">call</span>
                        <div>
                            <span class="text-body-sm text-white/90 font-medium">Kring Pajak 1 500 200</span>
                        </div>
                    </li>
                    <li class="flex gap-3 items-center">
                        <span class="material-symbols-outlined text-white/60 text-lg">mail</span>
                        <div>
                            <span class="text-body-sm text-white/90 font-medium">informasi@pajak.go.id</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-6 border-t border-white/20 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-label-md text-white/70 flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">copyright</span>
                {{ date('Y') }} Direktorat Jenderal Pajak. Hak Cipta Dilindungi.
            </div>
            <div class="flex gap-6">
                <a href="#" class="text-label-md text-white/70 hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="text-label-md text-white/70 hover:text-white transition-colors">Syarat & Ketentuan</a>
                <a href="#" class="text-label-md text-white/70 hover:text-white transition-colors">Peta Situs</a>
            </div>
        </div>
    </div>
</footer>

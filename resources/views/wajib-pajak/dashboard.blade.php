
<x-layouts.app :sidebarActive="'dashboard'">
    <x-slot:title>Dashboard</x-slot:title>

    <!-- Welcome Banner -->
    <div class="bg-primary-container rounded-lg p-8 mb-8 relative overflow-hidden">
        <div class="absolute right-0 top-0 w-1/3 h-full bg-surface-tint opacity-20 transform -skew-x-12 origin-top-right"></div>
        <div class="relative z-10">
            <h1 class="text-headline-lg text-on-primary mb-2">Selamat Datang, {{ $user->name }}</h1>
            <p class="text-body-md text-on-primary opacity-80 mb-4">{{ $user->email }}</p>
            <div class="flex items-start gap-2 bg-white/10 backdrop-blur-sm rounded px-4 py-3 max-w-xl">
                <div class="w-1 h-full bg-tertiary-container rounded-full self-stretch"></div>
                <p class="text-body-sm text-on-primary opacity-90">Pastikan Anda melaporkan SPT Tahunan sebelum tanggal 31 Maret untuk menghindari denda keterlambatan.</p>
            </div>
        </div>
        <!-- Document illustration -->
        <div class="absolute right-8 top-6 hidden lg:block">
            <div class="w-40 h-52 bg-white/10 rounded-lg p-4 relative">
                <div class="space-y-2">
                    <div class="h-2 bg-white/20 rounded w-3/4"></div>
                    <div class="h-2 bg-white/20 rounded w-full"></div>
                    <div class="h-2 bg-white/20 rounded w-5/6"></div>
                </div>
                <div class="absolute -bottom-3 -right-3 w-10 h-10 bg-secondary rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-secondary text-lg">check</span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column (2/3) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Status SPT -->
            <div class="card">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-title-md text-text-main font-semibold">Status SPT Tahunan</h2>
                    @if(!$latestSpt)
                        <span class="chip chip-warning">
                            <span class="material-symbols-outlined text-sm">warning</span>
                            Belum Dilaporkan
                        </span>
                    @elseif($latestSpt->status === 'pra_isi')
                        <span class="chip chip-info">
                            <span class="material-symbols-outlined text-sm">draft</span>
                            Draft (Belum Selesai)
                        </span>
                    @elseif(in_array($latestSpt->status, ['dikonfirmasi', 'dikoreksi']))
                        <span class="chip chip-success">
                            <span class="material-symbols-outlined text-sm">check_circle</span>
                            Sedang Diproses Admin
                        </span>
                    @elseif($latestSpt->status === 'koreksi_ditolak')
                        <span class="chip chip-error">
                            <span class="material-symbols-outlined text-sm">error</span>
                            Koreksi Ditolak
                        </span>
                    @endif
                </div>
                <div class="bg-surface rounded px-4 py-3 mb-4">
                    <p class="text-body-sm text-text-main">Tahun Pajak <strong>{{ $latestSpt ? $latestSpt->tahun_pajak : date('Y') - 1 }}</strong></p>
                    <p class="text-body-sm text-text-muted">Batas waktu pelaporan: 31 Maret {{ $latestSpt ? $latestSpt->tahun_pajak + 1 : date('Y') }}</p>
                </div>
                
                @if(!$latestSpt)
                    <p class="text-body-sm text-text-muted mb-6">Anda belum menyampaikan Surat Pemberitahuan Tahunan. Silakan siapkan dokumen pendukung dan mulai pelaporan sekarang.</p>
                    <a href="{{ route('wajib-pajak.lapor-spt') }}" class="btn-primary text-body-sm" wire:navigate>
                        <span>Lapor Sekarang</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                @elseif($latestSpt->status === 'koreksi_ditolak')
                    <p class="text-body-sm text-error mb-6">Laporan Anda ditolak oleh admin dengan alasan: <strong>Segera periksa riwayat status atau hubungi admin.</strong></p>
                    <div class="flex gap-4">
                        <a href="{{ route('wajib-pajak.lapor-spt') }}" class="btn-primary text-body-sm" wire:navigate>
                            <span>Perbaiki Laporan</span>
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                        <button class="btn-secondary text-body-sm">
                            <span class="material-symbols-outlined text-sm">support_agent</span>
                            Hubungi Admin
                        </button>
                    </div>
                @else
                    <p class="text-body-sm text-text-muted mb-6">Laporan SPT Anda sudah kami terima dan sedang dalam antrean pemrosesan oleh pengurus pajak.</p>
                @endif
            </div>

            <!-- Riwayat Laporan Terakhir -->
            <div class="card">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-title-md text-text-main font-semibold">Riwayat Laporan Terakhir</h2>
                    <a href="{{ route('wajib-pajak.riwayat') }}" class="text-body-sm text-primary hover:underline flex items-center gap-1" wire:navigate>
                        Lihat Semua <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </a>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Tahun Pajak</th>
                            <th>Jenis Formulir</th>
                            <th>Tanggal Lapor</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($riwayat as $item)
                        <tr>
                            <td class="font-tabular">{{ $item->tahun_pajak }}</td>
                            <td>1770 S</td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                @if(in_array($item->status, ['dikonfirmasi', 'dikoreksi']))
                                    <span class="chip chip-success">● Diproses</span>
                                @elseif($item->status === 'koreksi_ditolak')
                                    <span class="chip chip-error">● Ditolak</span>
                                @else
                                    <span class="chip chip-info">● Draft</span>
                                @endif
                            </td>
                            <td>
                                <button class="text-primary hover:text-primary-container transition-colors">
                                    <span class="material-symbols-outlined text-xl">download</span>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-text-muted">Belum ada riwayat laporan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Column (1/3) -->
        <div class="space-y-8">
            <!-- Total Pajak Dibayar -->
            <div class="card">
                <div class="flex items-center gap-3 mb-2">
                    <span class="material-symbols-outlined text-primary text-2xl">receipt_long</span>
                    <div>
                        <p class="text-label-md text-text-muted uppercase tracking-wider">Total Pajak Terutang (All Time)</p>
                        <p class="text-headline-lg text-primary font-tabular">Rp {{ number_format($totalPajak, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            <!-- Pengumuman -->
            <div class="card">
                <h3 class="text-label-md uppercase tracking-wider text-text-muted mb-4">Pengumuman</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">campaign</span>
                        <div>
                            <p class="text-body-sm text-text-main font-medium">Pemadaman Sistem Sementara</p>
                            <p class="text-label-md text-text-muted">10 Feb 2024</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">menu_book</span>
                        <div>
                            <p class="text-body-sm text-text-main font-medium">Panduan E-Filing Terbaru</p>
                            <p class="text-label-md text-text-muted">05 Feb 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

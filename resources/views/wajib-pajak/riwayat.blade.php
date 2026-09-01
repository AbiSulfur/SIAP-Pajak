<x-layouts.app :sidebarActive="'riwayat'">
    <x-slot:title>Riwayat Laporan</x-slot:title>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-headline-lg text-primary mb-2">Riwayat Laporan</h1>
        <p class="text-body-md text-text-muted">Pantau status dan unduh bukti penerimaan elektronik (BPE) SPT Anda.</p>
    </div>

    <!-- Filters -->
    <div class="card mb-6">
        <div class="flex flex-wrap items-end gap-4">
            <div>
                <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Tahun Pajak</label>
                <select class="input-field w-44">
                    <option>Semua Tahun</option>
                    <option>2024</option>
                    <option>2023</option>
                    <option>2022</option>
                    <option>2021</option>
                </select>
            </div>
            <div>
                <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Status</label>
                <select class="input-field w-44">
                    <option>Semua Status</option>
                    <option>Selesai</option>
                    <option>Diproses</option>
                    <option>Draft</option>
                </select>
            </div>
            <div class="flex-1">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input type="text" placeholder="Cari nomor tanda terima..." class="input-field pl-10 w-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="card">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Tahun Pajak</th>
                    <th>Jenis SPT</th>
                    <th>Tanggal Lapor</th>
                    <th>Nomor Tanda Terima</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-tabular font-medium">2023</td>
                    <td>SPT Tahunan 1770 S</td>
                    <td>15 Mar 2024</td>
                    <td class="font-tabular">BPE-0987654321</td>
                    <td><span class="chip chip-success">● Selesai</span></td>
                    <td>
                        <button class="btn-secondary text-label-md py-1.5 px-3">
                            <span class="material-symbols-outlined text-sm">download</span>
                            Unduh BPE
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular font-medium">2023</td>
                    <td>Pembetulan SPT 1</td>
                    <td>20 Mar 2024</td>
                    <td class="font-tabular">BPE-0987654322</td>
                    <td><span class="chip chip-info">● Diproses</span></td>
                    <td>
                        <span class="text-body-sm text-text-muted flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">hourglass_top</span>
                            Menunggu
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular font-medium">2022</td>
                    <td>SPT Tahunan 1770 S</td>
                    <td>10 Mar 2023</td>
                    <td class="font-tabular">BPE-1122334455</td>
                    <td><span class="chip chip-success">● Selesai</span></td>
                    <td>
                        <button class="btn-secondary text-label-md py-1.5 px-3">
                            <span class="material-symbols-outlined text-sm">download</span>
                            Unduh BPE
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular font-medium">2024</td>
                    <td>Masa PPN</td>
                    <td>-</td>
                    <td>-</td>
                    <td><span class="chip chip-neutral">● Draft</span></td>
                    <td>
                        <a href="#" class="text-body-sm text-primary hover:underline flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">edit</span>
                            Lanjutkan
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6 pt-4 border-t border-border-subtle">
            <p class="text-body-sm text-text-muted">Menampilkan 1 - 4 dari 4 laporan</p>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary text-body-sm font-semibold">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</x-layouts.app>

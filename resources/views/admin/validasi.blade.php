<x-layouts.admin :sidebarActive="'report-validation'">
    <x-slot:title>Validasi Laporan SPT</x-slot:title>

    <!-- Page Header -->
    <div class="flex items-start justify-between mb-8">
        <div>
            <h1 class="text-headline-lg text-primary mb-2">Validasi Laporan SPT</h1>
            <p class="text-body-md text-text-muted">Review and approve pending tax return submissions.</p>
        </div>
        <div class="card px-5 py-3 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-2xl">fact_check</span>
            <div>
                <p class="text-label-md text-text-muted uppercase tracking-wider">Total Antrean Validasi</p>
                <p class="text-headline-lg text-primary font-tabular">142</p>
            </div>
        </div>
    </div>

    <!-- Table Card -->
    <div class="card">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-title-md text-text-main font-semibold">Pending Reviews</h2>
            <div class="flex gap-2">
                <button class="btn-secondary text-body-sm py-1.5 px-4">Filter</button>
                <button class="btn-secondary text-body-sm py-1.5 px-4">Sort</button>
            </div>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Nomor Tanda Terima</th>
                    <th>Jenis SPT</th>
                    <th>Nama Wajib Pajak</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-tabular font-medium">BPE-2023-10045</td>
                    <td><span class="chip chip-neutral">SPT Tahunan Badan</span></td>
                    <td>PT. Nusantara Gemilang</td>
                    <td>24 Oct 2023, 09:15</td>
                    <td><button class="btn-primary text-label-md py-1.5 px-4">Tinjau</button></td>
                </tr>
                <tr>
                    <td class="font-tabular font-medium">BPE-2023-10046</td>
                    <td><span class="chip chip-neutral">SPT Masa PPN</span></td>
                    <td>CV. Makmur Jaya Abadi</td>
                    <td>24 Oct 2023, 10:30</td>
                    <td><button class="btn-primary text-label-md py-1.5 px-4">Tinjau</button></td>
                </tr>
                <tr>
                    <td class="font-tabular font-medium">BPE-2023-10047</td>
                    <td><span class="chip chip-neutral">SPT Tahunan OP</span></td>
                    <td>Budi Santoso</td>
                    <td>24 Oct 2023, 11:45</td>
                    <td><button class="btn-primary text-label-md py-1.5 px-4">Tinjau</button></td>
                </tr>
                <tr>
                    <td class="font-tabular font-medium">BPE-2023-10048</td>
                    <td><span class="chip chip-neutral">SPT Masa PPh 21</span></td>
                    <td>PT. Teknologi Cipta</td>
                    <td>24 Oct 2023, 13:20</td>
                    <td><button class="btn-primary text-label-md py-1.5 px-4">Tinjau</button></td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6 pt-4 border-t border-border-subtle">
            <p class="text-body-sm text-text-muted">Showing 1 to 4 of 142 entries</p>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary text-body-sm font-semibold">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors text-body-sm">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors text-body-sm">3</button>
                <span class="text-text-muted text-body-sm px-1">...</span>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors text-body-sm">36</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</x-layouts.admin>

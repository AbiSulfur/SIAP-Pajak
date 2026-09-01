<x-layouts.admin :sidebarActive="'user-management'">
    <x-slot:title>Manajemen Data Wajib Pajak</x-slot:title>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-headline-lg text-primary mb-2">Manajemen Data Wajib Pajak</h1>
        <p class="text-body-md text-text-muted">Kelola informasi, status, dan akses Wajib Pajak terdaftar dalam sistem SIAP Pajak.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
        <!-- Filter Panel -->
        <div class="lg:col-span-3">
            <div class="card">
                <div class="flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-primary">filter_list</span>
                    <h2 class="text-title-md text-text-main font-semibold">Filter Pencarian</h2>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Nomor Pokok Wajib Pajak (NPWP)</label>
                        <input type="text" placeholder="Masukkan 15/16 digit NI..." class="input-field">
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Nama Wajib Pajak</label>
                        <input type="text" placeholder="Ketik nama entitas/prib..." class="input-field">
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Jenis Wajib Pajak</label>
                        <select class="input-field">
                            <option>Semua Jenis</option>
                            <option>Orang Pribadi</option>
                            <option>Badan</option>
                            <option>Bendahara</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-3 justify-center">
                    <button class="btn-secondary text-body-sm py-2 px-6">Reset</button>
                    <button class="btn-primary text-body-sm py-2 px-6">Terapkan Filter</button>
                </div>
            </div>
        </div>

        <!-- Add New WP -->
        <div class="bg-secondary rounded-lg p-6 text-on-secondary flex flex-col justify-between">
            <div>
                <h3 class="text-title-md font-bold mb-2">Tambah Wajib Pajak</h3>
                <p class="text-body-sm opacity-90 mb-4">Registrasi manual Wajib Pajak baru ke dalam basis data SIAP Pajak.</p>
            </div>
            <button class="bg-surface-white text-secondary font-semibold text-body-sm py-2.5 px-4 rounded flex items-center justify-center gap-2 hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-lg">add_circle</span>
                Registrasi Baru
            </button>
        </div>
    </div>

    <!-- Data Table -->
    <div class="card">
        <table class="data-table">
            <thead>
                <tr>
                    <th>NPWP</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis WP</th>
                    <th>Status Akun</th>
                    <th>Terakhir Login</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-tabular">01.234.567.8-901.000</td>
                    <td class="font-medium">PT MAJU JAYA BERSAMA</td>
                    <td>Badan</td>
                    <td><span class="chip chip-success">Aktif</span></td>
                    <td>12 Okt 2023, 08:45 WIB</td>
                    <td>
                        <button class="text-primary hover:text-primary-container transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular">98.765.432.1-123.000</td>
                    <td class="font-medium">BUDI SANTOSO</td>
                    <td>Orang Pribadi</td>
                    <td><span class="chip chip-success">Aktif</span></td>
                    <td>10 Okt 2023, 14:20 WIB</td>
                    <td>
                        <button class="text-primary hover:text-primary-container transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular">45.678.901.2-345.000</td>
                    <td class="font-medium">CV KARYA CIPTA</td>
                    <td>Badan</td>
                    <td><span class="chip chip-error">Non-Aktif</span></td>
                    <td>01 Sep 2023, 09:15 WIB</td>
                    <td>
                        <button class="text-primary hover:text-primary-container transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular">11.222.333.4-555.000</td>
                    <td class="font-medium">DINAS PENDIDIKAN KOTA</td>
                    <td>Bendahara</td>
                    <td><span class="chip chip-success">Aktif</span></td>
                    <td>12 Okt 2023, 11:30 WIB</td>
                    <td>
                        <button class="text-primary hover:text-primary-container transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="font-tabular">55.666.777.8-999.000</td>
                    <td class="font-medium">SITI AMINAH</td>
                    <td>Orang Pribadi</td>
                    <td><span class="chip chip-success">Aktif</span></td>
                    <td>11 Okt 2023, 16:45 WIB</td>
                    <td>
                        <button class="text-primary hover:text-primary-container transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6 pt-4 border-t border-border-subtle">
            <p class="text-body-sm text-text-muted">Menampilkan 1 hingga 5 dari 1,240 Wajib Pajak</p>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors" disabled>
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary text-body-sm font-semibold">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors text-body-sm">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors text-body-sm">3</button>
                <span class="text-text-muted text-body-sm px-1">...</span>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors text-body-sm">124</button>
                <button class="w-8 h-8 flex items-center justify-center rounded text-text-muted hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</x-layouts.admin>

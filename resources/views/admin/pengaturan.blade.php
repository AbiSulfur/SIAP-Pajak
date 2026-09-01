<x-layouts.admin :sidebarActive="'system-settings'">
    <x-slot:title>Pengaturan Sistem</x-slot:title>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-headline-lg text-primary mb-2">Pengaturan Sistem</h1>
        <p class="text-body-md text-text-muted">Konfigurasi parameter inti, batas waktu pelaporan, dan pengaturan keamanan portal.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column (2/3) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Parameter Pajak -->
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">calculate</span>
                    <h2 class="text-title-md text-text-main font-semibold">Parameter Pajak & PTKP</h2>
                </div>
                
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">PTKP Dasar (TK/0)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-body-sm text-text-muted">Rp</span>
                            <input type="text" value="54.000.000" class="input-field pl-9 font-tabular">
                        </div>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Tanggungan Maksimal</label>
                        <select class="input-field">
                            <option>3 Orang</option>
                            <option>4 Orang</option>
                            <option>5 Orang</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Nilai per Tanggungan</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-body-sm text-text-muted">Rp</span>
                            <input type="text" value="4.500.000" class="input-field pl-9 font-tabular">
                        </div>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Tahun Pajak Aktif</label>
                        <select class="input-field">
                            <option>2024</option>
                            <option>2023</option>
                        </select>
                    </div>
                </div>
                
                <!-- Tarif Progresif Table -->
                <div class="border border-border-subtle rounded-lg overflow-hidden">
                    <table class="w-full text-left text-body-sm">
                        <thead class="bg-surface-container-low text-label-md text-text-muted uppercase tracking-wider border-b border-border-subtle">
                            <tr>
                                <th class="px-4 py-3">Lapisan Penghasilan Kena Pajak</th>
                                <th class="px-4 py-3 text-right">Tarif PPh</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border-subtle">
                            <tr>
                                <td class="px-4 py-3 font-tabular">Rp 0 - Rp 60.000.000</td>
                                <td class="px-4 py-3 text-right font-medium">5%</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 font-tabular">> Rp 60.000.000 - Rp 250.000.000</td>
                                <td class="px-4 py-3 text-right font-medium">15%</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 font-tabular">> Rp 250.000.000 - Rp 500.000.000</td>
                                <td class="px-4 py-3 text-right font-medium">25%</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 font-tabular">> Rp 500.000.000 - Rp 5.000.000.000</td>
                                <td class="px-4 py-3 text-right font-medium">30%</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 font-tabular">> Rp 5.000.000.000</td>
                                <td class="px-4 py-3 text-right font-medium">35%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 flex justify-end">
                    <button class="btn-secondary text-body-sm py-2">Edit Lapisan Tarif</button>
                </div>
            </div>

            <!-- Batas Waktu -->
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">event</span>
                    <h2 class="text-title-md text-text-main font-semibold">Batas Waktu Pelaporan</h2>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Batas Waktu WPOP</label>
                        <input type="date" value="2024-03-31" class="input-field text-text-main">
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Batas Waktu Badan</label>
                        <input type="date" value="2024-04-30" class="input-field text-text-main">
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Denda Keterlambatan WPOP</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-body-sm text-text-muted">Rp</span>
                            <input type="text" value="100.000" class="input-field pl-9 font-tabular">
                        </div>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Denda Keterlambatan Badan</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-body-sm text-text-muted">Rp</span>
                            <input type="text" value="1.000.000" class="input-field pl-9 font-tabular">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Save Actions -->
            <div class="flex justify-end gap-3">
                <button class="btn-secondary text-body-sm py-2.5 px-6">Batal</button>
                <button class="btn-primary text-body-sm py-2.5 px-6">Simpan Perubahan Sistem</button>
            </div>
        </div>

        <!-- Right Column (1/3) -->
        <div class="space-y-8">
            <!-- Security Config -->
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">security</span>
                    <h2 class="text-title-md text-text-main font-semibold">Kebijakan Keamanan</h2>
                </div>
                
                <div class="space-y-6">
                    <!-- Toggle 1 -->
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-body-sm font-medium text-text-main">Wajibkan 2FA Admin</p>
                            <p class="text-label-md text-text-muted mt-1">Semua akun admin wajib menggunakan 2FA.</p>
                        </div>
                        <!-- Toggle Switch (On) -->
                        <div class="w-11 h-6 bg-primary rounded-full relative cursor-pointer">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-1 top-1"></div>
                        </div>
                    </div>
                    
                    <!-- Toggle 2 -->
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-body-sm font-medium text-text-main">Blokir IP Luar Negeri</p>
                            <p class="text-label-md text-text-muted mt-1">Batasi akses portal admin hanya dari IP Indonesia.</p>
                        </div>
                        <!-- Toggle Switch (On) -->
                        <div class="w-11 h-6 bg-primary rounded-full relative cursor-pointer">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-1 top-1"></div>
                        </div>
                    </div>
                    
                    <!-- Toggle 3 -->
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-body-sm font-medium text-text-main">Mode Perawatan (Maintenance)</p>
                            <p class="text-label-md text-text-muted mt-1">Nonaktifkan akses publik sementara waktu.</p>
                        </div>
                        <!-- Toggle Switch (Off) -->
                        <div class="w-11 h-6 bg-surface-container-high rounded-full relative cursor-pointer border border-border-subtle">
                            <div class="w-4 h-4 bg-outline rounded-full absolute left-1 top-1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="border border-error/30 bg-error-container/30 rounded-lg p-6">
                <h3 class="text-title-md text-error font-semibold mb-2">Zona Berbahaya</h3>
                <p class="text-body-sm text-text-muted mb-4">Aksi di bawah ini dapat berdampak fatal pada sistem dan data perpajakan.</p>
                <button class="w-full bg-error hover:bg-on-error-container text-on-error font-semibold text-body-sm py-2.5 rounded transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-lg">database</span>
                    Bersihkan Data Cache Sistem
                </button>
            </div>
        </div>
    </div>
</x-layouts.admin>

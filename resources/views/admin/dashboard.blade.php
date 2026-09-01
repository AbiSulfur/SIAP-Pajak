<x-layouts.admin :sidebarActive="'overview'">
    <x-slot:title>Dashboard Admin</x-slot:title>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-headline-lg text-primary mb-2">Dashboard Admin - Ikhtisar Nasional</h1>
        <p class="text-body-md text-text-muted">Ringkasan performa dan kepatuhan sistem pelaporan pajak.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="card">
            <div class="flex items-center justify-between mb-3">
                <p class="text-label-md text-text-muted uppercase tracking-wider">Total Wajib Pajak Terdaftar</p>
                <span class="material-symbols-outlined text-primary text-xl">group</span>
            </div>
            <p class="text-display-lg text-primary font-tabular leading-none mb-1">45.2M</p>
            <p class="text-body-sm text-secondary flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">trending_up</span>
                +2.4% dari bulan lalu
            </p>
        </div>
        <div class="card">
            <div class="flex items-center justify-between mb-3">
                <p class="text-label-md text-text-muted uppercase tracking-wider">SPT Masuk (Hari Ini)</p>
                <span class="material-symbols-outlined text-primary text-xl">description</span>
            </div>
            <p class="text-display-lg text-primary font-tabular leading-none mb-1">12,450</p>
            <p class="text-body-sm text-secondary flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">trending_up</span>
                +15% dari kemarin
            </p>
        </div>
        <div class="card">
            <div class="flex items-center justify-between mb-3">
                <p class="text-label-md text-text-muted uppercase tracking-wider">Persentase Kepatuhan</p>
                <span class="material-symbols-outlined text-secondary text-xl">task_alt</span>
            </div>
            <p class="text-display-lg text-primary font-tabular leading-none mb-2">78.5%</p>
            <div class="w-full bg-surface-container-high rounded-full h-2">
                <div class="bg-primary rounded-full h-2" style="width: 78.5%"></div>
            </div>
        </div>
        <div class="card">
            <div class="flex items-center justify-between mb-3">
                <p class="text-label-md text-text-muted uppercase tracking-wider">Laporan Perlu Validasi</p>
                <span class="material-symbols-outlined text-tertiary text-xl">warning</span>
            </div>
            <p class="text-display-lg text-error font-tabular leading-none mb-1">342</p>
            <p class="text-body-sm text-text-muted">Butuh peninjauan manual segera</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column (2/3) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Chart Placeholder -->
            <div class="card">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-title-md text-text-main font-semibold">Tren Pelaporan SPT Mingguan</h2>
                    <select class="input-field w-36 py-1.5 text-body-sm">
                        <option>Bulan Ini</option>
                        <option>Bulan Lalu</option>
                        <option>3 Bulan</option>
                    </select>
                </div>
                <!-- Bar Chart Placeholder -->
                <div class="bg-surface rounded-lg p-6 h-64 flex items-end justify-around gap-3">
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="bg-primary-fixed-dim w-full rounded-t" style="height: 30%"></div>
                        <span class="text-label-md text-text-muted">Mg 1</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="bg-primary-fixed-dim w-full rounded-t" style="height: 45%"></div>
                        <span class="text-label-md text-text-muted">Mg 2</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="w-full flex flex-col gap-1" style="height: 60%">
                            <div class="bg-primary w-full rounded-t flex-1"></div>
                            <div class="bg-primary-fixed-dim w-full flex-1"></div>
                        </div>
                        <span class="text-label-md text-text-muted">Mg 3</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="w-full flex flex-col gap-1" style="height: 75%">
                            <div class="bg-primary w-full rounded-t flex-1"></div>
                            <div class="bg-primary-fixed-dim w-full flex-1"></div>
                        </div>
                        <span class="text-label-md text-text-muted">Mg 4</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="w-full flex flex-col gap-1" style="height: 90%">
                            <div class="bg-primary w-full rounded-t flex-[2]"></div>
                            <div class="bg-primary-fixed-dim w-full flex-1"></div>
                        </div>
                        <span class="text-label-md text-text-muted">Mg 5</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="w-full flex flex-col gap-1" style="height: 85%">
                            <div class="bg-error w-full rounded-t flex-1"></div>
                            <div class="bg-primary w-full flex-[2]"></div>
                            <div class="bg-primary-fixed-dim w-full flex-1"></div>
                        </div>
                        <span class="text-label-md text-text-muted">Mg 6</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="w-full flex flex-col gap-1" style="height: 70%">
                            <div class="bg-primary w-full rounded-t flex-[2]"></div>
                            <div class="bg-primary-fixed-dim w-full flex-1"></div>
                        </div>
                        <span class="text-label-md text-text-muted">Mg 7</span>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="card">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-title-md text-text-main font-semibold">Aktivitas Terbaru</h2>
                    <a href="#" class="text-body-sm text-primary hover:underline">Lihat Semua</a>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Aksi User</th>
                            <th>ID Ref</th>
                            <th>Waktu</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">upload_file</span>
                                Upload SPT Tahunan Badan
                            </td>
                            <td class="font-tabular">REQ-8921A</td>
                            <td>2 mnt lalu</td>
                            <td><span class="chip chip-success">Berhasil</span></td>
                        </tr>
                        <tr>
                            <td class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-tertiary text-lg">edit_document</span>
                                Revisi Data NPWP
                            </td>
                            <td class="font-tabular">REQ-8920B</td>
                            <td>15 mnt lalu</td>
                            <td><span class="chip chip-warning">Pending Validasi</span></td>
                        </tr>
                        <tr>
                            <td class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-lg">person_add</span>
                                Registrasi Wajib Pajak Baru
                            </td>
                            <td class="font-tabular">REQ-8919C</td>
                            <td>1 jam lalu</td>
                            <td><span class="chip chip-success">Berhasil</span></td>
                        </tr>
                        <tr>
                            <td class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-error text-lg">error</span>
                                Gagal Sinkronisasi E-Faktur
                            </td>
                            <td class="font-tabular">SYS-0042</td>
                            <td>3 jam lalu</td>
                            <td><span class="chip chip-error">Gagal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Column (1/3) -->
        <div class="space-y-8">
            <!-- Server Status -->
            <div class="card">
                <h3 class="text-title-md text-text-main font-semibold mb-4">Status Server</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 bg-secondary rounded-full"></span>
                            <span class="text-body-sm">Database Utama (JKT-01)</span>
                        </div>
                        <span class="text-body-sm text-secondary font-medium">Normal</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 bg-secondary rounded-full"></span>
                            <span class="text-body-sm">API Gateway</span>
                        </div>
                        <span class="text-body-sm text-secondary font-medium">Normal</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 bg-tertiary rounded-full"></span>
                            <span class="text-body-sm">Layanan E-Faktur</span>
                        </div>
                        <span class="text-body-sm text-tertiary font-medium">Beban Tinggi</span>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-border-subtle">
                    <p class="text-label-md text-text-muted uppercase tracking-wider mb-2">Penggunaan Storage</p>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-body-sm">Cluster A</span>
                        <span class="text-body-sm font-tabular font-medium">82%</span>
                    </div>
                    <div class="w-full bg-surface-container-high rounded-full h-2">
                        <div class="bg-primary rounded-full h-2" style="width: 82%"></div>
                    </div>
                </div>
            </div>

            <!-- System Notifications -->
            <div class="card">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-title-md text-text-main font-semibold">Notifikasi Sistem</h3>
                    <span class="bg-error text-on-error text-label-md px-2 py-0.5 rounded-full">3 Baru</span>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">schedule</span>
                        <div>
                            <p class="text-body-sm text-text-main font-medium">Jadwal Maintenance Server</p>
                            <p class="text-label-md text-text-muted">Direncanakan pada 24 Okt, 02:00 WIB. Downtime est. 2 jam.</p>
                            <p class="text-label-md text-outline mt-1">10 mnt lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-error text-lg mt-0.5">gpp_bad</span>
                        <div>
                            <p class="text-body-sm text-text-main font-medium">Percobaan Login Mencurigakan</p>
                            <p class="text-label-md text-text-muted">Terdeteksi 50+ kegagalan login dari IP 192.168.x.x.</p>
                            <p class="text-label-md text-outline mt-1">1 jam lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">cloud_done</span>
                        <div>
                            <p class="text-body-sm text-text-main font-medium">Backup Harian Selesai</p>
                            <p class="text-label-md text-text-muted">Database NASIONAL_DB_01 berhasil di-backup.</p>
                            <p class="text-label-md text-outline mt-1">4 jam lalu</p>
                        </div>
                    </div>
                </div>
                <button class="btn-secondary w-full text-body-sm py-2 mt-4">Lihat Semua Notifikasi</button>
            </div>
        </div>
    </div>
</x-layouts.admin>

<x-layouts.app :sidebarActive="'lapor-spt'">
    <x-slot:title>Lapor SPT Tahunan</x-slot:title>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-headline-lg text-primary mb-2">Lapor SPT Tahunan</h1>
        <p class="text-body-md text-text-muted">Sistem otomatis pre-fill data Anda. Silakan periksa dan konfirmasi.</p>
    </div>

    <div class="flex gap-8">
        <!-- Vertical Stepper (Left) -->
        <div class="w-64 flex-shrink-0">
            <div class="space-y-0">
                <!-- Step 1: Done -->
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-secondary text-lg">check</span>
                        </div>
                        <div class="w-0.5 h-12 bg-secondary"></div>
                    </div>
                    <div class="pb-8">
                        <p class="text-body-sm text-secondary font-semibold">1. Data Identitas</p>
                        <p class="text-label-md text-text-muted">Data pribadi wajib pajak</p>
                    </div>
                </div>
                <!-- Step 2: Active -->
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                            <div class="w-3 h-3 bg-on-primary rounded-full"></div>
                        </div>
                        <div class="w-0.5 h-12 bg-outline-variant"></div>
                    </div>
                    <div class="pb-8">
                        <p class="text-body-sm text-primary font-bold">2. Penghasilan</p>
                        <p class="text-label-md text-text-muted">Review data dari pemberi kerja</p>
                    </div>
                </div>
                <!-- Step 3: Pending -->
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 bg-surface-container-high rounded-full flex items-center justify-center text-text-muted text-body-sm font-bold">3</div>
                        <div class="w-0.5 h-12 bg-outline-variant"></div>
                    </div>
                    <div class="pb-8">
                        <p class="text-body-sm text-text-muted">3. Potongan Pajak</p>
                        <p class="text-label-md text-text-muted">PTKP dan potongan lainnya</p>
                    </div>
                </div>
                <!-- Step 4: Pending -->
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 bg-surface-container-high rounded-full flex items-center justify-center text-text-muted text-body-sm font-bold">4</div>
                    </div>
                    <div>
                        <p class="text-body-sm text-text-muted">4. Ringkasan & Konfirmasi</p>
                        <p class="text-label-md text-text-muted">Finalisasi laporan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content (Right) -->
        <div class="flex-1 space-y-6">
            <!-- Pre-fill Notice -->
            <div class="bg-primary-fixed/30 border border-primary-fixed rounded px-5 py-4 flex items-start gap-3">
                <span class="material-symbols-outlined text-primary mt-0.5">info</span>
                <div>
                    <p class="text-body-sm text-primary font-semibold">Data Pre-fill Tersedia</p>
                    <p class="text-body-sm text-text-muted">Data penghasilan Anda telah otomatis diisi berdasarkan laporan pemotongan pajak (Bukti Potong) dari pemberi kerja Anda. Silakan verifikasi kebenarannya.</p>
                </div>
            </div>

            <!-- Income Source Card -->
            <div class="card">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-2xl">business</span>
                        <div>
                            <h3 class="text-title-md text-text-main">PT. Teknologi Nusantara</h3>
                            <p class="text-body-sm text-text-muted">Pemberi Kerja Utama • NPWP: 01.234.567.8-091.000</p>
                        </div>
                    </div>
                    <span class="chip chip-success">Terverifikasi</span>
                </div>

                <div class="grid grid-cols-3 gap-6">
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Penghasilan Bruto</label>
                        <div class="input-field bg-surface-container-low font-tabular">Rp 245.000.000</div>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Pengurang Penghasilan</label>
                        <div class="input-field bg-surface-container-low font-tabular">Rp 12.250.000</div>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Penghasilan Neto</label>
                        <div class="input-field bg-surface-container-low font-tabular font-bold">Rp 232.750.000</div>
                    </div>
                </div>

                <div class="mt-4 flex justify-end">
                    <button class="btn-secondary text-body-sm py-2 px-4">
                        <span class="material-symbols-outlined text-lg">edit</span>
                        <span>Koreksi Data</span>
                    </button>
                </div>
            </div>

            <!-- Add More Income -->
            <div class="border-2 border-dashed border-border-subtle rounded-lg py-8 flex flex-col items-center justify-center text-center hover:border-primary hover:bg-primary-fixed/10 transition-colors cursor-pointer">
                <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center mb-3">
                    <span class="material-symbols-outlined text-primary text-2xl">add</span>
                </div>
                <h3 class="text-title-md text-text-main mb-1">Tambah Penghasilan Lainnya</h3>
                <p class="text-body-sm text-text-muted">Jika Anda memiliki sumber penghasilan lain selain dari pemberi kerja utama.</p>
            </div>

            <!-- Total & Next -->
            <div class="bg-primary-container rounded-lg p-6 flex items-center justify-between">
                <div>
                    <p class="text-label-md text-on-primary opacity-80 uppercase tracking-wider">Total Penghasilan Neto</p>
                    <p class="text-display-lg text-on-primary font-tabular">Rp 232.750.000</p>
                </div>
                <button class="btn-teal text-body-sm py-3 px-8">
                    <span>Simpan & Lanjutkan</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </div>
</x-layouts.app>

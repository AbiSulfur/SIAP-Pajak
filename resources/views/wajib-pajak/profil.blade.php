<x-layouts.app :sidebarActive="'profil'">
    <x-slot:title>Pengaturan Profil</x-slot:title>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-headline-lg text-primary mb-2">Pengaturan Profil</h1>
        <p class="text-body-md text-text-muted">Kelola informasi pribadi, keamanan akun, dan preferensi notifikasi Anda.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column (2/3) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Personal Information -->
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">badge</span>
                    <h2 class="text-title-md text-text-main font-semibold">Informasi Pribadi</h2>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Nama Lengkap</label>
                        <input type="text" value="Budi Santoso" class="input-field">
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">NIK / NPWP</label>
                        <div class="relative">
                            <input type="text" value="3171234567890123" class="input-field pr-10 bg-surface-container-low" readonly>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline text-lg">lock</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Email</label>
                        <input type="email" value="budi.santoso@email.com" class="input-field">
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Nomor Telepon</label>
                        <input type="text" value="+62 812-3456-7890" class="input-field">
                    </div>
                </div>
            </div>

            <!-- Preferences -->
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">tune</span>
                    <h2 class="text-title-md text-text-main font-semibold">Preferensi</h2>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Bahasa Notifikasi</label>
                        <select class="input-field">
                            <option>Bahasa Indonesia</option>
                            <option>English</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider">Format Dokumen Default</label>
                        <select class="input-field">
                            <option>PDF (Disarankan)</option>
                            <option>Excel</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button class="btn-teal text-body-sm">Simpan Perubahan</button>
            </div>
        </div>

        <!-- Right Column (1/3) -->
        <div class="space-y-8">
            <!-- Account Security -->
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">shield</span>
                    <h2 class="text-title-md text-text-main font-semibold">Keamanan Akun</h2>
                </div>
                <div class="space-y-6">
                    <div>
                        <p class="text-body-sm text-text-main font-medium">Kata Sandi</p>
                        <p class="text-label-md text-text-muted mb-3">Terakhir diubah: 3 bulan lalu</p>
                        <button class="btn-secondary w-full text-body-sm py-2">Ubah Kata Sandi</button>
                    </div>
                    <div class="border-t border-border-subtle pt-6">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-body-sm text-text-main font-medium">Autentikasi Dua Faktor (2FA)</p>
                            <span class="chip chip-success text-label-md">Aktif</span>
                        </div>
                        <p class="text-label-md text-text-muted mb-3">Meningkatkan keamanan akun Anda dengan kode verifikasi saat login.</p>
                        <button class="btn-secondary w-full text-body-sm py-2">Kelola 2FA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

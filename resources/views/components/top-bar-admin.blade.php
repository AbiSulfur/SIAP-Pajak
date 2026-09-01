<header class="bg-surface-white border-b border-border-subtle px-8 py-4 flex items-center justify-between">
    <div class="flex items-center gap-4">
        <span class="text-title-md font-semibold text-primary">SIAP Pajak Admin</span>
        <!-- Search -->
        <div class="relative hidden md:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
            <input type="text" placeholder="Cari data Wajib Pajak, NPWP, atau Laporan..."
                   class="pl-10 pr-4 py-2 w-80 border border-border-subtle rounded bg-surface-container-low text-body-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-colors" />
        </div>
    </div>

    <div class="flex items-center gap-3">
        <!-- Notification -->
        <button class="relative p-2 hover:bg-surface-container-low rounded-full transition-colors">
            <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            <span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
        </button>
        <!-- Help -->
        <button class="p-2 hover:bg-surface-container-low rounded-full transition-colors">
            <span class="material-symbols-outlined text-on-surface-variant">help</span>
        </button>
        <!-- Grid / Apps -->
        <button class="p-2 hover:bg-surface-container-low rounded-full transition-colors">
            <span class="material-symbols-outlined text-on-surface-variant">apps</span>
        </button>
        <!-- Avatar -->
        <div class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-on-primary text-label-md font-bold">
            AP
        </div>
    </div>
</header>

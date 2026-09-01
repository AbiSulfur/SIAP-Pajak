@props(['active' => ''])

<aside class="w-60 bg-surface-white border-r border-border-subtle flex flex-col min-h-screen fixed left-0 top-0 z-30">
    <!-- Brand -->
    <div class="p-6 pb-4">
        <div class="flex items-center gap-3 mb-1">
            <span class="material-symbols-outlined filled text-primary text-3xl">account_balance</span>
            <div>
                <h1 class="text-title-md text-primary leading-tight">SIAP Pajak</h1>
                <p class="text-label-md text-text-muted">Portal Resmi Perpajakan</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-3 space-y-1">
        <a href="{{ route('wajib-pajak.dashboard') }}"
           class="sidebar-link {{ $active === 'dashboard' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'dashboard' ? 'filled' : '' }}">dashboard</span>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('wajib-pajak.lapor-spt') }}"
           class="sidebar-link {{ $active === 'lapor-spt' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'lapor-spt' ? 'filled' : '' }}">description</span>
            <span>Lapor SPT</span>
        </a>
        <a href="{{ route('wajib-pajak.riwayat') }}"
           class="sidebar-link {{ $active === 'riwayat' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'riwayat' ? 'filled' : '' }}">history</span>
            <span>Riwayat</span>
        </a>
        <a href="{{ route('wajib-pajak.profil') }}"
           class="sidebar-link {{ $active === 'profil' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'profil' ? 'filled' : '' }}">person</span>
            <span>Profil</span>
        </a>
    </nav>

    <!-- Bottom section -->
    <div class="p-3 border-t border-border-subtle space-y-1">
        <a href="{{ route('wajib-pajak.lapor-spt') }}" class="btn-primary w-full text-body-sm py-2.5" wire:navigate>
            <span>Buat Laporan Baru</span>
        </a>
        <div class="mt-3 space-y-1">
            <a href="#" class="sidebar-link">
                <span class="material-symbols-outlined">help</span>
                <span>Bantuan</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="sidebar-link w-full text-error-red hover:bg-error-container">
                    <span class="material-symbols-outlined">logout</span>
                    <span>Keluar</span>
                </button>
            </form>
        </div>
    </div>
</aside>

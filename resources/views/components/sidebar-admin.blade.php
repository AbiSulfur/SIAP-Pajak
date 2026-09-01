@props(['active' => ''])

<aside class="w-60 bg-surface-white border-r border-border-subtle flex flex-col min-h-screen fixed left-0 top-0 z-30">
    <!-- Brand -->
    <div class="p-6 pb-4">
        <h1 class="text-title-md text-primary font-bold leading-tight">SIAP Pajak</h1>
        <p class="text-label-md text-text-muted">Admin Dashboard</p>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-3 space-y-1">
        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link {{ $active === 'overview' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'overview' ? 'filled' : '' }}">dashboard</span>
            <span>Overview</span>
        </a>
        <a href="{{ route('admin.manajemen-wp') }}"
           class="sidebar-link {{ $active === 'user-management' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'user-management' ? 'filled' : '' }}">group</span>
            <span>User Management</span>
        </a>
        <a href="{{ route('admin.validasi') }}"
           class="sidebar-link {{ $active === 'report-validation' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'report-validation' ? 'filled' : '' }}">fact_check</span>
            <span>Report Validation</span>
        </a>
        <a href="{{ route('admin.pengaturan') }}"
           class="sidebar-link {{ $active === 'system-settings' ? 'active' : '' }}" wire:navigate>
            <span class="material-symbols-outlined {{ $active === 'system-settings' ? 'filled' : '' }}">settings</span>
            <span>System Settings</span>
        </a>
    </nav>

    <!-- Bottom section -->
    <div class="p-3 border-t border-border-subtle">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="sidebar-link w-full text-text-muted hover:text-error-red">
                <span class="material-symbols-outlined">logout</span>
                <span>Log Out</span>
            </button>
        </form>
    </div>
</aside>

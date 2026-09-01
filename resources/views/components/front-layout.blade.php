<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'SIAP Pajak' }}</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-background text-text-main flex flex-col min-h-screen">

    <!-- Top Navigation -->
    <nav class="bg-surface-white border-b border-border-subtle sticky top-0 z-50">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center justify-between h-16">
            <a href="{{ route('welcome') }}" class="flex items-center gap-2">
                <span class="material-symbols-outlined filled text-primary">account_balance</span>
                <span class="text-title-md text-primary font-bold">SIAP Pajak</span>
            </a>
            <div class="hidden md:flex items-center gap-8 text-body-sm font-medium text-text-main">
                <a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') || request()->is('/') ? 'text-primary border-b-2 border-primary pb-0.5' : 'hover:text-primary' }} transition-colors">Beranda</a>
                <a href="{{ route('tentang-kami') }}" class="{{ request()->routeIs('tentang-kami') ? 'text-primary border-b-2 border-primary pb-0.5' : 'hover:text-primary' }} transition-colors">Tentang Kami</a>
                <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'text-primary border-b-2 border-primary pb-0.5' : 'hover:text-primary' }} transition-colors">Layanan</a>
                <a href="{{ route('bantuan') }}" class="{{ request()->routeIs('bantuan') ? 'text-primary border-b-2 border-primary pb-0.5' : 'hover:text-primary' }} transition-colors">Bantuan</a>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="text-body-sm text-text-main hover:text-primary transition-colors" wire:navigate>Login</a>
                <a href="{{ route('register') }}" class="btn-primary text-body-sm py-2 px-4" wire:navigate>Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>

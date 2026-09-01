<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'SIAP Pajak' }} - SIAP Pajak</title>
        <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-text-main antialiased min-h-screen flex flex-col bg-background">
        <!-- Main Content -->
        <main class="flex-grow flex items-center justify-center py-12 px-margin-mobile md:px-margin-desktop relative overflow-hidden">
            <!-- Institutional Background Accent -->
            <div class="absolute inset-0 z-0 bg-primary-container">
                <div class="absolute right-0 top-0 w-1/2 h-full bg-surface-tint opacity-20 transform -skew-x-12 origin-top-right hidden md:block"></div>
                <!-- Hero - Left side -->
                <div class="hidden md:flex absolute inset-0 z-0 items-center justify-start max-w-container-max mx-auto px-margin-desktop">
                    <div class="w-1/2 text-on-primary">
                        <div class="flex items-center gap-2 mb-6 opacity-80">
                            <span class="material-symbols-outlined filled">account_balance</span>
                            <span class="text-label-md uppercase tracking-wider">Portal Resmi Perpajakan</span>
                        </div>
                        <h1 class="text-display-lg mb-4">SIAP Pajak</h1>
                        <p class="text-title-md mb-2">Lapor Pajak Penghasilan Jadi Lebih Mudah</p>
                        <p class="text-body-md opacity-90">Hitung Otomatis, Tinggal Konfirmasi</p>
                    </div>
                </div>
            </div>

            <!-- Form Card (right side) -->
            <div class="relative z-10 w-full max-w-md bg-surface-white rounded-lg shadow-ambient border border-border-subtle p-8 md:p-10 ml-auto md:mr-margin-desktop">
                <!-- Mobile-only branding -->
                <div class="mb-8 text-center md:hidden">
                    <h2 class="text-headline-lg-mobile text-primary mb-2">SIAP Pajak</h2>
                    <p class="text-body-sm text-text-muted">Portal Resmi Perpajakan</p>
                </div>

                {{ $slot }}
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </body>
</html>

<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    // Redirect berdasarkan role
    /** @var \App\Models\User $user */
    $user = Auth::user();
    if ($user->role === 'admin') {
        $this->redirect(route('admin.dashboard'), navigate: true);
    } else {
        $this->redirect(route('wajib-pajak.dashboard'), navigate: true);
    }
};

?>

<div>
    <!-- Desktop Title -->
    <div class="mb-8 hidden md:block text-center">
        <h2 class="text-headline-lg text-primary mb-2">Login Portal</h2>
        <p class="text-body-sm text-text-muted">Silakan masuk menggunakan NIK atau NPWP Anda.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" class="space-y-6">
        <!-- Email / NIK Field -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="email">NIK / NPWP</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">badge</span>
                </div>
                <input wire:model="form.email" id="email" class="input-field pl-10" type="email" name="email" required autofocus autocomplete="username"
                       placeholder="Masukkan email Anda" />
            </div>
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password Field -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="password">Kata Sandi</label>
            <div class="relative" x-data="{ show: false }">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">lock</span>
                </div>
                <input wire:model="form.password" id="password" class="input-field pl-10 pr-10" :type="show ? 'text' : 'password'" type="password" name="password" required autocomplete="current-password"
                       placeholder="Masukkan kata sandi" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" @click="show = !show">
                    <span class="material-symbols-outlined text-outline hover:text-primary transition-colors" x-text="show ? 'visibility' : 'visibility_off'">visibility_off</span>
                </div>
            </div>
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input wire:model="form.remember" id="remember" type="checkbox"
                   class="rounded border-border-subtle text-primary focus:ring-primary" name="remember">
            <label for="remember" class="ml-2 text-body-sm text-text-muted">Ingat saya</label>
        </div>

        <!-- Submit -->
        <div class="pt-2">
            <button type="submit" class="btn-primary w-full text-title-md py-3">
                <span>Login</span>
                <span class="material-symbols-outlined">login</span>
            </button>
        </div>
    </form>

    <!-- Links -->
    <div class="mt-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-center">
        @if (Route::has('password.request'))
            <a class="text-body-sm text-primary hover:underline transition-colors" href="{{ route('password.request') }}" wire:navigate>
                Lupa Kata Sandi?
            </a>
        @endif
        <span class="text-outline hidden sm:inline">•</span>
        <div class="text-body-sm text-text-muted">
            Belum punya akun?
            <a class="text-primary font-bold hover:underline transition-colors" href="{{ route('register') }}" wire:navigate>Daftar Akun</a>
        </div>
    </div>
</div>

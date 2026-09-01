<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',
    'status_ptkp' => 'TK/0',
]);

$register = function () {
    $validated = $this->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        'status_ptkp' => ['required', 'in:TK/0,K/0,K/1,K/2,K/3'],
    ]);

    $validated['password'] = Hash::make($validated['password']);
    $validated['role'] = 'wajib_pajak';

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(route('wajib-pajak.dashboard'), navigate: true);
};

?>

<div>
    <!-- Desktop Title -->
    <div class="mb-8 hidden md:block text-center">
        <h2 class="text-headline-lg text-primary mb-2">Daftar Akun</h2>
        <p class="text-body-sm text-text-muted">Buat akun baru untuk mengakses layanan SIAP Pajak.</p>
    </div>

    <form wire:submit="register" class="space-y-5">
        <!-- Name -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="name">Nama Lengkap</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">person</span>
                </div>
                <input wire:model="name" id="name" class="input-field pl-10" type="text" required autofocus autocomplete="name"
                       placeholder="Masukkan nama lengkap Anda" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="email">Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">mail</span>
                </div>
                <input wire:model="email" id="email" class="input-field pl-10" type="email" required autocomplete="username"
                       placeholder="Masukkan email aktif Anda" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Status PTKP -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="status_ptkp">Status PTKP</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">family_restroom</span>
                </div>
                <select wire:model="status_ptkp" id="status_ptkp" class="input-field pl-10 appearance-none">
                    <option value="TK/0">TK/0 — Tidak Kawin, Tanpa Tanggungan</option>
                    <option value="K/0">K/0 — Kawin, Tanpa Tanggungan</option>
                    <option value="K/1">K/1 — Kawin, 1 Tanggungan</option>
                    <option value="K/2">K/2 — Kawin, 2 Tanggungan</option>
                    <option value="K/3">K/3 — Kawin, 3 Tanggungan</option>
                </select>
            </div>
            <x-input-error :messages="$errors->get('status_ptkp')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="password">Kata Sandi</label>
            <div class="relative" x-data="{ show: false }">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">lock</span>
                </div>
                <input wire:model="password" id="password" class="input-field pl-10 pr-10" :type="show ? 'text' : 'password'" type="password" required autocomplete="new-password"
                       placeholder="Minimal 8 karakter" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" @click="show = !show">
                    <span class="material-symbols-outlined text-outline hover:text-primary transition-colors" x-text="show ? 'visibility' : 'visibility_off'">visibility_off</span>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label class="block text-label-md text-text-muted mb-2 uppercase tracking-wider" for="password_confirmation">Konfirmasi Kata Sandi</label>
            <div class="relative" x-data="{ show: false }">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">lock</span>
                </div>
                <input wire:model="password_confirmation" id="password_confirmation" class="input-field pl-10 pr-10" :type="show ? 'text' : 'password'" type="password" required autocomplete="new-password"
                       placeholder="Ulangi kata sandi" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" @click="show = !show">
                    <span class="material-symbols-outlined text-outline hover:text-primary transition-colors" x-text="show ? 'visibility' : 'visibility_off'">visibility_off</span>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div class="pt-2">
            <button type="submit" class="btn-primary w-full text-title-md py-3">
                <span>Daftar Akun</span>
                <span class="material-symbols-outlined">person_add</span>
            </button>
        </div>
    </form>

    <div class="mt-6 text-center text-body-sm text-text-muted">
        Sudah punya akun?
        <a class="text-primary font-bold hover:underline transition-colors" href="{{ route('login') }}" wire:navigate>Login di sini</a>
    </div>
</div>

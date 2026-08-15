<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin Pajak',
            'email' => 'admin@pajak.local',
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Wajib Pajak A',
            'email' => 'wp@pajak.local',
            'role' => 'wajib_pajak',
            'status_ptkp' => 'K/1',
        ]);

        \App\Models\User::factory(10)->hasDataPenghasilans(rand(1, 2))->create();
    }
}

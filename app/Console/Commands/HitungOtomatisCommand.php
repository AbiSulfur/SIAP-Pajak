<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HitungOtomatisCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pph:hitung-otomatis {--tahun= : Tahun pajak (default: tahun ini)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Jalankan kalkulasi PPh untuk data yang belum dihitung';

    /**
     * Execute the console command.
     */
    public function handle(\App\Services\PPhCalculatorService $service)
    {
        $tahun = $this->option('tahun') ?? date('Y');
        $this->info("Memulai kalkulasi otomatis untuk tahun pajak $tahun...");

        // Ambil user yang punya data penghasilan di tahun tersebut
        $users = \App\Models\User::whereHas('dataPenghasilans', function ($query) use ($tahun) {
            $query->where('periode', 'like', $tahun . '%');
        })->get();

        $count = 0;
        foreach ($users as $user) {
            $service->kalkulasiOtomatis($user, $tahun);
            $count++;
        }

        $this->info("Selesai. $count user telah dikalkulasi PPh-nya.");
    }
}

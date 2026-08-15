<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaporanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pph:laporan {--tahun= : Tahun pajak (default: tahun ini)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cetak ringkasan statistik PPh ke terminal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tahun = $this->option('tahun') ?? date('Y');
        $this->info("Menyiapkan Laporan Statistik PPh Tahun $tahun...\n");

        $calculations = \App\Models\PphCalculation::where('tahun_pajak', $tahun)->get();

        $totalWp = $calculations->count();
        $totalPph = $calculations->sum('pph_terutang');

        $this->info("Total Wajib Pajak yang terhitung : $totalWp");
        $this->info("Total Potensi PPh Terutang     : Rp " . number_format($totalPph, 0, ',', '.'));

        $this->table(
            ['Status', 'Jumlah'],
            [
                ['Pra-isi', $calculations->where('status', 'pra_isi')->count()],
                ['Dikonfirmasi', $calculations->where('status', 'dikonfirmasi')->count()],
                ['Dikoreksi', $calculations->where('status', 'dikoreksi')->count()],
                ['Koreksi Ditolak', $calculations->where('status', 'koreksi_ditolak')->count()],
            ]
        );
    }
}

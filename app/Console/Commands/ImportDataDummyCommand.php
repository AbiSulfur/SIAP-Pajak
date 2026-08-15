<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

class ImportDataDummyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pph:import-data-dummy {--count=10 : Jumlah user yang akan di-generate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate data user dan data penghasilan simulasi (dummy)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = (int) $this->option('count');
        $this->info("Membuat $count user beserta data penghasilan...");

        // Nanti bisa dipanggil Factory di sini
        // \App\Models\User::factory($count)->hasDataPenghasilans(rand(1, 3))->create();

        $this->info("Data berhasil dibuat. Silakan implementasikan UserFactory dan DataPenghasilanFactory.");
    }
}

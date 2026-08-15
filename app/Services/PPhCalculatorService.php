<?php

namespace App\Services;

use App\Models\PphCalculation;
use App\Models\User;

class PPhCalculatorService
{
    /**
     * Hitung nilai PTKP berdasarkan status.
     */
    public function hitungPTKP(string $status_ptkp): int
    {
        $ptkp_map = [
            'TK/0' => 54000000,
            'K/0'  => 58500000,
            'K/1'  => 63000000,
            'K/2'  => 67500000,
            'K/3'  => 72000000,
        ];

        return $ptkp_map[$status_ptkp] ?? 54000000; // Default TK/0 jika tidak valid
    }

    /**
     * Hitung Penghasilan Kena Pajak (PKP).
     */
    public function hitungPenghasilanKenaPajak(int $total_penghasilan, int $ptkp): int
    {
        $pkp = $total_penghasilan - $ptkp;
        return max(0, $pkp); // Minimal 0, tidak boleh negatif
    }

    /**
     * Hitung PPh Terutang menggunakan tarif progresif.
     */
    public function hitungPPhProgresif(int $pkp): int
    {
        $pph = 0;

        // Lapis 1: 5% (0 - 60.000.000)
        if ($pkp > 0) {
            $taxable = min($pkp, 60000000);
            $pph += $taxable * 0.05;
            $pkp -= $taxable;
        }

        // Lapis 2: 15% (>60.000.000 - 250.000.000) (Rentang 190.000.000)
        if ($pkp > 0) {
            $taxable = min($pkp, 190000000);
            $pph += $taxable * 0.15;
            $pkp -= $taxable;
        }

        // Lapis 3: 25% (>250.000.000 - 500.000.000) (Rentang 250.000.000)
        if ($pkp > 0) {
            $taxable = min($pkp, 250000000);
            $pph += $taxable * 0.25;
            $pkp -= $taxable;
        }

        // Lapis 4: 30% (>500.000.000 - 5.000.000.000) (Rentang 4.500.000.000)
        if ($pkp > 0) {
            $taxable = min($pkp, 4500000000);
            $pph += $taxable * 0.30;
            $pkp -= $taxable;
        }

        // Lapis 5: 35% (>5.000.000.000)
        if ($pkp > 0) {
            $pph += $pkp * 0.35;
        }

        return (int) $pph;
    }

    /**
     * Kalkulasi PPh Otomatis untuk seorang user di tahun pajak tertentu.
     */
    public function kalkulasiOtomatis(User $user, int $tahun_pajak): PphCalculation
    {
        // Ambil semua data penghasilan user di tahun pajak tersebut
        $dataPenghasilans = $user->dataPenghasilans()
                                 ->where('periode', 'like', $tahun_pajak . '%')
                                 ->get();

        $total_penghasilan = $dataPenghasilans->sum('jumlah');

        $ptkp = $this->hitungPTKP($user->status_ptkp);
        $pkp = $this->hitungPenghasilanKenaPajak($total_penghasilan, $ptkp);
        $pph_terutang = $this->hitungPPhProgresif($pkp);

        // Update or create PphCalculation
        $calculation = PphCalculation::updateOrCreate(
            ['user_id' => $user->id, 'tahun_pajak' => $tahun_pajak],
            [
                'total_penghasilan' => $total_penghasilan,
                'ptkp' => $ptkp,
                'penghasilan_kena_pajak' => $pkp,
                'pph_terutang' => $pph_terutang,
                // Status tidak di-reset ke pra_isi secara paksa
            ]
        );

        return $calculation;
    }
}

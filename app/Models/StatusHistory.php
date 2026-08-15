<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['pph_calculation_id', 'status_lama', 'status_baru', 'diubah_oleh', 'keterangan'])]
class StatusHistory extends Model
{
    public function pphCalculation()
    {
        return $this->belongsTo(PphCalculation::class);
    }

    public function diubahOleh()
    {
        return $this->belongsTo(User::class, 'diubah_oleh');
    }
}

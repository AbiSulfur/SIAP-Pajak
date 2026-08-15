<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['user_id', 'tahun_pajak', 'total_penghasilan', 'ptkp', 'penghasilan_kena_pajak', 'pph_terutang', 'status'])]
class PphCalculation extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statusHistories()
    {
        return $this->hasMany(StatusHistory::class);
    }
}

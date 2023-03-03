<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspekPenilaianTeknis extends Model
{
    use HasFactory;
    protected $table = "aspek_penilaian_teknis";
    protected $primaryKey = "aspek_penilaian_teknis_id";
    protected $fillable = [
        'aspek_penilaian_teknis_id',
        'aspek_penilaian',
        'dudi_id',
    ];

    public function dudi() {
        return $this->belongsTo(Dudi::class, 'dudi_id');
    }
}

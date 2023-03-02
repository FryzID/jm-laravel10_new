<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiTeknis extends Model
{
    use HasFactory;
    protected $table = "nilai_teknis";
    protected $primaryKey = "nilai_teknis_id";
    protected $fillable = [
        'siswapkl_id',
        'aspek_penilaian_teknis_id',
        'nilai',
    ];

    public function siswapkl() {
        return $this->belongsTo(SiswaPkl::class, 'siswapkl_id');
    }
    public function aspekpenilaian() {
        return $this->belongsTo(AspekPenilaianTeknis::class, 'aspek_penilaian_teknis_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiNonteknis extends Model
{
    use HasFactory;
    protected $table = "nilai_nonteknis";
    protected $primaryKey = "nilai_nonteknis_id";
    protected $fillable = [
        'nilai_nonteknis_id',
        'siswapkl_id',
        'nilai1',
        'nilai2',
        'nilai3',
        'nilai4',
        'nilai5',
    ];

    public function siswapkl() {
        return $this->belongsTo(SiswaPkl::class, 'siswapkl_id');
    }
}

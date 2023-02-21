<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;
    protected $table = "jurnals";
    protected $primaryKey = "jurnal_id";
    protected $fillable = [
        'siswapkl_id',
        'tanggal',
        'absen_masuk',
        'absen_keluar',
        'keterangan',
        'kegiatan',
        'konfirmasi_dudi'
    ];

    public function siswapkl() {
        return $this->belongsTo(SiswaPkl::class, 'siswapkl_id');
    }
}

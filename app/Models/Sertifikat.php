<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    protected $table = "sertifikats";
    protected $primaryKey = "sertifikat_id";
    protected $fillable = [
        'siswapkl_id',
        'nama_sertifikat',
        'dokumen'
    ];

    public function siswapkl() {
        return $this->belongsTo(SiswaPkl::class, 'siswapkl_id');
    }
}

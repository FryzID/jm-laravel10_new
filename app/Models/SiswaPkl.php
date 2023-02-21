<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPkl extends Model
{
    use HasFactory;
    protected $table = "siswa_pkls";
    protected $primaryKey = "siswapkl_id";
    protected $fillable = [
        'dudi_id',
        'kelassiswa_id',
        'guru_id'
    ];

    public function dudi() {
        return $this->belongsTo(Dudi::class, 'dudi_id');
    }
    public function kelasSiswa() {
        return $this->belongsTo(KelasSiswa::class, 'kelassiswa_id');
    }
    public function guru() {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}

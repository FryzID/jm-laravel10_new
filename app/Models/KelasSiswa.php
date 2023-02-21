<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    use HasFactory;
    protected $table = "kelas_siswas";
    protected $primaryKey = "kelassiswa_id";
    protected $fillable = [
        'kelas_id',
        'siswa_id',
        'tapel_id',
    ];

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function siswa() {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    public function tapel() {
        return $this->belongsTo(Tapel::class, 'tapel_id');
    }
}

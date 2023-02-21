<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $primaryKey = "kelas_id";
    protected $fillable = [
        'jurusan_id',
        'level_kelas',
        'nama_kelas',
    ];

    public function jurusan() {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function kelasSiswa() {
        return $this->belongsTo(KelasSiswas::class, 'kelas_id');
    }
}

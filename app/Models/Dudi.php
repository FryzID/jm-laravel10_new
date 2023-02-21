<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;

class Dudi extends Model
{
    use HasFactory;
    protected $table = "dudis";
    protected $primaryKey = 'dudi_id';
    protected $fillable = [
        'kode_dudi',
        'nama_dudi',
        'username',
        'password',
        'alamat',
        'telepon',
        'jurusan_id',
    ];

    public function jurusan() {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}

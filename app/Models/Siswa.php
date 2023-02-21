<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswas";
    protected $primaryKey = "siswa_id";
    protected $fillable = [
        'nis',
        'nama_siswa',
        'username',
        'password',
    ];
}

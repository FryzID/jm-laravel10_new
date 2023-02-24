<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Jurusan;

class Dudi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 

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
        'level',
        'jurusan_id',
    ];

    public function jurusan() {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}

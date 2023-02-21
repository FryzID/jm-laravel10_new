<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humas extends Model
{
    use HasFactory;
    protected $table = "humas";
    protected $primaryKey = "humas_id";
    protected $fillable = [
        'nip',
        'nama_humas',
        'username',
        'password',
    ];
}

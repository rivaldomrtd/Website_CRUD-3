<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "Siswa";
    protected $fillable = [
        'id',
        'nama',
        'alamat',
    ];
}

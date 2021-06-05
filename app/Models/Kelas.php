<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "Kelas";
    protected $fillable = [
        'id',
        'id_siswa',
        'id_guru',
    ];
}

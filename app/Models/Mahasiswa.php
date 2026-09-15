<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'angkatan',
        'jenis_kelamin',
        'email',
        'alamat',
        'no_telepon',
        'no_ktp',
        'foto_profil',
    ];
}

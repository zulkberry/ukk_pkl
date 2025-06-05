<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama', 'nis', 'gender', 'alamat', 'kontak', 'email', 'status_lapor_pkl', 'foto'
    ];

    //function relasi antara tabel guru dengan tabel pkls one to many
    public function pkls()
    {
        return $this->hasMany(Pkl::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Industri extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'kontak',
        'email',
        'website',
        'foto',
        'bidang_usaha',
    ];

    public function pkls()
    {
        return $this->hasMany(Pkl::class);
    }
}
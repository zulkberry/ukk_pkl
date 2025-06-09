<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama',
        'nis',
        'gender',
        'alamat',
        'kontak',
        'email',
        'status',
        'foto',
    ];

    //function relasi antara tabel guru dengan tabel pkls one to many
    public function pkls()
    {
        return $this->hasMany(Pkl::class);
    }

    protected static function booted()
    {
    static::updating(function ($siswa) {
        if ($siswa->isDirty('email')) {
            \App\Models\User::where('email', $siswa->getOriginal('email'))
                ->update(['email' => $siswa->email]);
            }
        });
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'nip', 'bidang_usaha', 'alamat', 'kontak', 'email', 'website', 'foto',
    ];
}

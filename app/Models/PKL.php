<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pkl extends Model
{
    protected $fillable = [
        'industri_id',
        'siswa_id',
        'guru_id',
        'mulai',
        'selesai',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function industri()
    {
        return $this->belongsTo(Industri::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

}


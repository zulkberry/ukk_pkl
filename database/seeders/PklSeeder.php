<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pkl;

class PklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pkl::insert([
            [
                'siswa_id' => 2,
                'industri_id' => 1,
                'guru_id' => 1,
                'mulai' => '2001-01-01',
                'selesai' => '2002-01-01',
            ]
        ]);
    }
}
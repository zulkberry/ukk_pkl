<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            ['nama' => 'Budi', 'kelas' => 'XII', 'jurusan' => 'TKJ'],
            ['nama' => 'Ani', 'kelas' => 'XI', 'jurusan' => 'RPL'],
        ]);
    }
    
}

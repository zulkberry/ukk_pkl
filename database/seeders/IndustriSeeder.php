<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriSeeder extends Seeder
{
    public function run()
    {
        DB::table('industris')->insert([
            [
                'nama' => 'PT. BioRevenant Corp',
                'bidang_usaha' => 'Riset Bioteknologi & Survival Taktis',
                'alamat' => 'Jl. Mayat Hidup No. 13',
                'kontak' => '08120404',
                'email' => 'contact@biorevenant.co.zm',
                'website' => 'www.biorevenant.co.zm',
                'foto' => 'biorevenant.jpg',
            ]
        ]);
    }
}

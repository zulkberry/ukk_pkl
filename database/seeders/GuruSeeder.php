<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::insert([
            [
                'nama' => 'Goo Gunil',
                'nip' => '197512102005012003',
                'gender' => 'L',
                'alamat' => 'Bekasi, Indonesia',
                'kontak' => '081582394717',
                'email' => 'gunilham@gmail.com',
            ],
            [
                'nama' => 'Kim Jungsu',
                'nip' => '198506012011011001',
                'gender' => 'L',
                'alamat' => 'Surabaya, Indonesia',
                'kontak' => '081332248813',
                'email' => 'jungsunyangduu@gmail.com',
            ],
        ]);
    }
}
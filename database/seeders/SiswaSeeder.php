<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert([
            [
                'nama' => 'Ginanta Arya Bramantya',
                'nis' => '20401',
                'gender' => 'L',
                'alamat' => 'Lamongan, Indonesia',
                'kontak' => '08199887641',
                'email' => 'eatingbrains@gmail.com',
                'status' => false,
            ],
            [
                'nama' => 'Prana Waluya Jati',
                'nis' => '20402',
                'gender' => 'L',
                'alamat' => 'Jogja, Indonesia',
                'kontak' => '08123456789',
                'email' => 'kwacjiseokk@gmail.com',
                'status' => true,
            ],
            [
                'nama' => 'Garien Marsheel',
                'nis' => '20421',
                'gender' => 'L',
                'alamat' => 'Malang, Indonesia',
                'kontak' => '08214452210',
                'email' => 'jiseokin@gmail.com',
                'status' => false,
            ],
            [
                'nama' => 'Harrieth Jericho',
                'nis' => '20437',
                'gender' => 'L',
                'alamat' => 'Ciamik, Indonesia',
                'kontak' => '08156533244',
                'email' => 'ejeongsu@gmail.com',
                'status' => true,
            ],
        ]);
    }
}
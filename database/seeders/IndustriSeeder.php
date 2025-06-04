<?php

namespace Database\Seeders;

use App\Models\Industri;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industris = Industri::insert([
            [
                'nama' => 'PT Aksa Digital Group', 
                'bidang_usaha' => 'IT Service & Consulting',
                'alamat' => 'Jl. Wongso Permono No.26, Klidon, Sukoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581',
                'kontak' => '08982909000',
                'email' => 'aksa@gmail.com',
                'website' => 'https://aksa.id/',
            ],
            [
                'nama' => 'PT. Gamatechno Indonesia', 
                'bidang_usaha' => 'Penyedia layanan',
                'alamat' => 'Jl. Purwomartani, Karangmojo, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'kontak' => '0274-5044044',
                'email' => 'info@gamatechno.com',
                'website' => 'https://www.gamatechno.com/',
            ],
            [
                'nama' => 'CV. Karya Hidup Sentosa ', 
                'bidang_usaha' => 'Alat pertanian',
                'alamat' => 'JJl. Magelang KM.8,8, Jongke Tengah, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285',
                'kontak' => '0274-512095',
                'email' => 'quick@gmail.com',
                'website' => 'https://www.quick.co.id/',
            ],
            [
                'nama' => 'PT Murni Cahaya Pratama', 
                'bidang_usaha' => 'Cat dan Tinner',
                'alamat' => 'Jl. Kp. Lio Baru, Desa No.Km. 2, Sanja, Kec. Citeureup, Kabupaten Bogor, Jawa Barat 16810',
                'kontak' => '02187454156',
                'email' => 'cargloss@gmail.com',
                'website' => 'https://www.cargloss.co.id/',
            ],
        ]);
    }
}
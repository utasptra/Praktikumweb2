<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. Mahdi Saputra',
                'gender' => 'pria',
                'tmp_lahir' => 'jakarta',
                'tgl_lahir' => '2005-02-20',
                'kategori' => 'Umum',
                'telepon' => '0895375742208',
                'alamat' => 'jl bijaksana no 181'
            ],

            [
                'nama' => 'Dr. Andina Alexandra Tatamin',
                'gender' => 'wanita',
                'tmp_lahir' => 'makasar',
                'tgl_lahir' => '2005-01-30',
                'kategori' => 'Bidan',
                'telepon' => '089522949333',
                'alamat' => 'jl bikun no 2'
            ],
        
            [
                'nama' => 'Dr. Ahmad Rifai',
                'gender' => 'pria',
                'tmp_lahir' => 'medan',
                'tgl_lahir' => '2001-05-31',
                'kategori' => 'Spesialis',
                'telepon' => '089402749333',
                'alamat' => 'jl bintang no 6'
            ],

            [
                'nama' => 'Dr. Kurnia Mega',
                'gender' => 'pria',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '2002-08-29',
                'kategori' => 'Anastesi',
                'telepon' => '089433749733',
                'alamat' => 'jl biduan no 5'
            ],

            [
                'nama' => 'Dr. Mega',
                'gender' => 'wanita',
                'tmp_lahir' => 'Bekasi',
                'tgl_lahir' => '2004-11-29',
                'kategori' => 'Dokter gigi',
                'telepon' => '089433749733',
                'alamat' => 'jl biduan no 5'
            ],
        ]);
    }
}

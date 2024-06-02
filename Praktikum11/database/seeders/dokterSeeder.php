<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokter')->insert([
            [
                'kode' => '1',
                'nama' => 'Dr. Tirta Anugrah',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1988-03-23',
                'gender' => 'L',
                'kategori' => 'umum',
                'email' => 'Tirta@example.co.id',
                'alamat' => 'Jl. Merdeka No.1',
            ],
            [
                'kode' => '2',
                'nama' => 'Dr. Aisyah',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1992-02-02',
                'gender' => 'P',
                'kategori' => 'spesialis',
                'email' => 'Aisyah@example.co.id',
                'alamat' => 'Jl. Cinere No.2',
            ],
            [
                'kode' => '3',
                'nama' => 'Dr. Prasetyo',
                'tmp_lahir' => 'Subang',
                'tgl_lahir' => '1988-11-22',
                'gender' => 'L',
                'kategori' => 'Anestesi',
                'email' => 'Prasetyo@example.co.id',
                'alamat' => 'Jl. Thatuk No.3',
            ],
            [
                'kode' => '4',
                'nama' => 'Dr. Eko Turki',
                'tmp_lahir' => 'Minang',
                'tgl_lahir' => '1995-04-12',
                'gender' => 'L',
                'kategori' => 'Dokter Gigi',
                'email' => 'Eko@example.co.id',
                'alamat' => 'Jl. Gandul No.4',
            ],
            [
                'kode' => '5',
                'nama' => 'Dr. Maimunah',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1975-12-25',
                'gender' => 'P',
                'kategori' => 'Bidan',
                'email' => 'Maimunah@example.co.id',
                'alamat' => 'Jl. Sederhana No.5',
            ],
        ]);
    }
}

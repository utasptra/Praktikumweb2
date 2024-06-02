<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2005-05-14',
                'berat' => 60,
                'tinggi' => 175,
                'tensi' => '60/60',
                'keterangan' => 'sehat'
            ],
            [
                'tanggal' => '2005-05-14',
                'berat' => 60,
                'tinggi' => 175,
                'tensi' => '60/80',
                'keterangan' => 'kurang sehat'
            ],
        ]);
    }
}

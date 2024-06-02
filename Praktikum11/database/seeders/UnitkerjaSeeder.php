<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitkerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unitkerjas')->insert([
            [
                'nama' => 'Farida',
            ],
            [
                'nama' => 'Budi Santoso',
            ],
        ]);
    }
}

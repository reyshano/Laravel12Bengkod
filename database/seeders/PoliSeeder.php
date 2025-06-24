<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('poli')->insert([
            ['nama_poli' => 'Poli Umum'], // ID 1
            ['nama_poli' => 'Poli Gigi'],  // ID 2
            ['nama_poli' => 'Poli Anak'],  // ID 3
            // Tambahkan poli lain jika diperlukan
        ]);
    }
}
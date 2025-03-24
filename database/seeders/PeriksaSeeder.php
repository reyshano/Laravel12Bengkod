<?php

namespace Database\Seeders;

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
                'id_pasien' => 2, // Sesuaikan dengan ID pasien di tabel users
                'id_dokter' => 1, // Sesuaikan dengan ID dokter di tabel users
                'tgl_periksa' => '2025-03-20 10:00:00',
                'catatan' => 'Pasien mengalami sakit kepala.',
                'biaya_periksa' => 50000,
            ],
            [
                'id_pasien' => 2,
                'id_dokter' => 1,
                'tgl_periksa' => '2025-03-22 14:00:00',
                'catatan' => 'Keluhan batuk pilek.',
                'biaya_periksa' => 60000,
            ],
        ]);
    }
}

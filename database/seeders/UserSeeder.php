<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            // 3 Dokter
            [
                'nama' => 'Dr. Agung Hercules',
                'alamat' => 'Semarang',
                'no_hp' => '081287658365',
                'id_poli' => 1,
                'email' => 'agung.dokter1@gmail.com',
                'password' => Hash::make('dokter123'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Dr. Roy Suryo',
                'alamat' => 'Solo',
                'no_hp' => '081218467543',
                'id_poli' => 2,
                'email' => 'roy.dokter2@gmail.com',
                'password' => Hash::make('dokter123'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Dr. Sugeng Ningsih',
                'alamat' => 'Yogyakarta',
                'no_hp' => '08123450003',
                'id_poli' => 3,
                'email' => 'sugeng.dokter3@gmail.com',
                'password' => Hash::make('dokter123'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],

            // 3 Admin
            [
                'nama' => 'Budi',
                'alamat' => 'Jakarta',
                'no_hp' => '081247867784',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Bobi',
                'alamat' => 'Bekasi',
                'no_hp' => '081256847637',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Udin',
                'alamat' => 'Bogor',
                'no_hp' => '081264839765',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],

            // 3 Pasien
            [
                'nama' => 'Joko Kendil',
                'alamat' => 'Solo',
                'no_hp' => '081276489387',
                'email' => 'joko.pasien1@gmail.com',
                'password' => Hash::make('pasien123'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000001',
                'no_rm' => 'RM00001',
            ],
            [
                'nama' => 'Hanny Bintang',
                'alamat' => 'Semarang',
                'no_hp' => '081282736478',
                'email' => 'hanny.pasien2@gmail.com',
                'password' => Hash::make('pasien123'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000002',
                'no_rm' => 'RM00002',
            ],
            [
                'nama' => 'Suci Puspita',
                'alamat' => 'Tegal',
                'no_hp' => '081275493062',
                'email' => 'suci.pasien3@gmail.com',
                'password' => Hash::make('pasien123'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000003',
                'no_rm' => 'RM00003',
            ],
        ]);
    }
}

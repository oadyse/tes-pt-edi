<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodata')->insert(
            [
                [
                    'id_user' => 2,
                    'nama' => 'Sari Eka Nur Marifah',
                    'posisi' => 'Product Support',
                    'no_ktp' => '3520054806010001',
                    'tmp_lahir' => 'Magetan',
                    'tgl_lahir' => '2001-08-06',
                    'jk' => 'Perempuan',
                    'agama' => 'Islam',
                    'gol_darah' => 'O',
                    'status' => 'Belum Menikah',
                    'alamat_ktp' => 'Kawedanan, Magetan, Jawa Timur',
                    'alamat_domisili' => 'Kawedanan, Magetan, Jawa Timur',
                    'email' => 'sarieka.nm@gmail.com',
                    'no_hp' => '085784378582',
                    'close_person' => 'Willis Nurani',
                    'skills' => 'PHP, Laravel',
                    'placement' => 1,
                    'salary' => '7500000',
                ],
            ]
        );
    }
}

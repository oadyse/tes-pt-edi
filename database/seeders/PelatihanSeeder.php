<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelatihan')->insert(
            [
                [
                    'id_biodata' => 1,
                    'nama_kursus' => 'Bootcamp Fullstack Web Dev',
                    'sertifikat' => 1,
                    'tahun' => '2023',
                ],
            ]
        );
    }
}

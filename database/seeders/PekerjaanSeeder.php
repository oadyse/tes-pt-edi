<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaan')->insert(
            [
                [
                    'id_biodata' => 1,
                    'perusahaan' => 'CV Mahaka Digital',
                    'posisi' => 'Fullstack Web Developer',
                    'salary' => '2700000',
                    'tahun' => '2022',
                ],
            ]
        );
    }
}

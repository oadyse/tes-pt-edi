<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikan')->insert(
            [
                [
                    'id_biodata' => 1,
                    'jenjang' => 'Diploma',
                    'institusi' => 'Universitas Sebelas Maret',
                    'jurusan' => 'Teknik Informatika',
                    'tahun_lulus' => '2022',
                    'ipk' => '3.79',
                ],
            ]
        );
    }
}

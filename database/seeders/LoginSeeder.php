<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'email' => 'admin@gmail.com',
                    'role' => 'admin',
                    'password' => bcrypt('123456'),
                ],
                [
                    'email' => 'user@gmail.com',
                    'role' => 'user',
                    'password' => bcrypt('123456'),
                ],
            ]
        );
    }
}

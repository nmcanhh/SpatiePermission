<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name'=>'Admin',
                'email'=>'admin@role.test',
                'password'=>bcrypt('1234567890'),
                'created_at'=>now(),
            ],
            [
                'id' => 2,
                'name'=>'Content',
                'email'=>'content@role.test',
                'password'=>bcrypt('1234567890'),
                'created_at'=>now(),
            ],
            [
                'id' => 3,
                'name'=>'Writer',
                'email'=>'writer@role.test',
                'password'=>bcrypt('1234567890'),
                'created_at'=>now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'rinaldi2211',
            'email' => 'rinaldi@gmail.com',
            'password' => Hash::make('rinaldi'),
        ]);
    }
}

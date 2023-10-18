<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'politik',
            'slug' => 'politik',
        ]);

        // Tambahkan kategori lain jika diperlukan
    }
}



<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Cawapres Ganjar Pranowo Diumumkan Hari Ini, Inisial M Menguat',
            'content' => 'Teka-teki sosok calon wakil presiden (cawapres) dari Ganjar Pranowo segera terungkap. PDIP mengatakan cawapres Ganjar akan diumumkan hari ini.
            Sekjen PDIP Hasto Kristiyanto mengatakan cawapres Ganjar akan diumumkan di kantor DPP PDIP, Menteng, Jakarta Pusat, hari ini. Hasto mengatakan nama cawapres tersebut juga terpilih melalui perenungan yang mendalam oleh Ketum PDIP Megawati Soekarnoputri.

            "Pencermatan juga dilakukan cukup lama. Jadi pertemuan kalau Ibu Mega bisa dilakukan di ruang-ruang publik, jadi nggak ada sesuatu yang disembunyikan, nggak ada yang dirahasiakan," kata Hasto di kediaman Megawati Soekarnoputri, Menteng, Jakarta Pusat, Selasa (17/10/2023).',
        ]);


    }
}

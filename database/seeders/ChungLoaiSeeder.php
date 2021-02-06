<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChungLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chung_loai')->insert([
            'ten' => "Đồ gia dụng"
        ]);
        DB::table('chung_loai')->insert([
            'ten' => "Đồ điện"
        ]);
        DB::table('chung_loai')->insert([
            'ten' => "Đồ miển phí"
        ]);
        DB::table('chung_loai')->insert([
            'ten' => "Đồ văn phòng"
        ]);
    }
}

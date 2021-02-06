<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nguoi_dung')->insert([
            'ten' => "Admin",
            'email' => "nguyenduythanh77777@gmail.com",
            'password' => Hash::make('ndthanh1802'),
        ]);
    }
}

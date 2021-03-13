<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Common\Constant;

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
        DB::table('nguoi_dung')->insert(
            [
                [
                    'ten' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('ndthanh1802'),
                    'quyen' => Constant::ROLE['ADMIN']
                ],
                [
                    'ten' => 'Nguoi dung',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('ndthanh1802'),
                    'quyen' => Constant::ROLE['USER']
                ],
            ]
        );
    }
}

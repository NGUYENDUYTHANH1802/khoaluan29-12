<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loai_san_pham')->insert([
            'ten' => "Máy giặt ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "bàn ủi ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "Ti vi ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "tủ lạnh  ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "quạt điện",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy điều hòa ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy hút bụi ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "đèn điện ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy xay sinh tố ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy ảnh ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy vi tính ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "nồi cơm ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "bàn ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "ghế ",
            'id_chung_loai' => 1
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "ti vi ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "tủ lạnh",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy điều hòa ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "đèn điện ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy giặt ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy vi tính ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "nồi cơm ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "quạt điện ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy hút bụi ",
            'id_chung_loai' => 2
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "đèn điện ",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "bàn ",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "ghế ",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "nồi cơm ",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "quạt điện ",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "áo quần ",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "dép",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "giày",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "sách vở",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "chăn gối",
            'id_chung_loai' => 3
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "máy vi tính",
            'id_chung_loai' => 4
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "ghế",
            'id_chung_loai' => 4
        ]);
        DB::table('loai_san_pham')->insert([
            'ten' => "bàn",
            'id_chung_loai' => 4
        ]);
    }
}

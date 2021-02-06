<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('san_pham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('ten', 50);
            $table->char('trangthai',100);
            $table->char('hinhanh',200);
            $table->text('mota');
            $table->integer('gia');
            $table->char('sdt', 20);
            $table->longText('noidung');

            $table->unsignedBigInteger('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id')->on('nguoi_dung');

            $table->unsignedBigInteger('id_loai_san_pham');
            $table->foreign('id_loai_san_pham')->references('id')->on('loai_san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('san_pham');
    }
}

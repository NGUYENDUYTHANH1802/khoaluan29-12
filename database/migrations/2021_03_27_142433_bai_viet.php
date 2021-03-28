<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaiViet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('tieude', 200);
            $table->char('hinhanh',200);
            $table->text('mota');
            $table->longText('noidung');

            $table->unsignedBigInteger('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id')->on('nguoi_dung');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_viet');
    }
}

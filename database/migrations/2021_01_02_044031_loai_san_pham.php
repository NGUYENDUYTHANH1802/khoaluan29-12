<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoaiSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('loai_san_pham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('ten', 50);
            
            $table->unsignedBigInteger('id_chung_loai');
            $table->foreign('id_chung_loai')->references('id')->on('chung_loai');
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
        Schema::dropIfExists('loai_san_pham');
    }
}

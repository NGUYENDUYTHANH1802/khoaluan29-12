<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NguoiDung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('ten', 50);
            $table->string('email');
            $table->string('password');

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
        Schema::dropIfExists('nguoi_dung');
    }
}

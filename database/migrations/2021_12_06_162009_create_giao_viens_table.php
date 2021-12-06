<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giao_viens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('khoa_id')->unsigned();
            $table->string('ten_ho', 10)->nullable();
            $table->string('ten_dem', 10)->nullable();
            $table->string('ten', 10)->nullable();
            $table->dateTime('nam_sinh')->nullable();
            $table->string('dia_chi', 255);
            $table->string('tel', 12);
            $table->timestamps();

            $table->foreign('khoa_id')->references('id')->on('khoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giao_viens');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('khoa_hoc_id')->unsigned();
            $table->string('ten_lop', 255)->nullable();
            $table->timestamps();

            $table->foreign('khoa_hoc_id')->references('id')->on('khoa_hocs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lops');
    }
}

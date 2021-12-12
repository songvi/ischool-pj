<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuongTrinhHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuong_trinh_hocs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hoc_ky_id')->unsigned();
            $table->string('ten_chuong_trinh_hoc', 255)->nullable();
            $table->string('ghi_chu');
            $table->timestamps();

            $table->foreign('hoc_ky_id')->references('id')->on('hoc_kies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chuong_trinh_hocs');
    }
}

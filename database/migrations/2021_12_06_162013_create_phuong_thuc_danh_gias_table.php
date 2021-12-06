<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuongThucDanhGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuong_thuc_danh_gias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lop_hoc_id')->unsigned();
            $table->string('ten_diem')->nullable();
            $table->float('trong_so')->nullable();
            $table->timestamps();

            $table->foreign('lop_hoc_id')->references('id')->on('lop_hocs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuong_thuc_danh_gias');
    }
}

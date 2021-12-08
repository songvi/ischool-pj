<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemMonHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem_mon_hocs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lop_hoc_id')->unsigned();
            $table->bigInteger('sinh_vien_id')->unsigned();
            $table->bigInteger('phuong_thuc_danh_gia_id')->unsigned();
            $table->bigInteger('giao_vien_id')->unsigned();
            $table->float('diem')->nullable();
            $table->integer('version');
            $table->dateTime('ngay_cho_diem');
            $table->timestamps();

            $table->foreign('lop_hoc_id')->references('id')->on('lop_hocs');
            $table->foreign('sinh_vien_id')->references('id')->on('sinh_viens');
            $table->foreign('phuong_thuc_danh_gia_id')->references('id')->on('phuong_thuc_danh_gias');
            $table->foreign('giao_vien_id')->references('id')->on('giao_viens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diem_mon_hocs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_hocs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nganh_id')->unsigned();
            $table->string('ten_mon_hoc')->nullable();
            $table->timestamps();

            $table->foreign('nganh_id')->references('id')->on('nganhs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon_hocs');
    }
}

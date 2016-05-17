<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgPueblosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_pueblos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->timestamps();
            $table->integer('id_pueblo')->unsigned();
            $table->foreign('id_pueblo')->references('id')->on('pueblo_magicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('img_pueblos');
    }
}

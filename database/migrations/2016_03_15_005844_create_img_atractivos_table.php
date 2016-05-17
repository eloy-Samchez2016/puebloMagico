<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgAtractivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_atractivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('tamanio');
            $table->timestamps();
            $table->integer('id_turistico')->unsigned();
            $table->foreign('id_turistico')->references('id')->on('atractivo_turisticos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('img_atractivos');
    }
}

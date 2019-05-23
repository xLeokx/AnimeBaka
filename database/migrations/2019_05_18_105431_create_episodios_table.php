<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruta')->nullable();
            $table->string('title');
            $table->integer('anime_id')->unsigned();//saber el anime con el que esta relacionada esta serie
            $table->foreign('anime_id')->references('id')->on('animes');//Id para relaiconar------->RELACIONADA con los Animes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodios');
    }
}

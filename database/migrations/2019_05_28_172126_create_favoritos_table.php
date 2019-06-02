<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->Increments('id');

            $table->integer('user_id')->unsigned();// metemos ID del usuario
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->integer('anime_id')->unsigned();// metemos el ID del anime
            $table->foreign('anime_id')->references('id')->on('animes');

            

            //ya tenemos la posibilidad de que un anime favorito pertenecera a un usuario
        
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
        Schema::dropIfExists('favoritos');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Anime extends Model
{
    public function favoritos()
    {
        return $this->hasMany('App\Favorito');
    }

    public function episodios()
    {
        return $this->hasMany('App\Episodio');
    }

   
    
}

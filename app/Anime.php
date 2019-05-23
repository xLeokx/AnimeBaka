<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    public function episodios()
    {
        return $this->hasMany('App\Episodio');
    }
}

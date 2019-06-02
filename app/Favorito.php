<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Favorito extends Model
{
    public function animes()
    {
        return $this->belongsTo('App\Anime');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}

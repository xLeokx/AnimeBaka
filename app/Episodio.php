<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Builder;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Episodio extends Model
{
    public function anime()
    {
        return $this->belongsTo('App\Anime');
    }
    

}

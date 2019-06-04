<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Anime;
use App\Episodio;
use App\Favorito;
use App\User;

class AnimelistController extends Controller
{


    //PAGINA DE INICIO ENSEÑA TODOS LOS ANIMES

    public function getIndex()
    {
        $user = auth()->user()->id;
        $items[]=0;
        $arrayFavoritos = Favorito::all()->where('user_id', $user);


        foreach($arrayFavoritos as $favoritos) {
            $items[] = $favoritos->anime_id;
        }
        
        $arrayAnimesFavoritos = Anime::all()->whereIn('id', $items);
        $arrayAnimes = Anime::all();
        return view('animelist.index', array('arrayAnimesFavoritos'=> $arrayAnimesFavoritos), array('arrayAnimes'=> $arrayAnimes)  );
    }

    //ENSEÑA EL ANIME SELLECIONADO

    public function getShow($id)
    {
        $anime = Anime::findOrFail($id);
        $Episodios = Episodio::all()->where('anime_id', $id); //DB::table('episodios')->all()->where('anime_id', $id);//Episodio::where('anime_id', $id);
        return view('animelist.show', array('anime' => $anime), array('Episodios' => $Episodios) ); //importante que se llamen igual
       
    }

    
    //AÑADE NUEVO ANIME
    
    public function getCreateep($id)//episodio
    {
        $anime = Anime::findOrFail($id);
        return view('animelist.createep', array(
            'anime' => $anime
        ));
    }
    
    public function postCreate(Request $request) //añade serie
    {
        $anime = new Anime();
        $anime->title = $request->title;
        $anime->year = $request->year;
        $anime->nota = $request->nota;
        $anime->genero = $request->genero;
        $anime->director = $request->director;
        $anime->poster = $request->poster;
        $anime->synopsis = $request->synopsis;
        $anime->save();
        return redirect('/animelist');
    }
    
    
    //AÑADE NUEVO EPISODIO 

    public function getCreate()//anime
    {
        return view('animelist.create');
    }
    
    public function postCreateep(Request $request, $anime) //añade EPISODIO
    {
        $Episodio = new Episodio();
        $Episodio->title = $request->title;
        $Episodio->ruta = $request->ruta;
        $Episodio->anime_id = $anime;
        $Episodio->save();
        return redirect('animelist/show/'.$anime);
    }    

    //EDITAR SERIE

    public function getEdit($id)
    {
        $anime = Anime::findOrFail($id);
        return view('animelist.edit', array(
            'anime' => $anime
        ));
    }
    public function putEdit(Request $request, $id)
    {
        $anime = Anime::findOrFail($id);
        $anime->title = $request->title;
        $anime->year = $request->year;
        $anime->nota = $request->nota;
        $anime->genero = $request->genero;
        $anime->director = $request->director;
        $anime->poster = $request->poster;
        $anime->synopsis = $request->synopsis;
        $anime->save();
        return redirect('/animelist/show/' . $anime->id);
    }

    //EDITAR EPISODIO

    public function getEditep($id)// Recogemos informacion  y la ruta del Edit Episodio
    {
        $Episodio = Episodio::findOrFail($id);
        return view('animelist.editep', array(
            'Episodio' => $Episodio
        ));
    }

    public function putEditep(Request $request, $id)  //Con esta funcion  EDITAMOS-->EPISODIO
    {
        $Episodio = Episodio::findOrFail($id);
        $Episodio->title = $request->title;
        $Episodio->ruta = $request->ruta;
        $Episodio->save();
        return redirect('/animelist/show/' . $Episodio->anime_id);
    }

    //BORRAR EPISODIO
    public function deleteep($id)  
    {
        $anime_id = Episodio::findOrFail($id);//para perservar la ID en otra variable antes de destruirla
        $Episodio = Episodio::where('id', $id)->delete();
        return redirect('/animelist/show/' . $anime_id->anime_id);
      
    }
    

    public function viewep($id) //FUncion para mostrar el EP
    {
        $Episodio = Episodio::findOrFail($id);
        $Anime = $Episodio->anime_id;
        //anterior EP
        $Previous = Episodio::all()->where('anime_id','=', $Anime)->where('id', '<', $Episodio->id) ->sortByDesc('id')->first();
        //proximo EP
        $Next = Episodio::all()->where('anime_id','=', $Anime)->where('id', '>', $Episodio->id)->sortBy('id')->first();

        if($Previous==''){
            $Previous = Episodio::findOrFail($id);
        } 
        if($Next==''){
            $Next = Episodio::findOrFail($id);
        } 
            

        return view('/animelist/viewep', ['Episodio' => $Episodio,
        'Anime' => $Anime,
        'Previous' => $Previous,
        'Next' => $Next]);
        
        
        
      
        
    }

    //FAVORITOS ADD, DELETE

   
    public function postfav($anime_id) 
    {
        $user = auth()->user()->id;

        $existe = Favorito::all()->where('anime_id', $anime_id)->where('user_id', $user)->first();;

        //dd($existe);

        if($existe==null){
            $favoritos = new Favorito();
            $favoritos->anime_id = $anime_id;
            $favoritos->user_id = $user;
            $favoritos->save();
        }else{

            return redirect('/animelist');

        }
        
        return redirect('/animelist');
    }

    public function deletefav($id, $title)  
    {
        $user = auth()->user()->id;
       
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); 
        $fav = Favorito::all()->where('anime_id', $id)->where('user_id', $user)->first()->delete();
        //dd(Favorito::all()->where('anime_id', $id)->where('user_id', $user));
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); 
        return redirect('/animelist');
      
    }

   
    
}

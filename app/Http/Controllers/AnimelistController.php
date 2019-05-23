<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Anime;
use App\Episodio;

class AnimelistController extends Controller
{


    //PAGINA DE INICIO ENSEÑA TODOS LOS ANIMES

    public function getIndex()
    {
        $arrayAnimes = Anime::all();
        return view('animelist.index', array('arrayAnimes'=> $arrayAnimes));
    }

    //ENSEÑA EL ANIME SELLECIONADO

    public function getShow($id)
    {
        $anime = Anime::findOrFail($id);
        $Episodios = Episodio::all()->where('anime_id', $id); //DB::table('episodios')->all()->where('anime_id', $id);//Episodio::where('anime_id', $id);
        return view('animelist.show', array('anime' => $anime), array('Episodios' => $Episodios) ); //importante que se llamen igual
       
    }

    //AÑADE NUEVO EPISODIO 

    
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
    
    //AÑADE NUEVO ANIME

    public function getCreate()//anime
    {
        return view('animelist.create');
    }
    
    public function postCreateep(Request $request, $anime) //añade anime
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
        //dd($Episodio->id);
        return view('/animelist/viewep',array('Episodio' => $Episodio));//. $Episodio->id);
        //return array('Episodio' => $Episodio->id); 
    }
    
}

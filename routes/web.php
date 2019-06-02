<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});

*/



Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/', 'HomeController@index');
    
    Route::group(['prefix' => 'animelist'], function(){

        //ANIME

        Route::get('show/{id}', 'AnimelistController@getShow');

        Route::get('create', 'AnimelistController@getCreate');
        Route::post('create', 'AnimelistController@postCreate');

        Route::get('edit/{id}', 'AnimelistController@getEdit');
        Route::put('edit/{id}', 'AnimelistController@putEdit');

        //EPISODIO

        Route::get('createep/{id}', 'AnimelistController@getCreateep');//coge la ruta creacion de episodio
        Route::post('createep/{id}', 'AnimelistController@postCreateep');

        Route::get('editep/{id}', 'AnimelistController@getEditep'); //Get edit EPisodio
        Route::put('editep/{id}', 'AnimelistController@putEditep');//add informacion en BD y redirecionar

        Route::get('viewep/{id}','AnimelistController@viewep');//VER EPISODIO

        Route::get('deleteep/{id}','AnimelistController@deleteep');//Funciona *_* DELETE de EP

        //FAV

        //Route::get('/{anime_id}{user_id}','AnimelistController@postfav');
        //Route::get('/{misfav_id}{anime_id}{user_id}','AnimelistController@deletefav');
        //<a href="{{ url('/animelist/'. $misfav->id .$anime->id . $user = auth()->user()->id) }}"> <i class="glyphicon glyphicon-star" style="color:yellow"></i></a>
        //<a href="{{ url('/animelist/'.$anime->id . $user = auth()->user()->id) }}"> <i class="glyphicon glyphicon-star" style="color:black"></i></a>

        

        //INDEX

        Route::get('/', 'AnimelistController@getIndex');
        Route::put('changeRented/{id}', 'AnimelistController@changeRented'); // borrar
    });
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

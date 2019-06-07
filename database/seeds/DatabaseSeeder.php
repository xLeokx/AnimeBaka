<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Anime;
use App\User;
use App\Episodio;
use App\Favorito;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          //$this->call(UsersTableSeeder::class);
          self::seedBORRAR();

          self::seedUsers();
          $this->command->info('Tabla usuarios inicializada con datos!');
          self::seedAnime();
          $this->command->info('Tabla anime inicializada con datos!');
          self::seedEpisodios();
          $this->command->info('Tabla episodios inicializada con datos!');
          self::seedFavoritos();
          $this->command->info('Tabla FAV inicializada con datos!');
         
    }

    private static function seedBORRAR() //creamos el anime dandole los valores del array 
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); 
        Favorito::truncate();
        Anime::truncate();
        Episodio::truncate();
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); 
    }
    private static function seedAnime() //creamos el anime dandole los valores del array 
    {    
        foreach( self::$arrayAnimes as $anime ) {
            $p = new anime;
            $p->title = $anime['title'];
            $p->year = $anime['year'];
            $p->director = $anime['director'];
            $p->poster = $anime['poster'];
 	        $p->genero = $anime['genero'];
	        $p->nota = $anime['nota'];
            $p->synopsis = $anime['synopsis'];
            $p->save();
        }
    }
    private static function seedEpisodios() //creamos el Episodio dandole los valores del array 
    {

        foreach( self::$arrayEpisodios as $episodio ) {
            $p = new episodio;
            $p->title = $episodio['title'];
            $p->ruta = $episodio['ruta'];
            $p->anime_id = $episodio['anime_id'];
            $p->save();
        }
    }
    private static function seedFavoritos() 
    {
        foreach( self::$arrayFavoritos as $favorito ) {
            $p = new Favorito;
            $p->anime_id = $favorito['anime_id'];
            $p->user_id = $favorito['user_id'];
            $p->save();
        }
    }

    
    
    private static function seedUsers() //creamos el usuario
    {
        User::create([
                'name' => 'leok1',
                'email' => 'leokadmin@gmail.com',
                'password' => bcrypt('alumno'),
                'is_admin'=>true
        ]);
        User::create([
            'name' => 'leok1',
            'email' => 'leok@gmail.com',
            'password' => bcrypt('alumno'),
            'is_admin'=>false
    ]);
    }

 private static $arrayAnimes = array(
        array(
            'title' => 'Sword Art Online',
            'year' => '2012',
            'director' => 'Reki Kawahara',
            'poster' => 'https://animeflv.net/uploads/animes/covers/825.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Escapar es imposible hasta terminar el juego; un game over significaría una verdadera "muerte". 
            Sin saber la "verdad" de la siguiente generación del Multijugador Masivo Online
            , con 10 mil usuarios unidos juntos abriendo las cortinas para esta cruel batalla a muerte. 
            Participando solo en SAO, el protagonista Kirito ha aceptado inmediatamente la "verdad" de este MMO.
            Y, en el mundo del juego, un gigante castillo flotante llamado Aincrad, 
            Kirito se distinguió a si mismo como un jugador solitario. Apuntando a terminar el juego al alcanzar la planta mas alta el 
            solo continua avanzando arriesgadamente hasta que recibe una invitación a la fuerza de una guerrera y esgrimista experta, Asuna, 
            con la cual tendra que hacer equipo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        ),
        array(
            'title' => 'Dororo',
            'year' => '2019',
            'director' => 'Kazuhiro Furuhashi',
            'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
	    'genero' => 'Ficcion',
	    'nota' => '9',
            'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar el país. Al cabo del tiempo,
             nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre lo arrojó al río, pero el pequeño logró sobrevivir 
             y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru, «pequeño monstruo». Años después, con la ayuda del joven y avispado 
             Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar 
             las partes de su cuerpo.'
        )
    );

    private static $arrayEpisodios = array(
      
        array(
            'title' => 'Episodios 1',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 2',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 3',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 4',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 5',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        )

    );

    private static $arrayFavoritos = array(
      
        array(
            'user_id'=>'1',
            'anime_id' => '1'
        )
    );
    
   

}

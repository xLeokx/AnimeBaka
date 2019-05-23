<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Anime;
use App\User;
use App\Episodio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
          self::seedAnime();
          $this->command->info('Tabla anime inicializada con datos!');
          self::seedUsers();
          $this->command->info('Tabla usuarios inicializada con datos!');
          self::seedEpisodios();
          $this->command->info('Tabla episodios inicializada con datos!');
    }

      private static function seedAnime() //creamos el anime dandole los valores del array 
    {
    
        //DB::table( 'animes' )->statement('SET FOREIGN_KEY_CHECKS = 0;');
        //DB::table( 'animes' )->truncate();
        //DB::table( 'animes' )->statement('SET FOREIGN_KEY_CHECKS = 1;');
        //Anime::statement('SET FOREIGN_KEY_CHECKS = 0;');
        //Anime::truncate();//borramos todo antes de crearlo
        //Anime::statement('SET FOREIGN_KEY_CHECKS = 1;');
        
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

        //DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        //DB::table( 'episodios' )->truncate();
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // DESACTIVA revision de claves foraneas en la base de datos
        Episodio::truncate(); //borramos todo antes de crearlo PERO debemos desactivar FOREIGN KEY
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // ACTIVA revision de claves foraneas en la base de datos
        
        foreach( self::$arrayEpisodios as $episodio ) {
            $p = new episodio;
            $p->title = $episodio['title'];
            $p->ruta = $episodio['ruta'];
            $p->anime_id = $episodio['anime_id'];
            $p->save();
        }
    }
    
    private static function seedUsers() //creamos el usuario
    {
        User::truncate();//borramos todo antes de crearlo
        User::create([
                'name' => 'leok1',
                'email' => 'leok@gmail.com',
                'password' => bcrypt('alumno')
                //'is_admin'=>true
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
        )
    );

    private static $arrayEpisodios = array(
      
        array(
            'title' => 'Episodios 1 como empezar con laravel',
            'ruta' => 'app/videos',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 2 como crear rutas',
            'ruta' => 'app/videos',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 3 como relacionar datos',
            'ruta' => 'app/videos',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 4 como NO suicidarse',
            'ruta' => 'app/videos',
            'anime_id' => '1'
        ),array(
            'title' => 'Episodios 5 como NO suspender',
            'ruta' => 'app/videos',
            'anime_id' => '1'
        )

    );
    
   

}

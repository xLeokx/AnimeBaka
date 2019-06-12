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
        'synopsis' => 'Escapar es imposible hasta terminar el juego; un game over significaría una verdadera "muerte". Sin saber la "verdad" de la siguiente generación del Multijugador Masivo Online, con 10 mil usuarios unidos.'
    ),
    array(
        'title' => 'Dororo',
        'year' => '2019',
        'director' => 'Kazuhiro Furuhashi',
        'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
  'genero' => 'Ficcion',
  'nota' => '9',
        'synopsis' => 'Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios
         nació un niño deforme.'
    ),
    array(
        'title' => 'Fairy Tail',
        'year' => '2014',
        'director' => 'Hiro Mashima',
        'poster' => 'https://animeflv.net/uploads/animes/covers/3043.jpg',
  'genero' => 'Aventuras',
  'nota' => '10',
        'synopsis' => 'Fairy Tail cuenta la historia de un joven mago llamado Natsu en la búsqueda de su maestro y padre adoptivo Igneel que resulta ser un dragón. Por ello se unió a Fairy Tail'
    ),
    array(
        'title' => 'Hunter x Hunter',
        'year' => '1999',
        'director' => 'Yoshihiro Togashi',
        'poster' => 'https://animeflv.net/uploads/animes/covers/465.jpg',
  'genero' => 'Aventuras',
  'nota' => '9',
        'synopsis' => 'Gon Frecks,un niño de 12 años,vive con su tia Mito_san y su abuela en Isla Ballena,hunerfano de madre y segun su tia tambien de su padre.Un dia Gon es atacado por un oso del bosque'
    ),
    array(
        'title' => 'Dragon Ball',
        'year' => '1995',
        'director' => '	Akira Toriyama',
        'poster' => 'https://animeflv.net/uploads/animes/covers/2793.jpg',
  'genero' => 'Artes Marciales',
  'nota' => '10',
        'synopsis' => 'Goku se ha convertido en un adulto y está casado con Milk, con la que tiene un hijo llamado Gohan. En esta segunda saga de Dragon ball Goku descubrirá que no es un terricola.'
    ),
    array(
        'title' => 'One piece',
        'year' => '1997',
        'director' => 'Eiichirō Oda',
        'poster' => 'https://animeflv.net/uploads/animes/covers/7.jpg',
  'genero' => 'Aventuras',
  'nota' => '8',
        'synopsis' => 'Una historia épica de piratas, donde narra la historia de "Monkey D. Luffy" quien cuado tenia 7 años, comió accidentalmente una "Akuma no mi"(Futa del diablo) la cual le dio poderes de goma. '
    ),
    array(
        'title' => 'Naruto',
        'year' => '2014',
        'director' => 'Masashi Kishimoto',
        'poster' => 'https://animeflv.net/uploads/animes/covers/2.jpg',
  'genero' => 'Artes Marciales',
  'nota' => '9',
        'synopsis' => 'Naruto, un aprendiz de ninja de la Aldea Oculta de Konoha es un chico travieso que desea llegar a ser el Hokage de la aldea para demostrar a todos lo que vale. '
    ),
    array(
        'title' => 'Black Clover',
        'year' => '2017',
        'director' => 'Yūki Tabata',
        'poster' => 'https://animeflv.net/uploads/animes/covers/2806.jpg',
  'genero' => 'Aventuras',
  'nota' => '8',
        'synopsis' => 'La historia de Black Clover nos pone en la piel de un joven llamado Asta, el cual quiere convertirse en el mago más grande del reino. Sin embargo, hay un inconveniente: ¡no puede usar magia! Por suerte...'
    ),
    array(
        'title' => 'NANA',
        'year' => '2006',
        'director' => '	Ai Yazawa',
        'poster' => 'https://animeflv.net/uploads/animes/covers/314.jpg',
  'genero' => 'Drama',
  'nota' => '7',
        'synopsis' => 'Dos chicas de la misma edad y mismo nombre se conocieron en el tren para ir a Tokio. Sus nombres son NANA. Una de ellas es una chica que quiere ser famosa con su grupo de música y la otra quiere estar con su novio que vive en Tokio.'
    ),
    array(
        'title' => 'One Punch Man',
        'year' => '2012',
        'director' => 'ONE',
        'poster' => 'https://animeflv.net/uploads/animes/covers/3077.jpg',
  'genero' => 'Acción',
  'nota' => '9',
        'synopsis' => 'La serie está protagonizada por un héroe que ha entrenado tanto que se ha quedado calvo, y tiene tanta fuerza que puede acabar con cualquier enemigo de un solo puñetazo. Sin embargo..'
    ),
    array(
        'title' => 'Bleach',
        'year' => '2001',
        'director' => 'Tite Kubo',
        'poster' => 'https://animeflv.net/uploads/animes/covers/1.jpg',
  'genero' => 'Acción',
  'nota' => '8',
        'synopsis' => 'Kurosaki Ichigo es un estudiante de instituto de 15 años, que tiene una peculiaridad: es capaz de ver, oír y hablar con fantasmas. Pero no sabe hasta dónde puede abarcar la clasificación de espíritus, ni lo que conlleva el saberlo. Un buen día.. '
    ),
    array(
        'title' => 'Boku no Hero Academia',
        'year' => '2019',
        'director' => 'Kōhei Horikoshi',
        'poster' => 'https://animeflv.net/uploads/animes/covers/2430.jpg',
  'genero' => 'Acción',
  'nota' => '10',
        'synopsis' => 'Las personas no nacen igual. El protagonista de esta historia es uno de esos casos raros que nacen sin superpoderes, pero esto no le impedirá perseguir su sueño: ser un gran héroe como el legendario All-Might. ..'
    ),
    array(
        'title' => 'Shingeki no Kyojin',
        'year' => '2013',
        'director' => 'Hajime Isayama',
        'poster' => 'https://animeflv.net/uploads/animes/covers/999.jpg',
  'genero' => 'Acción',
  'nota' => '9',
        'synopsis' => 'La historia nos traslada a un mundo en el que la humanidad estuvo a punto de ser exterminada cientos de años atrás por los gigantes. Los gigantes son enormes, parecen no ser inteligentes y devoran seres humanos. '
    ),
    array(

'title' => 'Nanatsu no Taizai',
        'year' => '2012',
        'director' => 'Nakaba Suzuki',
        'poster' => 'https://animeflv.net/uploads/animes/covers/1620.jpg',
  'genero' => 'Aventuras',
  'nota' => '8',
        'synopsis' => 'Los “Siete Pecados Capitales”, un grupo de caballeros malignos que conspiraron para derrocar al Reino de Britania, se dice que fueron erradicados por los Caballeros Sagrados, aunque algunos dicen que aún viven... '
    ),
    array(
        'title' => 'Angel Beats',
        'year' => '2009',
        'director' => '	Jun Maeda',
        'poster' => 'https://animeflv.net/uploads/animes/covers/93.jpg',
  'genero' => 'Acción',
  'nota' => '7',
        'synopsis' => 'xiste un mundo después de la muerte, en donde las almas de las personas cuya vida fue injusta, tienen una segunda oportunidad de alcanzar la paz, y así volver a nacer. Pero la verdad es que nadie sabe muy bien como funciona..'
    ),
    array(
        'title' => 'Death Note',
        'year' => '2006',
        'director' => 'Tsugumi Ōba',
        'poster' => 'https://animeflv.net/uploads/animes/covers/10.jpg',
  'genero' => 'Policia',
  'nota' => '8',
        'synopsis' => 'Light Yagami es un excelente estudiante japonés que ha tenido una vida aburrida. Esto cambia radicalmente cuando encuentra tirado en el suelo un cuaderno conocido como Death Note (Libreta de la Muerte), un cuaderno perdido por Ryuk.'
    ),
    array(
        'title' => 'Pokemon',
        'year' => '1997',
        'director' => 'Satoshi Tajiri',
        'poster' => 'https://animeflv.net/uploads/animes/covers/944.jpg',
  'genero' => 'Aventuras',
  'nota' => '9',
        'synopsis' => 'El anime de Pokémon es uno de los pocos que es basado en un videojuego debido a la popularidad de este. La historia del anime esta centrada en un chico de 10 años llamado Ash Ketchum. Este muchacho tiene el sueño de llegar a ..'
    ),
    array(
        'title' => 'Code Geass',
        'year' => '2006',
        'director' => 'Gorō Taniguchi',
        'poster' => 'https://animeflv.net/uploads/animes/covers/29.jpg',
  'genero' => 'Ficcion',
  'nota' => '9',

'synopsis' => 'Nos situamos en una realidad alternativa, donde el Imperio de Britania ha conquistado prácticamente todo el planeta. A los países subyugados bajo su poder opresor les ha arrebatado la libertad.. '
    ),
    array(
        'title' => 'Guilty Crown',
        'year' => '2011',
        'director' => 'Tetsurō Araki',
        'poster' => 'https://animeflv.net/uploads/animes/covers/661.jpg',
  'genero' => 'Acción',
  'nota' => '7',
        'synopsis' => 'a historia se desarrolla en Tokyo, durante el año 2039, 10 años después que un virus llamado ?Lost Christmas? atacase Japón, que ahora se encuentra controlado por la organización de varias naciones llamado GHQ. '
    ),
    array(
        'title' => 'Akame ga Kill!',
        'year' => '2010',
        'director' => 'Takahiro',
        'poster' => 'https://animeflv.net/uploads/animes/covers/1127.jpg',
  'genero' => 'Acción',
  'nota' => '8',
        'synopsis' => 'La trama se produce en un instituto dirigido a la fuerza por la presidenta del consejo de estudiantes Satsuki Kiryuuin. Todo cambiará cuando Ryuuko Matoi, una estudiante de transferencia que empuña una gran espada con forma de tijera'
    )
    );

    private static $arrayEpisodios = array(
      
        array(
            'title' => 'Sworld Art Online - Mundo de espadas - Episodios 1',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - Beater - Episodios 2',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - El Reno de la Nariz roja - Episodios 3',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - El espadachin Negro - Episodios 4',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - Asesinato en la Zona Segura - Episodios 5',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - Vengador ilusorio - Episodios 6',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - La Temperatura del Corazón - Episodios 7',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - Danza de espadas Negra y Blanca - Episodios 8',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),array(
            'title' => 'Sworld Art Online - El Demonion de ojos Azules - Episodios 9',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '1'
        ),
        array(
            'title' => 'Dororo - Mundo de espadas - Episodios 1',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - Beater - Episodios 2',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - El Reno de la Nariz roja - Episodios 3',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - El espadachin Negro - Episodios 4',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - Asesinato en la Zona Segura - Episodios 5',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - Vengador ilusorio - Episodios 6',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - La Temperatura del Corazón - Episodios 7',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - Danza de espadas Negra y Blanca - Episodios 8',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        ),array(
            'title' => 'Dororo - El Demonion de ojos Azules - Episodios 9',
            'ruta' => '/media/videoplayback.mp4',
            'anime_id' => '2'
        )

    );

    private static $arrayFavoritos = array(
      
        array(
            'user_id'=>'1',
            'anime_id' => '1'
        )
    );
    
   

}

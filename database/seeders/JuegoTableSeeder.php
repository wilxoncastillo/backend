<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juego;

class JuegoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Juego::truncate();

 		$juego = new Juego;
        $juego->nombre = 'BAMBOO RUSH';
        $juego->url_juego ='https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es';
        $juego->descripcion = 'JUEGO BAMBOO RUSH';
        $juego->url_imagen = 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg';
        $juego->estatus = 'activo';
        $juego->save();
       
        $juego = new Juego;
        $juego->nombre = 'REELS OF WEALTH';
        $juego->url_juego ='https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es';
        $juego->descripcion = 'JUEGO REELS OF WEALTH';
        $juego->url_imagen = 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg';
        $juego->estatus = 'activo';
        $juego->save();

        $juego = new Juego;
        $juego->nombre = 'DRAGON & PHOENIX';
        $juego->url_juego ='https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es';
        $juego->descripcion = 'JUEGO DRAGON & PHOENIX';
        $juego->url_imagen = 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg';
        $juego->estatus = 'activo';
        $juego->save();

         $juego = new Juego;
        $juego->nombre = 'TAKE THE BANK';
        $juego->url_juego ='https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es';
        $juego->descripcion = 'JUEGO TAKE THE BANK';
        $juego->url_imagen = 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg';
        $juego->estatus = 'activo';
        $juego->save();

        $juego = new Juego;
        $juego->nombre = "CAISHEN'S ARRIVAL";
        $juego->url_juego ='https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es';
        $juego->descripcion = 'JUEGO CAISHEN’S ARRIVAL';
        $juego->url_imagen = 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg';
        $juego->estatus = 'activo';
        $juego->save();

        $juego = new Juego;
        $juego->nombre = 'GEMMED!';
        $juego->url_juego ='https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es';
        $juego->descripcion = 'JUEGO GEMMED!';
        $juego->url_imagen = 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg';
        $juego->estatus = 'activo';
        $juego->save();
    }
}
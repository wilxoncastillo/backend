<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $fillable = [
		'nombre',
        'url_juego',
        'descripcion',
        'url_imagen',
        'estatus',
	];

    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = strtoupper($nombre);
    }

    public function setUrlJuegoAttribute($url_juego)
    {
        $this->attributes['url_juego'] = strtolower($url_juego);
    }

    public function setUrlImagenAttribute($url_imagen)
    {
        $this->attributes['url_imagen'] = strtolower($url_imagen);
    }
}

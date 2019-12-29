<?php



namespace App;



use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Servicio extends Authenticatable

{  

    protected $table = "servicios";

    protected $fillable = [

        'titulo', 'subtitulo', 'seccion', 'orden', 'imagen', 'contenido' ,'imagen2','imagen3','imagen4','imagen5',

    ];

}


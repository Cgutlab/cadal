<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Slider extends Authenticatable
{  
    protected $table = "sliders";
    protected $fillable = [
        'imagen', 'titulo', 'subtitulo', 'orden', 'seccion'
    ];
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Subfamilia extends Authenticatable
{  
    protected $table = "subfamilias";
    protected $fillable = [
        'titulo', 'imagen', 'orden', 'id_familia'
    ];
}

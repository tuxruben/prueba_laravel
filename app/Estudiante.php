<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
      protected $table = 'estudiante';
      protected $fillable = ['nombre', 'apellido','edad', 'email', 'telefono', 'grupo_id'];
    //
}

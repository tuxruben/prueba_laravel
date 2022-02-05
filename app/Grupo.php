<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';
    protected $fillable = ['semestre', 'grupo','turno'];
     public function ModeloEstudiante()
    {
        return $this->hasMany('App\Estudiante);
    }
}

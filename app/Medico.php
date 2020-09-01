<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public function especialidades()
    {
        return $this->belongsToMany(Especialidade::class, 'medico_especialidade', 'medico_id');
    }
}

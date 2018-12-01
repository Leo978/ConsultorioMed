<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    
    public function pacientes()
    {
        return $this->belongsToMany(Materia::class)
            ->withPivot('cita', 'doctor');
    }
}

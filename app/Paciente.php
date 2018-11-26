<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
	protected $fillable = ['codigo', 'nombre', 'direccion', 'num_tel', 'edad'];
	public $timestamps = false;

    public function pacientes()
    {
    	return $this->belongsToMany(Paciente::class)->withPivot('cita', 'doctor');
    }
}

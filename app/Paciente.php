<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
	protected $fillable = ['codigo', 'nombre', 'direccion', 'num_tel', 'edad'];
	public $timestamps = false;

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function doctors()
    {
    	return $this->belongsToMany(Paciente::class)->withPivot('cita', 'doctor');
    }
}

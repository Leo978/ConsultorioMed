<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
    	$pacientes = Paciente::all();
        return view('doctors.doctorIndex', compact('pacientes'));
    }

    public function create()
    {
    	return view('doctors.doctorVista');
    }
}

<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
    	return view('doctors.doctorIndex');
    }

    public function create()
    {
    	return view('doctors.doctorVista');
    }
}

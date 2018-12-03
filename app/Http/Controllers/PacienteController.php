<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pacientes = Paciente::all();
        //return view('pacientes.pacienteIndex', compact('pacientes'));

        
        $pacientes = Paciente::all();
        return view('pacientes.pacienteIndex', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.pacienteReg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'codigo' => 'required',
          'nombre' => 'required',
          'direccion' => 'required',
          'num_tel' => 'required',
          'edad' => 'required'
        ]);

        Paciente::create($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $pacientum)
    {
        /*return view('paciente.pacienteChop', conpact('pacientes'));*/
        //$pacientes = Paciente::all->pluck('nombre', 'id')->toArray();
//        $pacientes = Paciente::all()->pluck('id')->toArray();

        return view('pacientes.pacienteShow')->with(['paciente' => $pacientum]);/*
        return view('pacientes.pacienteShow', compact('pacienteso'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $pacientum)
    {
        return view('pacientes.pacienteReg')->with(['paciente' => $pacientum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $pacientum)
    {
        $request->validate([
          'codigo' => 'required',
          'nombre' => 'required',
          'direccion' => 'required',
          'num_tel' => 'required',
          'edad' => 'required'
        ]);
        
        Paciente::where('id', $pacientum->id)->update($request->except('_token', '_method'));
        return redirect()->route('paciente.show', $pacientum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $pacientum)
    {
        $pacienteso->delete();
        return redirect()->route('paciente.index');
    }
}

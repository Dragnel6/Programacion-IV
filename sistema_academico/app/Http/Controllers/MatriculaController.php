<?php

namespace App\Http\Controllers;

use App\Models\Matricula; 
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//GET
    {
        //select * from alumnos;
        return matricula::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//POST
    {
        //insert into matriculass...
        Matricula::create($request->all());
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Matricula $matricula)//GET
    {
        //seelct * from matricula where idMatricula=?
        return $matricula;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula)//PUT
    {
        //update matriculass set ? where id=?
       // $matricula->update($request->all(), $request->all());
        $matricula::where('idMatricula', $request['idMatricula'])->update([
            'alumno'=>$request['alumno'],
          'fecha'=>$request['fecha'],
          'pago'=>$request['pago'],
          'comprobante'=>$request['comprobante']
        ]);      
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Matricula $matricula)//DELETE
    {
        //delete alumnos from alumnos where id=? x
        //delete alumnos from alumnos where idAlumno=?
        //$alumno->delete();
        $matricula::where('idMatricula', $request['idMatricula'])->delete();
        return response()->json(['msg'=>'ok'], 200);
    }
}
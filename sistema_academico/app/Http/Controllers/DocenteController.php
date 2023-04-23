<?php

namespace App\Http\Controllers;

use App\Models\Docente; 
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//GET
    {
        //select * from alumnos;
        return docente::get();
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
        //insert into docentess...
        Docente::create($request->all());
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)//GET
    {
        //seelct * from docente where idDocente=?
        return $docente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)//PUT
    {
        //update docentess set ? where id=?
       // $docente->update($request->all(), $request->all());
        $docente::where('idDocente', $request['idDocente'])->update([
          'codigo'=>$request['codigo'],
          'nombre'=>$request['nombre']
        ]);      
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Docente $docente)//DELETE
    {
        //delete alumnos from alumnos where id=? x
        //delete alumnos from alumnos where idAlumno=?
        //$alumno->delete();
        $docente::where('idDocente', $request['idDocente'])->delete();
        return response()->json(['msg'=>'ok'], 200);
    }
}

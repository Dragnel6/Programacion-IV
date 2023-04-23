<?php

namespace App\Http\Controllers;

use App\Models\Materia; 
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//GET
    {
        //select * from materias;
        return materia::get();
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
        //insert into materias...
        Materia::create($request->all());
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)//GET
    {
        //seelct * from materia where idMateria=?
        return $materia;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)//PUT
    {
        //update materias set ? where id=?
       // $materia->update($request->all(), $request->all());
        $materia::where('idMateria', $request['idMateria'])->update([
          'codigo'=>$request['codigo'],
          'nombre'=>$request['nombre'],
          'uv'=>$request['uv']
        ]);      
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Materia $materia)//DELETE
    {
        //delete materias from materias where id=? x
        //delete materias from materias where idMateria=?
        //$materia->delete();
        $materia::where('idMateria', $request['idMateria'])->delete();
        return response()->json(['msg'=>'ok'], 200);
    }
}
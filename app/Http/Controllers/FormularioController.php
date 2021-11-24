<?php

namespace App\Http\Controllers;

use App\Formulario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuariosAgregar = new Formulario;
        $usuariosAgregar->nombre = $request->nombre;
        $usuariosAgregar->apellido = $request->apellido;
        $usuariosAgregar->direccion = $request->direccion;
        $usuariosAgregar->correo = $request->correo;
        $usuariosAgregar->telefono = $request->telefono;
        $usuariosAgregar->servicio = $request->servicio;
        $usuariosAgregar->save();
        return redirect()->route('home')
                        ->with('success','Gracias por su informacion.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioActualizar = App\Formulario::findOrFail($id);
        return view('editar' , compact('usuarioActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarioUpdate = App\Formulario::findOrFail($id);
        $usuarioUpdate->nombre = $request->nombre;
        $usuarioUpdate->apellido = $request->apellido;
        $usuarioUpdate->direccion = $request->direccion;
        $usuarioUpdate->correo = $request->correo;
        $usuarioUpdate->telefono = $request->telefono;
        $usuarioUpdate->servicio = $request->servicio;
        $usuarioUpdate->save();
        return back()->with('update' , 'El usuario se ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioEliminar = App\Formulario::findOrFail($id);
        $usuarioEliminar->delete();
        return back()->with('eliminar' , 'El usuario se ha eliminado correctamente');
    }
}

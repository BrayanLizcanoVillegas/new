<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Formulario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulario=App\Formulario::all();
        return view('usuarios',['usuarios'=> $formulario]);
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
        return redirect()->route('usuarios')
                        ->with('success','Gracias por su informacion.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}

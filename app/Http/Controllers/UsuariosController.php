<?php

namespace App\Http\Controllers;

use App\Usuarios;
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
        $usuarios=App\Usuarios::all();
        return view('usuarios', ['usuarios'=> $usuarios]);
    }

    public function index2()
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
        $usuariosAgregar = new Usuarios;
        $usuariosAgregar->nombre = $request->nombre;
        $usuariosAgregar->apellido = $request->apellido;
        $usuariosAgregar->direccion = $request->direccion;
        $usuariosAgregar->correo = $request->correo;
        $usuariosAgregar->contrasena = $request->contrasena;
        $usuariosAgregar->id_roles = $request->id_roles;
        $usuariosAgregar->save();
        return back()->with('inicio','Gracias por ingresar los datos.');
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
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\inicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('inicio');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function show(inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function edit(inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inicio $inicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(inicio $inicio)
    {
        //
    }
}

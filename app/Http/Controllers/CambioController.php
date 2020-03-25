<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;

class CambioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Administrador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $au = new Administrador;

    $au->sku=$request->get('sku');
    $au->nombres=$request->get('nombres');
    $au->apellidos=$request->get('apellidos');
    $au->rol=$request->get('rol');
    $au->password=$request->get('password');
    $au->usuario=$request->get('usuario');
    $au->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return Administrador::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $au=Administrador::find($id);

       
        $au->nombres=$request->get('nombres');
        $au->apellidos=$request->get('apellidos');
        $au->password=$request->get('password');
        $au->usuario=$request->get('usuario');

        $au->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

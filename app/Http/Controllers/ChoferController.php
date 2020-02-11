<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chofer;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Chofer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $au = new Chofer;

        $au->id_chofer=$request->get('id_chofer');
        $au->nombre=$request->get('nombre');
        $au->apellido=$request->get('apellido');
        $au->id_turno=$request->get('id_turno');
        $au->activo=$request->get('activo');
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
        return Chofer::find($id);
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
        $a = Chofer::findOrFail($id)->update($request->all());
        return $a;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Chofer::destroy($id);
    }
}

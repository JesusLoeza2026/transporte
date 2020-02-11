<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autos;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Autos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $au = new Autos;

        $au->id_auto=$request->get('id_auto');
        $au->nombre=$request->get('nombre');
        $au->cantidad=$request->get('cantidad');
        $au->activo=$request->get('activo');
        $au->id_chofer=$request->get('id_chofer');
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
         return Autos::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $ids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a = Autos::findOrFail($id)->update($request->all());
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
        
        return Autos::destroy($id);
    }
}

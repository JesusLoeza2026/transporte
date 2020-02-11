<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
Use DB;
class ContraController extends Controller
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
        $au->usuario=$request->get('usuario');
        $au->password=$request->get('password');
        $au->rol=$request->get('rol');
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
        $a = Administrador::findOrFail($id)->update($request->all());
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
        return Administrador::destroy($id);
    }
    public function cambio(Request $request){


        $html = "<h3>LO SENTIMOS LA CONTRASEÑA NO ES LA CORRECTA PARA CAMBIARLA DEBE INGRESAR LA ORIGINAL</h3><br><a href='contraseñaadmin'><button class='btn btn-primary'>Regresar</button></a>";
        $contraseña=$request->contraseña;
        
        $contra = DB::select('select password from administrador', [1]);

        if ($contra = $contraseña){
            return redirect('cambio');
        }
        else {
            echo $html;
        }

    }
}
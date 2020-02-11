<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use Session;
use Redirect;
use Cache;
use Cookie;
class AdministradorController extends Controller
{
    public function index()
    {
        return Administrador::all();
    }

    public function validar(Request $request){
// para ver si jala con la vista
        // return "usuario: $request->usuario password: $request->password";


        $usuario=$request->usuario;
        $password=$request->password;

        $resp= Administrador::where('usuario', '=',$usuario)
        ->where('password','=', $password)
        ->get();
       

        // return $resp;
        if (count($resp)>0){

             $user =$resp[0]->nombres.' '.$resp[0]->apellidos;
            Session::put('sku',$resp[0]->sku);
            Session::put('usuario',$user);
            Session::put('rol',$resp[0]->rol);

            if($resp[0]->rol=="administrador")
              return Redirect::to('seccion');
         
            }

            else
                return Redirect::to('error');
            
    }

    public function salir(){
        Session::flush();
        Session::reflash();
        Cache::flush();
        Cookie::forget('laravel_session');
        unset($_COOKIE);
        unset($_SESSION);

        return Redirect::to('logi');
    }
}

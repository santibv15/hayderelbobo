<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function save(Request $request){
        $users = new User();
        $users->nombre = $request->nombre;
        $users->apellidos=$request->apellidos;
        $users->correo=$request->correo;
        $users->usuario=$request->usuario;
        $users->contraseña=$request->contraseña;
        $users->save();
        return back();
    }

}

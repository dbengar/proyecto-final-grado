<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function mostrarDatosUsuario($id)
    {
        //dd(Planta::all());
        $usuarios = User::findOrFail($id);
        return view('user', compact('usuarios'));
    }

}

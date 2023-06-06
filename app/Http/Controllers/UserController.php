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

    public function updateProfileImage(Request $request)
    {
        $user = Auth::user();

        // Verificar si se ha enviado una nueva imagen
        if ($request->hasFile('user_imagen')) {
            $imagen = $request->file('user_imagen');

            // Eliminar la imagen anterior si existe
            if ($user->user_imagen) {
                Storage::delete($user->user_imagen);
            }

            // Guardar la nueva imagen en el sistema de archivos
            $path = $imagen->store('public/profile_images');

            // Actualizar el campo user_imagen en la base de datos
            $user->user_imagen = $path;
            $user->save();
        }

        return redirect("verDatosUsuario");
    }
}

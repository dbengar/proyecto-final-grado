<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function mostrarDatosUsuario($id)
    {
      
        $usuarios = User::findOrFail($id);
        return view('user', compact('usuarios'));
    }

    public function updateProfileImage(Request $request)
    {
        $user = Auth::user();

        // Verificar si se ha enviado una nueva imagen
        if ($request->hasFile('user_imagen')) {
            $imagenPath = $request->file('user_imagen')->store('users', 'public');
            $imagenUrl = Storage::url($imagenPath);

            // Eliminar la imagen anterior si existe
            if ($user->user_imagen) {
                Storage::delete($user->user_imagen);
            }

            // Actualizar el campo user_imagen en la base de datos
            $user->user_imagen = $imagenUrl;
            $user->save();
        }

        return redirect("/");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planta;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
    
        $users = User::all();
        $plantas = Planta::all();
    
        // Haz lo que necesites con los usuarios y las plantas
    
        return view('admin', compact('users', 'plantas'));
    }
    

}
<?php

use App\Http\Controllers\PlantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HumidityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aniadir', [PlantController::class, 'verTiposDePlanta']);

Route::post('/aniadir', [PlantController::class, 'crearPlanta'])->name('aniadir');

Route::get('/lista', [PlantController::class, 'mostrarLista'])->name('lista');

Route::get('/verDatosPlanta/{id}', [PlantController::class, 'mostrarDatosPlanta'])->name('verDatosPlanta');

Route::get('/user/{id}', [UserController::class, 'mostrarDatosUsuario'])->name('verDatosUsuario');

Route::delete('/lista/{id}', [PlantController::class, 'eliminarPlanta'])->name('eliminarPlanta');


Route::middleware('can:viewAny,App\Models\User')->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users.index');
});

Route::get('/obtener-humedad', [HumidityController::class, 'obtenerHumedad']);
Route::get('/obtener-humedad-actual', [HumidityController::class, 'obtenerHumedadActual']);

Route::post('/actualizar-imagen-perfil', [UserController::class, 'updateProfileImage'])->name('actualizar-imagen-perfil');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formulario;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PacicoviController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/AdminLTE', function () {
        return view('AdminLTE/index');
    })->name('AdminLTE');
});

// Este codigo fue probado por la compañera Johana Moncayo 
//La cual puso a prueba el codigo de rutas de la aplicacion 
//Observaciones de Johana: 
//Primeramente, se encontraron dos posibles error en la ruta de formulario la cual tiene error de sintaxys 
//El primer error es que falta un cierra de un parentesis despues de la palabra "class"
//Y el segundo error es que el controlador esta mal escrito, ya que todos los nombres de los controladores se crean con letra
//mayuscula en este caso "formularioController" esta escrito con la primera letra en minisculo y esto es incorrecto
Route::resource('formulario',FormularioController::class)->names('user1.formulario');
Route::resource('pacicovis',PacicoviController::class)->names('pacicovis');
Route::resource('users',UserController::class)->names('user1.users');






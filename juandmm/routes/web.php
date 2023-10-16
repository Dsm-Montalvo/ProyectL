<?php

use App\Http\Controllers\ControllerSystem;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* 
Route::get('/', function () {
    return view('welcome');
//}); */
/* Route::get('/MiPerfil', function () {
    return view('perfil');
});

Route::get('/alumnos', function () {
    return view('vistaalumno');
});

Route::get('/grupos', function () {
    return view('vistagrupo');
}); */
//--------------------------------------------------------------------------------------------------------------------------------------------
Route::name('index')->get('/',[ControllerSystem::class, 'index']);
//---------------------------------------------------------------------------------------------------------------------------------------------
Route::name('login')->get('/login',[ControllerSystem::class, 'login']);
Route::name('ingresar')->get('/ingresar',[ControllerSystem::class,'ingresar']);
Route::name('logout')->get('/logout',[ControllerSystem::class,'logout']);
//--------------------------------------------------------------------------------------------------------------------------------------------
Route::name('lista_alumnos')->get('/lista',[ControllerSystem::class, 'lista']);
//--------------------------------------------------------------------------------------------------------------------------------------------
Route::name('detalle')->get('/detalle/{id}',[ControllerSystem::class, 'detalle']);
//--------------------------------------------------------------------------------------------------------------------------------------------
Route::name('alta')->get('/alta',[ControllerSystem::class, 'alta']);
Route::name('registrar')->post('/registrar',[ControllerSystem::class, 'registrar']);
//--------------------------------------------------------------------------------------------------------------------------------------------
Route::name('editar')->get('/editar/{id}',[ControllerSystem::class, 'editar']);
Route::name('salvar')->put('/salvar/{id}',[ControllerSystem::class, 'salvar']);
//--------------------------------------------------------------------------------------------------------------------------------------------
Route::name('borrar')->get('/borrar/{id}',[ControllerSystem::class, 'borrar']);
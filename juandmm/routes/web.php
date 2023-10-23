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

//-------------------------------------------------Gupos------------------------------------------------------------------------------------------
//-------------------------------Ruta: Lista de grupo----------------
Route::name('lista_grup')->get('/lista_grup',[ControllerSystem::class, 'lista_grup']);

//--------------------------------Ruta: Detalle de grupo---------------
Route::name('detalle_grup')->get('/detalle_grup/{id_grup}',[ControllerSystem::class, 'detalle_grup']);

//--------------------------------Rutas: Registro de grupo----------------
Route::name('alta_grup')->get('/alta_grup',[ControllerSystem::class, 'alta_grup']);
Route::name('registrar_grup')->post('/registrar_grup',[ControllerSystem::class, 'registrar_grup']);

//--------------------------------Rutas: Editar de grupo ---------------
Route::name('editar_grup')->get('/editar_grup/{id_grup}',[ControllerSystem::class, 'editar_grup']);
Route::name('salvar_grup')->put('/salvar_grup/{id_grup}',[ControllerSystem::class, 'salvar_grup']);

//--------------------------------Rutas: Borrar de grupo ----------------
Route::name('borrar_grup')->get('/borrar_grup/{id_grup}',[ControllerSystem::class, 'borrar_grup']);

//--------------------------------Inicio ----------------
Route::name('borrar_grup')->get('/borrar_grup/{id_grup}',[ControllerSystem::class, 'borrar_grup']);
Route::name('inicio')->get('/inicio',[ControllerSystem::class, 'inicio']);
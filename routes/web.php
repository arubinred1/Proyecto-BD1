<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoConexionController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/miRed', function () {
    return view('miRed');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/empleos', function () {
    return view('empleos');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/alertaemp', function () {
    return view('alertaemp');
});

Route::get('/Notificaciones', function () {
    return view('Notificaciones');
});

Route::get('/Mensajes', function () {
    return view('Mensajes');
});

Route::get('/Grupos', function () {
    return view('Grupos');
});

Route::get('/dato', function() {
    return DB::select("SELECT * FROM tbl_estado_conexion");
});


Route::get('/estado', [EstadoConexionController::class, 'index']);

//registro
// Mostrar formulario de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('login');

// Procesar el formulario de login
Route::post('/login', [UsuarioController::class, 'login'])->name('login.store');

// Cerrar sesión
Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');



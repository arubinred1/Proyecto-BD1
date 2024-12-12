<?php

use App\Http\Controllers\ConexionController;
use App\Http\Controllers\EmpleoController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\VistasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoConexionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\DB;


Route::get('/dato', function() {
    return DB::select("SELECT * FROM tbl_estado_conexion");
});

// LOGIN
Route::get('/estado', [EstadoConexionController::class, 'index']);
//registro
// Mostrar formulario de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('login');
// Procesar el formulario de login
Route::post('/login', [UsuarioController::class, 'login'])->name('login.store');
// Cerrar sesión
Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');
Route::get('/', [VistasController::class, 'login'])->name('login');


// VISTAS
// Route::get('/mired', [VistasController::class, 'mired'])->name('mired');
// Route::get('/empleos', [VistasController::class, 'empleos'])->name('empleos');
Route::get('/mensajes', [VistasController::class, 'mensajes'])->name('mensajes');
Route::get('/notificaciones', [VistasController::class, 'notificaciones'])->name('notificaciones');
Route::get('/perfil', [VistasController::class, 'perfil'])->name('perfil');
Route::get('/grupos', [VistasController::class, 'grupos'])->name('grupos');


// PUBLICACIONES
// Mostrar publicaciones en principal
Route::get('/principal', [PublicacionController::class, 'mostrarPublicaciones'])->name('principal');

// Agregar publicación
Route::post('/publicacion/agregar', [PublicacionController::class, 'agregarPublicacion'])->name('agregar.publicacion');
// Agregar reacción
Route::post('/publicacion/reaccionar', [PublicacionController::class, 'reaccionarPublicacion'])->name('reaccionar.publicacion');
// Agregar comentario
Route::post('/publicacion/comentar', [PublicacionController::class, 'comentarPublicacion'])->name('comentar.publicacion');


// MIRED
// Mostrar usuarios no conectados en mired
Route::get('/mired', [ConexionController::class, 'usuariosNoConectados'])->name('mired');
Route::post('/mired/conectar', [ConexionController::class, 'conectarUsuario'])->name('conectar.usuario');

// 
Route::get('/empleos', [EmpleoController::class, 'mostrarEmpleos'])->name('empleos');
Route::post('/empleo/agregar', [EmpleoController::class, 'agregarEmpleos'])->name('agregar.empleo');


// BÚSQUEDA
// Buscar por nombre de usuario
Route::get('/usuarios', [UsuarioController::class, 'mostrarUsuarios'])->name('mostrar.usuarios');
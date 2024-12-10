<?php

use Illuminate\Support\Facades\Route;

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


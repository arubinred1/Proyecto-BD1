<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{

    public function login()
    {
        return view('login');
    }
    public function principal()
    {
        return view('principal');
    }
    public function mired()
    {
        return view('miRed');
    }
    public function empleos()
    {
        return view('empleos');
    }
    public function mensajes()
    {
        return view('Mensajes');
    }
    public function notificaciones()
    {
        return view('Notificaciones');
    }
    public function perfil()
    {
        return view('perfil');
    }
    public function grupos()
    {
        return view('Grupos');
    }
}

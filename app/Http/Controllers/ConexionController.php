<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ConexionController extends Controller
{
    public function usuariosNoConectados() {
        $usuario = Session::get('usuario');
    
        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para acceder a tu red.');
        }
    
        $usuariosNoConectados = DB::table('TBL_USUARIOS AS u')
            ->leftJoin('TBL_CONEXIONES AS c', function ($join) use ($usuario) {
                $join->on('u.CODIGO_USUARIO', '=', 'c.CODIGO_USUARIO_RECEPTOR')
                     ->orOn('u.CODIGO_USUARIO', '=', 'c.CODIGO_USUARIO_SOLICITANTE');
            })
            ->where(function ($query) use ($usuario) {
                $query->where('c.CODIGO_USUARIO_SOLICITANTE', '=', $usuario->codigo_usuario)
                      ->orWhere('c.CODIGO_USUARIO_RECEPTOR', '=', $usuario->codigo_usuario);
            })
            // ->whereIn('c.CODIGO_ESTADO_CONEXION', [2, 3])
            ->where('u.CODIGO_USUARIO', '<>', $usuario->codigo_usuario)
            ->distinct()
            ->select(
                'u.CODIGO_USUARIO AS codigo_usuario',
                'u.NOMBRE_USUARIO AS nombre_usuario',
                'u.APELLIDO_USUARIO AS apellido_usuario',
                'u.FOTOGRAFIA AS fotografia',
                'c.CODIGO_ESTADO_CONEXION AS estado_conexion'
            )
            ->get();
    
        return view('miRed', compact('usuario', 'usuariosNoConectados'));
    }

    public function conectarUsuario(Request $request) {
        $usuario = Session::get('usuario');
    
        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para conectar.');
        }
    
        DB::table('TBL_CONEXIONES')->updateOrInsert(
            [
                'CODIGO_CONEXION' => $request->codigo_conexion,
                'CODIGO_USUARIO_SOLICITANTE' => $usuario->codigo_usuario,
                'CODIGO_USUARIO_RECEPTOR' => $request->codigo_usuario_receptor,
            ],
            [
                'CODIGO_ESTADO_CONEXION' => 2, // Estado "Pendiente"
            ]
        );
    
        return redirect()->route('mired')->with('success', 'Solicitud de conexión enviada.');
    }

}

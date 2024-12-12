<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MensajeController extends Controller
{
    public function mostrarMensajes()
    {
        $usuario = Session::get('usuario');
        
        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para ver tus mensajes.');
        }

        // Obtener los mensajes donde el usuario es el receptor
        $mensajes = DB::table('TBL_MENSAJES')
            ->select(
                'CODIGO_MENSAJE as codigo_mensaje',
                'CODIGO_USUARIO_EMISOR as codigo_usuario_emisor',
                'CODIGO_USUARIO_RECEPTOR as codigo_usuario_receptor',
                'CONTENIDO_MENSAJE as contenido_mensaje',
                'FECHA_ENVIO as fecha_envio',
                'FECHA_RECIBIDO as fecha_recibido'
            )
            ->where('CODIGO_USUARIO_EMISOR', '=', $usuario->codigo_usuario)
            ->orderBy('FECHA_ENVIO', 'desc')
            ->get();

        return view('mensajes', compact('mensajes', 'usuario'));
    }


    public function agregarMensaje(Request $request)
    {
        $usuario = Session::get('usuario');

        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para enviar un mensaje.');
        }
        DB::table('TBL_MENSAJES')->insert([
            'CODIGO_USUARIO_EMISOR' => $usuario->codigo_usuario,
            'CODIGO_USUARIO_RECEPTOR' => $request->codigo_usuario_receptor,
            'CONTENIDO_MENSAJE' => $request->contenido_mensaje,
            'FECHA_ENVIO' => now(),
            'FECHA_RECIBIDO' => now(),
        ]);

        return redirect()->back();
    }


    public function eliminarMensaje($codigo_mensaje)
    {
        $usuario = Session::get('usuario');

        if (!$usuario) {
            return redirect('/');
        }
        
        $mensaje = DB::table('TBL_MENSAJES')
            ->where('CODIGO_MENSAJE', $codigo_mensaje)
            ->where(function ($query) use ($usuario) {
                $query->where('CODIGO_USUARIO_EMISOR', $usuario->codigo_usuario)
                    ->orWhere('CODIGO_USUARIO_RECEPTOR', $usuario->codigo_usuario);
            })
            ->first();

        if ($mensaje) {
            DB::table('TBL_MENSAJES')->where('CODIGO_MENSAJE', $codigo_mensaje)->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}

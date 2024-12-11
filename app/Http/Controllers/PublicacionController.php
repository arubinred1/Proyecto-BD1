<?php

namespace App\Http\Controllers;

use App\Models\TBL_PUBLICACIONE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    public function mostrarPublicaciones() {
        
        $publicaciones = DB::table('TBL_PUBLICACIONES')
        ->leftJoin('TBL_USUARIOS', 'TBL_PUBLICACIONES.CODIGO_USUARIO', '=', 'TBL_USUARIOS.CODIGO_USUARIO')
        ->leftJoin('TBL_COMENTARIOS', 'TBL_PUBLICACIONES.CODIGO_PUBLICACIONES', '=', 'TBL_COMENTARIOS.CODIGO_PUBLICACIONES')
        ->leftJoin('TBL_REACCIONES', 'TBL_PUBLICACIONES.CODIGO_PUBLICACIONES', '=', 'TBL_REACCIONES.CODIGO_PUBLICACONES')
        ->select(
            'TBL_PUBLICACIONES.CODIGO_PUBLICACIONES AS codigo_publicacion',
            'TBL_USUARIOS.NOMBRE_USUARIO AS nombre_usuario',
            'TBL_USUARIOS.APELLIDO_USUARIO AS apellido_usuario',
            'TBL_USUARIOS.FOTOGRAFIA AS foto_usuario',
            'TBL_PUBLICACIONES.FECHA_PUBLICACION AS fecha_publicacion',
            'TBL_PUBLICACIONES.CONTENIDO_PUBLICACION AS contenido_publicacion',
            'TBL_PUBLICACIONES.DESCRIPCION_PUBLICACION AS descripcion_publicacion',
            DB::raw('COUNT(DISTINCT TBL_COMENTARIOS.CODIGO_COMENTARIO) AS total_comentarios'),
            DB::raw("COUNT(DISTINCT TBL_REACCIONES.CODIGO_PUBLICACONES || '-' || TBL_REACCIONES.CODIGO_USUARIO) AS total_reacciones")
        )
        ->groupBy(
            'TBL_PUBLICACIONES.CODIGO_PUBLICACIONES',
            'TBL_USUARIOS.NOMBRE_USUARIO',
            'TBL_USUARIOS.APELLIDO_USUARIO',
            'TBL_USUARIOS.FOTOGRAFIA',
            'TBL_PUBLICACIONES.FECHA_PUBLICACION',
            'TBL_PUBLICACIONES.CONTENIDO_PUBLICACION',
            'TBL_PUBLICACIONES.DESCRIPCION_PUBLICACION'
        )
        ->get();
        return view('principal', compact('publicaciones'));
    }

    public function agregarPublicacion(Request $request) {
        DB::table('TBL_PUBLICACIONES')->insert([
            'CODIGO_PUBLICACIONES' => $request->codigo,
            'CODIGO_TIPO_PUBLICACION' => $request->tipo,
            'CONTENIDO_PUBLICACION' => $request->contenido,
            'DESCRIPCION_PUBLICACION' => $request->descripcion,
            'FECHA_PUBLICACION' => $request->fecha,
            'CODIGO_USUARIO' => $request->usuario,
        ]);

        // Redireccionar con mensaje de éxito
        return redirect("/principal");
    }

}

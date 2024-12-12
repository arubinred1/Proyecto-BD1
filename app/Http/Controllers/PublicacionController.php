<?php

namespace App\Http\Controllers;

use App\Models\TBL_PUBLICACIONE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class PublicacionController extends Controller
{
    public function mostrarPublicaciones() {
        

        $usuario = Session::get('usuario');

        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para ver tu perfil');
        }

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
        ->orderBy('TBL_PUBLICACIONES.FECHA_PUBLICACION', 'desc')
        ->get();


        foreach ($publicaciones as $publicacion) {
            $publicacion->comentarios = DB::table('TBL_COMENTARIOS')
                ->join('TBL_USUARIOS', 'TBL_COMENTARIOS.CODIGO_USUARIO', '=', 'TBL_USUARIOS.CODIGO_USUARIO')
                ->select(
                    'TBL_COMENTARIOS.CONTENIDO_COMENTARIO AS contenido_comentario',
                    'TBL_COMENTARIOS.FECHA_COMENTARIO AS fecha_comentario',
                    'TBL_USUARIOS.NOMBRE_USUARIO AS nombre_comentarista',
                    'TBL_USUARIOS.APELLIDO_USUARIO AS apellido_comentarista'
                )
                ->where('TBL_COMENTARIOS.CODIGO_PUBLICACIONES', $publicacion->codigo_publicacion)
                ->get();
        }


        return view('principal', compact('usuario','publicaciones'));
    }

    public function agregarPublicacion(Request $request) {
        DB::table('TBL_PUBLICACIONES')->insert([
            'CODIGO_PUBLICACIONES' => $request->codigo,
            'CODIGO_TIPO_PUBLICACION' => $request->tipo,
            'CONTENIDO_PUBLICACION' => $request->contenido,
            'DESCRIPCION_PUBLICACION' => $request->descripcion,
            'FECHA_PUBLICACION' => now(),
            'CODIGO_USUARIO' => $request->usuario,
        ]);

        return redirect("/principal");
    }

    public function reaccionarPublicacion(Request $request) {
        
        $existeReaccion = DB::table('TBL_REACCIONES')
            ->where('CODIGO_PUBLICACONES', $request->codigo_publicacion)
            ->where('CODIGO_USUARIO', $request->codigo_usuario)
            ->exists();

        if ($existeReaccion) {
            DB::table('TBL_REACCIONES')
            ->where('CODIGO_PUBLICACONES', $request->codigo_publicacion)
            ->where('CODIGO_USUARIO', $request->codigo_usuario)
            ->delete();

            return redirect("/principal")->with('success', 'Reacción eliminada con éxito.');
        }

        DB::table('TBL_REACCIONES')->insert([
            'CODIGO_PUBLICACONES' => $request->codigo_publicacion,
            'CODIGO_USUARIO' => $request->codigo_usuario,
            'CODIGO_TIPO_REACCION' => $request->tipo_reaccion,
            'FECHA_REACCION' => now(),
        ]);

        return redirect("/principal");
    }


    public function comentarPublicacion(Request $request)
    {
        DB::table('TBL_COMENTARIOS')->insert([
            // 'CODIGO_COMENTARIO' => DB::raw('TBL_COMENTARIOS_SEQ.NEXTVAL'), // Cambia si tienes una secuencia
            'CODIGO_COMENTARIO' => $request->codigo_comentario,
            'CONTENIDO_COMENTARIO' => $request->contenido_comentario,
            'FECHA_COMENTARIO' => now(),
            'CODIGO_USUARIO' => $request->codigo_usuario,
            'CODIGO_PUBLICACIONES' => $request->codigo_publicacion,
            'CODIGO_COMENTARIO_COMENTADO' => null,
        ]);

        return redirect('/principal');
    }


    public function actualizarPublicacion(Request $request, $codigo_publicacion)
    {
        // Actualizar la publicación
        DB::table('TBL_PUBLICACIONES')
            ->where('CODIGO_PUBLICACIONES', '=', $codigo_publicacion)
            ->update([
                'CONTENIDO_PUBLICACION' => $request->input('contenido_publicacion'),
                'DESCRIPCION_PUBLICACION' => $request->input('descripcion_publicacion'),
                'FECHA_PUBLICACION' => now(),
            ]);

        return redirect()->back()->with('success', 'Publicación actualizada correctamente.');
    }

    public function eliminarPublicacion($codigo_publicacion)
    {
        DB::table('TBL_PUBLICACIONES')
            ->where('CODIGO_PUBLICACIONES', '=', $codigo_publicacion)
            ->delete();

        return redirect()->back();
    }



}

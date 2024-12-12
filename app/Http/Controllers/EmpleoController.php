<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class EmpleoController extends Controller
{
    public function mostrarEmpleos()
    {
        $usuario = Session::get('usuario');
        
        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para ver los empleos.');
        }

        $empleos = DB::table('TBL_OFERTAS_TRABAJOS')
        ->select(
            'CODIGO_OFERTA_TRABAJO AS codigo_oferta_trabajo',
            'CODIGO_EMPRESA AS codigo_empresa',
            'PUESTO_LABORAL AS puesto_laboral',
            'DESCRIPCION AS descripcion',
            'FECHA_PUBLICACION AS fecha_publicacion'
            //No TIENE NOMBRE DE EMPRESA
        )
        ->orderBy('TBL_OFERTAS_TRABAJOS.FECHA_PUBLICACION', 'desc')
        ->get();
        return view('empleos', compact('empleos', 'usuario'));
    }


    public function agregarEmpleos(Request $request) {
        DB::table('TBL_OFERTAS_TRABAJOS')->insert([
            'CODIGO_OFERTA_TRABAJO' => $request->codigo_oferta_laboral,
            'CODIGO_EMPRESA' => $request->codigo_empresa,
            'PUESTO_LABORAL' => $request->puesto_laboral,
            'DESCRIPCION' => $request->descripcion,
            'FECHA_PUBLICACION' => now(),
        ]);

        // Redireccionar con mensaje de éxito
        return redirect("/empleos");
    }


    public function actualizarEmpleo(Request $request, $codigo_oferta_trabajo)
    {
        // Actualizar el empleo
        DB::table('TBL_OFERTAS_TRABAJOS')
            ->where('CODIGO_OFERTA_TRABAJO', '=', $codigo_oferta_trabajo)
            ->update([
                'CODIGO_EMPRESA' => $request->input('codigo_empresa'),
                'PUESTO_LABORAL' => $request->input('puesto_laboral'),
                'DESCRIPCION' => $request->input('descripcion'),
                'FECHA_PUBLICACION' => now(),
            ]);

        return redirect()->back()->with('success', 'Empleo actualizado correctamente.');
    }


    public function eliminarEmpleo($codigo_oferta_trabajo)
    {
        // Eliminar el empleo
        DB::table('TBL_OFERTAS_TRABAJOS')
            ->where('CODIGO_OFERTA_TRABAJO', '=', $codigo_oferta_trabajo)
            ->delete();

        return redirect()->back()->with('success', 'Empleo eliminado correctamente.');
    }
}

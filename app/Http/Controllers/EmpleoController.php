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
}

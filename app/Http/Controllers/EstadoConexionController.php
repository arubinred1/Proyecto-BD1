<?php

namespace App\Http\Controllers;

use App\Models\TBL_ESTADO_CONEXIONE; // Asegúrate de usar el nombre correcto
use Illuminate\Http\Request;

class EstadoConexionController extends Controller
{
    public function index()
    {
        // Obtén todos los registros de la tabla estado_conexiones
        $registros = TBL_ESTADO_CONEXIONE::all();  // Usa el nombre correcto del modelo

        // Retorna la vista principal y pasa los registros
        return view('principal', compact('registros'));
    }
}

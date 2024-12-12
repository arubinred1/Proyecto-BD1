<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('TBL_USUARIOS')
            ->select(
                'CODIGO_USUARIO AS codigo_usuario',
                'NOMBRE_USUARIO AS nombre_usuario',
                'APELLIDO_USUARIO AS apellido_usuario',
                'CORREO AS correo',
                'CONTRASENIA AS contrasenia',
                'FOTOGRAFIA AS fotografia'
            )
            ->where('correo', $request->email)
            ->first();

        if ($user && $request->password === $user->contrasenia) {
            Session::put('usuario', $user);
            return redirect()->intended('/principal');
        }
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son correctas.',
        ]);

    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Session::forget('usuario'); // Eliminar los datos del usuario
        return redirect('/')->with('success', 'Sesión cerrada');
    }


    public function mostrarUsuarios(Request $request)
    {
        $query = $request->input('query');

        // Búsqueda de usuarios por nombre
        $usuariosNoConectados = DB::table('TBL_USUARIOS')
            ->where('NOMBRE_USUARIO', 'LIKE', '%' . $query . '%')
            ->orWhere('APELLIDO_USUARIO', 'LIKE', '%' . $query . '%')
            ->select(
                'CODIGO_USUARIO AS codigo_usuario',
                'NOMBRE_USUARIO AS nombre_usuario',
                'APELLIDO_USUARIO AS apellido_usuario',
                'FOTOGRAFIA AS fotografia'
            )
            ->get();

        $usuario = Session::get('usuario');

        return view('miRed', compact('usuariosNoConectados', 'usuario', 'query'));
    }


    public function mostrarPerfil(Request $request)
    {

        $usuario = Session::get('usuario');

        if (!$usuario) {
            return redirect('/')->withErrors('Debes iniciar sesión para ver tu perfil');
        }

        // $datosUsuario = DB::table('TBL_USUARIOS AS u')
        // ->leftJoin('TBL_DETALLES_USUARIO AS d', 'u.CODIGO_USUARIO', '=', 'd.CODIGO_USUARIO')
        // ->select(
        //     'u.CODIGO_USUARIO AS codigo_usuario',
        //     'u.NOMBRE_USUARIO AS nombre_usuario',
        //     'u.APELLIDO_USUARIO AS apellido_usuario',
        //     'u.EMAIL AS email',
        //     'u.FOTOGRAFIA AS fotografia',
        //     'd.TELEFONO AS telefono',
        //     'd.DIRECCION AS direccion',
        //     'd.FECHA_NACIMIENTO AS fecha_nacimiento'
        // )
        // ->where('u.CODIGO_USUARIO', '=', $usuario->codigo_usuario)
        // ->first() // Obtener un solo registro
        // ->get();


        return view('perfil', compact('usuario'));
    }
}

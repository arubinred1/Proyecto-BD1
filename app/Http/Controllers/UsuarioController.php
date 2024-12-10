<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Maneja el inicio de sesión del usuario usando consulta SQL.
     */
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Obtener el usuario desde la base de datos con una consulta SQL
        $user = DB::table('TBL_USUARIOS')
            ->where('correo', $request->email)
            ->first();

        // Verificar si se encontró el usuario y si la contraseña es correcta
        if ($user && $request->password === $user->contrasenia) {
            // Si la contraseña es correcta, iniciar sesión
         
            return redirect()->intended('/principal');
        }
        // Si las credenciales son incorrectas
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son correctas.',
        ]);
    }

    /**
     * Muestra el formulario de inicio de sesión.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Maneja el cierre de sesión.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Has cerrado sesión exitosamente.');
    }
}

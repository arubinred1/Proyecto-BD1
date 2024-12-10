<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f2ef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 360px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo img {
            width: 60px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        p {
            font-size: 14px;
            color: #666;
            margin: 10px 0 20px;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #0073b1;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #005580;
        }

        .forgot-password {
            display: block;
            margin: 15px 0;
            font-size: 14px;
            color: #0073b1;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        .join-now-button {
            width: 100%;
            padding: 12px;
            background-color: #fff;
            color: #0073b1;
            border: 1px solid #0073b1;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .join-now-button:hover {
            background-color: #f3f2ef;
        }

        /* Estilo para los mensajes de error */
        .alert-danger {
            color: #fff;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn Logo">
        </div>
        <h1>Iniciar Sesión</h1>
        <p>Mantente actualizado sobre tu mundo profesional</p>

        <!-- Mostrar los errores de validación si existen -->
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.store') }}" method="POST" class="login-form">
            @csrf <!-- Protege contra ataques CSRF -->
            <input type="email" name="email" placeholder="Correo electrónico o teléfono" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="login-button">Iniciar Sesión</button>
        </form>

        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
        <hr>
        <button class="join-now-button">Unirse ahora</button>
    </div>
</body>
</html>

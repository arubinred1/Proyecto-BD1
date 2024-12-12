<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas de Empleo</title>
    <link rel="stylesheet" href="{{ asset('css\principal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }

        header {
            background-color: #0073b1;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .job-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .job-card h2 {
            margin: 0;
            font-size: 20px;
            color: #0073b1;
        }

        .job-card p {
            margin: 5px 0;
            color: #555;
            font-size: 14px;
        }

        .job-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .job-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .apply-button {
            background-color: #0073b1;
            color: white;
        }

        .apply-button:hover {
            background-color: #005580;
        }

        .save-button {
            background-color: #f0f2f5;
            color: #0073b1;
            border: 1px solid #0073b1;
        }

        .save-button:hover {
            background-color: #e5e5e5;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body>


    <nav class="navbar">
        <div class="navbar-left">
            <a href="{{ route('principal') }}" class="logo"><img src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <div class="search-box">
                <img src="images/search.png">
                <form action="{{ route('mostrar.usuarios') }}" method="GET" class="d-flex">
                    <input type="text" name="query" placeholder="Buscar" class="form-control"
                        required>
                    <button type="submit" class="btn btn-primary ms-2">Buscar</button>
                </form>
            </div>
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href=" {{ route('principal') }} " class="active-link"><img src="images/home.png" alt="home">
                        <span>Home</span></a></li>
                <li><a href=" {{ route('mired') }} "><img src="images/network.png" alt="network"> <span>My
                            Network</span></a></li>
                <li><a href=" {{ route('empleos') }} "><img src="images/jobs.png" alt="jobs"> <span>Jobs</span></a>
                </li>
                <li><a href=" {{ route('mensajes') }} "mensajes><img src="images/message.png" alt="message">
                        <span>Messaging</span></a></li>
                <li><a href=" {{ route('notificaciones') }} "><img src="images/notification.png" alt="notification">
                        <span>Notifications</span></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="online">
                <img src="{{ $usuario->fotografia }}" class="nav-profile-img" onclick="toggleMenu()">
            </div>
        </div>
        <!----Dropdown menu-->
        <div class="profile-menu-wrap" id="profileMenu">
            <div class="profile-menu">
                <div class="user-info">
                    <img src="{{ $usuario->fotografia }}">
                    <div>
                        <h3>{{ $usuario->nombre_usuario }} {{ $usuario->apellido_usuario }}</h3>
                        <a href=" {{ route('perfil') }} ">See your profile</a>
                    </div>
                </div>
                <hr>
                <a href="#" class="profile-menu-link">
                    <img src="images/feedback.png">
                    <p>Give Feedback</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/setting.png">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/help.png">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/display.png">
                    <p>Display & Accessibility</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link" onclick="logoutConfirm(event)">
                    <img src="images/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>


            </div>
        </div>

    </nav>

    <h1>Empleos Disponibles</h1>

    <div class="text-end mb-3">
        <button class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#addJobModal">Agregar
            Empleo</button>
    </div>

    @foreach ($empleos as $empleo)
        <div class="container" id="job-list">
            <h2>{{ $empleo->puesto_laboral }}</h2>
            <p><strong>Empresa:</strong> {{ $empleo->codigo_empresa }}</p>
            <p>{{ $empleo->descripcion }}</p>
            <small>Fecha de publicación:
                {{ $empleo->fecha_publicacion }}</small>

            <div class="job-actions">
                <button class="apply-button">Aplicar</button>
                <button class="save-button">Guardar</button>
            </div>
        </div>
    @endforeach


    <!-- Modal -->
    <div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="addJobModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('agregar.empleo') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addJobModalLabel">Agregar Nuevo Empleo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="codigo_empresa" class="form-label">Código oferta laboral</label>
                            <input type="text" name="codigo_oferta_laboral" id="codigo_empresa" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="codigo_empresa" class="form-label">Código Empresa</label>
                            <input type="text" name="codigo_empresa" id="codigo_empresa" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="puesto_laboral" class="form-label">Puesto Laboral</label>
                            <input type="text" name="puesto_laboral" id="puesto_laboral" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <footer>
        © 2024 Linkedin
    </footer>

    <script>
        let profileMenu = document.getElementById("profileMenu");

        function toggleMenu() {
            profileMenu.classList.toggle("open-menu");
        }

        let sideActivity = document.getElementById("sidebarActivity");
        let moreLink = document.getElementById("showMoreLink");

        function toggleActivity() {
            sideActivity.classList.toggle("open-activity");
            if (sideActivity.classList.contains("open-activity")) {
                moreLink.innerHTML = "Show less <b>-</b>";

            } else {
                moreLink.innerHTML = "Show More <b>+</b>";
            }
        }
    </script>

    <script>
        function logoutConfirm(event) {
            event.preventDefault();
            if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

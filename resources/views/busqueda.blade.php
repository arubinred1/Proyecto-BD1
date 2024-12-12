<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkedin</title>
    <link rel="stylesheet" href="{{ asset('css\principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css\miRed.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


    <div class="main-containerm">
        <div class="left-sidebarMiRed">
            <div class="sidebar-profile-box">
                <div class="sidebar-profile-info">

                    <table class="table tableGestion">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Gerstionar mi red</th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="aHref" href="">Mi red </a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="aHref" href="">Agenda</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="aHref" href="">Seguidores</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="aHref" href=" {{ route('grupos') }} ">Grupos</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="aHref" href="">Eventos</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="aHref" href="">Paginas</a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sidebar-profile-link">
                    <a href="#"><img src="images/items.png">My Items</a>
                    <a href="#"><img src="images/premium.png">Try Premium</a>
                </div>
            </div>

            <div class="sidebar-activity" id="sidebarActivity">
                <div class="sidebar-useful-links">
                    <a href="#">About</a>
                    <a href="#">Accessibility</a>
                    <a href="#">Help Center</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Advertising</a>
                    <a href="#">Get the App</a>
                    <a href="#">More</a>


                    <div class="copyright-msg">
                        <img src="images/logo.png">
                        <p>Linkedin &#169; 2022. All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <p id="showMoreLink" onclick="toggleActivity()">Show more <b>+</b></p>

        </div>
        <div class="main-contentMiRed">
            <div class="create-post">
                <div class="create-post-links">
                    <li>Amplia tu red</li>
                    <li>Ponte al dia</li>
                </div>
            </div>



            <div>
                <p class="Pcontainer">Personas que quizas conozcas</p>
                <div class="flex-container">
                    <div class="flex-item">
                        <div class="image-container">
                            <img src="{{ asset('images/user-4.png') }}" alt="logoEmpleo">
                            <p>Monique Matamoros</p>
                            <button type="button" class="btn btn-primary">Conectar</button>
                        </div>
                    </div>
                    @if (isset($query))
                    <p>Resultados para: <strong>{{ $query }}</strong></p>
                @endif
                
                @if ($usuariosNoConectados->isEmpty())
                    <p>No se encontraron usuarios con ese nombre.</p>
                @else
                    @foreach ($usuariosNoConectados as $usuarioNoConectado)
                        <div class="flex-item">
                            <div class="image-container">
                                <img src="{{ $usuarioNoConectado->fotografia }}" 
                                     alt="Foto de {{ $usuarioNoConectado->nombre_usuario }}">
                                <p>{{ $usuarioNoConectado->nombre_usuario }} {{ $usuarioNoConectado->apellido_usuario }}</p>
                
                                @if (isset($usuario->estado_conexion))
                                    @if ($usuario->estado_conexion === 2)
                                        <button type="button" class="btn btn-secondary" disabled>Pendiente</button>
                                    @elseif ($usuario->estado_conexion === 3)
                                        <button type="button" class="btn btn-danger" disabled>Rechazado</button>
                                    @else
                                        <form action="{{ route('conectar.usuario') }}" method="POST">
                                            @csrf
                                            <input type="text" name="codigo_conexion">
                                            <input type="hidden" name="codigo_usuario_receptor" 
                                                   value="{{ $usuarioNoConectado->codigo_usuario }}">
                                            <button type="submit" class="btn btn-primary">Conectar</button>
                                        </form>
                                    @endif
                                @else
                                    <form action="{{ route('conectar.usuario') }}" method="POST">
                                        @csrf
                                        <input type="text" name="codigo_conexion">
                                        <input type="hidden" name="codigo_usuario_receptor" 
                                               value="{{ $usuarioNoConectado->codigo_usuario }}">
                                        <button type="submit" class="btn btn-primary">Conectar</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif

                </div>
            </div>



        </div>
    </div>

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
        document.addEventListener('DOMContentLoaded', function() {
            const botonesConectar = document.querySelectorAll('.conectar-btn');

            botonesConectar.forEach(boton => {
                boton.addEventListener('click', function() {
                    const codigoUsuario = this.getAttribute('data-usuario');

                    fetch('/enviar-solicitud', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                codigo_usuario: codigoUsuario
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                // Cambiar texto del botón a Pendiente
                                this.textContent = 'Pendiente';
                                this.classList.remove('btn-primary');
                                this.classList.add('btn-secondary');
                                this.disabled = true; // Deshabilitar el botón
                            } else {
                                alert(data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        });
    </script>

    <script>
        function logoutConfirm(event) {
            event.preventDefault();
            if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>


</body>

</html>

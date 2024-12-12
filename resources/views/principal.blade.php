<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkedin</title>
    <link rel="stylesheet" href="{{ asset('css\principal.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

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


    <div class="container">
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="images/cover-pic.png" width="100%">
                <div class="sidebar-profile-info">
                    <img src="{{ $usuario->fotografia }}">
                    <h1>{{ $usuario->nombre_usuario }} {{ $usuario->apellido_usuario }}</h1>
                    <h3>Data Analyst at IBM</h3>
                    <ul>
                        <li>Your profile views <span>24</span></li>
                        <li>Your post views <span>128</span></li>
                        <li>Your Connections<span>108</span></li>
                    </ul>
                </div>
                <div class="sidebar-profile-link">
                    <a href="#"><img src="images/items.png">My Items</a>
                    <a href="#"><img src="images/premium.png">Try Premium</a>
                </div>
            </div>

            <div class="sidebar-activity" id="sidebarActivity">
                <h3>RECENT</h3>
                <a href="#"><img src="images/recent.png">Data Analysis</a>
                <a href="#"><img src="images/recent.png">UI UX Design</a>
                <a href="#"><img src="images/recent.png">Web Development</a>
                <a href="#"><img src="images/recent.png">Object Oriented Programming</a>
                <a href="#"><img src="images/recent.png">Operating Systems</a>
                <a href="#"><img src="images/recent.png">Platform technologies</a>
                <h3>GROUPS</h3>
                <a href=" {{ route('grupos') }} "><img src="images/group.png">Grupos</a>
                <a href="#"><img src="images/group.png">Learn NumPy</a>
                <a href="#"><img src="images/group.png">Machine Learning group</a>
                <a href="#"><img src="images/group.png">Data Science Aspirants</a>
                <h3>HASHTAG</h3>
                <a href="#"><img src="images/hashtag.png">dataanalyst</a>
                <a href="#"><img src="images/hashtag.png">numpy</a>
                <a href="#"><img src="images/hashtag.png">machinelearning</a>
                <a href="#"><img src="images/hashtag.png">datascience</a>
                <div class="discover-more-link">
                    <a href="#">Discover More</a>
                </div>
            </div>
            <p id="showMoreLink" onclick="toggleActivity()">Show more <b>+</b></p>

        </div>
        <div class="main-content">
            <div class="create-post">
                <form action=" {{ route('agregar.publicacion') }} " method="POST">
                    @csrf
                    <div class="create-post-input">
                        <img src="{{ $usuario->fotografia }}">
                        {{-- <textarea rows="2" placeholder="Write Something"></textarea> --}}
                        <input type="text" class="form-control" id="codigo" name="codigo"
                            placeholder="Código">
                        <input type="area" rows="2" class="form-control" id="descripcion"
                            name="descripcion" placeholder="Descripción">
                    </div>
                    <div class="create-post-links">
                        <input type="text" class="form-control" id="tipo" name="tipo"
                            placeholder="Tipo publicación">
                        <input type="text" class="form-control" id="contenido" name="contenido"
                            placeholder="Contenido">
                    </div>
                    <div class="create-post-links">
                        <input type="hidden" class="form-control" id="usuario" name="usuario"
                            value="{{ $usuario->codigo_usuario }}">

                    </div>
                    <button type="submit" class="btn btn-success">POST</button>
                </form>
            </div>
            <div class="sort-by">
                <hr>
                <p>Sort by : <span>top <img src="images/down-arrow.png"></span> </p>

            </div>


            @foreach ($publicaciones as $publicacion)
                <div class="post">
                    <div class="post-author">
                        <img src="{{ $publicacion->foto_usuario }}">
                        <div>
                            <h1>{{ $publicacion->nombre_usuario }} {{ $publicacion->apellido_usuario }}</h1>
                            <small>{{ $publicacion->fecha_publicacion }}</small>
                        </div>
                    </div>
                    <p>{{ $publicacion->descripcion_publicacion }}
                    </p>
                    <img src="{{ $publicacion->contenido_publicacion }}" alt="Post" width="100%">



                    <div class="post-stats">
                        <div>
                            <img src="images/thumbsup.png">
                            <img src="images/love.png">
                            <img src="images/clap.png">
                            <span class="liked-users">{{ $publicacion->total_reacciones }}</span>
                        </div>
                        <div>
                            <span>{{ $publicacion->total_comentarios }} comentarios </span>
                        </div>
                    </div>
                    <div class="post-activity">
                        <div>
                            <img src="images/user-1.png" class="post-activity-user-icon">
                            <img src="images/down-arrow.png" class="post-activity-arrow-icon">

                        </div>

                        <div class="post-activity-link">
                            <form action=" {{ route('reaccionar.publicacion') }} " method="POST">
                                @csrf
                                <input type="hidden" class="form-control" id="codigo_publicacion"
                                    name="codigo_publicacion" value="{{ $publicacion->codigo_publicacion }}">
                                <input type="hidden" class="form-control" id="codigo_usuario" name="codigo_usuario"
                                    value="{{ $usuario->codigo_usuario }}">
                                <input type="hidden" class="form-control" id="tipo_reaccion" name="tipo_reaccion"
                                    value="1">
                                <img src="images/like.png">
                                <button type="submit" class="btn btn-success"><span>Recomendar</span></button>
                            </form>
                        </div>

                        <div class="post-activity-link">
                            <img src="images/comment.png">
                            <span>Comentar</span>
                            </button>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/share.png">
                            <span>Share</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/send.png">
                            <span>Send</span>
                        </div>
                    </div>
                </div>

                <div>
                    <form action=" {{ route('comentar.publicacion') }} " method="POST">
                        @csrf
                        <input type="text" class="form-control" id="codigo_comentario"
                            name="codigo_comentario" placeholder="Codigo comentario">
                        <input type="hidden" class="form-control" id="codigo_publicacion"
                            name="codigo_publicacion" value="{{ $publicacion->codigo_publicacion }}">
                        <input type="hidden" class="form-control" id="codigo_usuario" name="codigo_usuario"
                            value="{{ $usuario->codigo_usuario }}">
                        <input type="textarea" class="form-control" id="contenido_comentario" name="contenido_comentario" >
                        <img src="images/comment.png">
                        <button type="submit" class="btn btn-success"><span>Comentar</span></button>
                    </form>
                </div>

                <div class="comentarios">
                    <h5>Comentarios:</h5>
                    @if ($publicacion->comentarios->isEmpty())
                        <p>No hay comentarios aún.</p>
                    @else
                        @foreach ($publicacion->comentarios as $comentario)
                            <div class="comentario">
                                <strong>{{ $comentario->nombre_comentarista }} {{ $comentario->apellido_comentarista }}</strong>:
                                <p>{{ $comentario->contenido_comentario }}</p>
                                <small>{{ $comentario->fecha_comentario }}</small>
                            </div>
                        @endforeach
                    @endif
                </div>

                <br><br>
            @endforeach


        </div>
        <div class="right-sidebar">

            <div class="sidebar-ad">
                <small>Ad &middot; &middot; &middot;</small>
                <p>Master Web Development</p>
                <div>
                    <img src="{{ $usuario->fotografia }}">
                    <img src="images/mi-logo.png">

                </div>
                <b>Brand and Demand in Xiaomi</b>
                <a href="#" class="ad-link">Learn More</a>
            </div>


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
        function logoutConfirm(event) {
            event.preventDefault();
            if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>

    <script>
        document.getElementById('formComentario').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Cerrar modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('comentarioModal'));
                        modal.hide();

                        // Actualizar lista de comentarios
                        const comentarioHTML = `
                <div class="comentario">
                    <strong>${formData.get('codigo_usuario')}</strong>
                    <p>${formData.get('contenido_comentario')}</p>
                </div>`;
                        document.getElementById(`comentarios-publicacion-${formData.get('codigo_publicacion')}`)
                            .innerHTML += comentarioHTML;
                    }
                });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

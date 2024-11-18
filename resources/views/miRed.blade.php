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
            <a href="index.html" class="logo"><img src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <div class="search-box">
                <img src="images/search.png">
                <input type="text" placeholder="Search for anything">
            </div>
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#" class="active-link"><img src="images/home.png" alt="home">
                        <span>Home</span></a></li>
                <li><a href="#"><img src="images/network.png" alt="network"> <span>My Network</span></a></li>
                <li><a href="#"><img src="images/jobs.png" alt="jobs"> <span>Jobs</span></a></li>
                <li><a href="#"><img src="images/message.png" alt="message"> <span>Messaging</span></a></li>
                <li><a href="#"><img src="images/notification.png" alt="notification">
                        <span>Notifications</span></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="online">
                <img src="images/user-1.png" class="nav-profile-img" onclick="toggleMenu()">
            </div>
        </div>
        <!----Dropdown menu-->
        <div class="profile-menu-wrap" id="profileMenu">
            <div class="profile-menu">
                <div class="user-info">
                    <img src="images/user-1.png">
                    <div>
                        <h3>John Doe</h3>
                        <a href="#">See your profile</a>
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
                <a href="#" class="profile-menu-link">
                    <img src="images/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>


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
                                <th scope="row"><a class="aHref" href="">Grupos</a></th>
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
            <div class="bordeDiv">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <!-- Invitacion a la izquierda -->
                        <a class="navbar-brand" href="#">Invitacion</a>

                        <!-- Mostrar todo a la derecha -->
                        <div class="ms-auto">
                            <!-- ms-auto agrega un margen a la izquierda para empujar el siguiente elemento hacia la derecha -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Mostrar todo</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="navbar">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="{{ asset('images/empleo.jpeg') }}"
                                    alt="logoEmpleo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Empleos en
                                            Honduras
                                            te
                                            ha invitado a suscribirte a Vacantes Empleos en Honduras</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Aceptar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Rechazar</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
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
                    <div class="flex-item">
                        <div class="image-container">
                            <img src="{{ asset('images/user-2.png') }}" alt="logoEmpleo">
                            <p>José Perez</p>
                            <button type="button" class="btn btn-primary">Conectar</button>
                        </div>
                    </div>
                    <div class="flex-item">
                        <div class="image-container">
                            <img src="{{ asset('images/user-3.png') }}" alt="logoEmpleo">
                            <p>Marina Flores</p>
                            <button type="button" class="btn btn-primary">Conectar</button>
                        </div>
                    </div>
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
</body>

</html>

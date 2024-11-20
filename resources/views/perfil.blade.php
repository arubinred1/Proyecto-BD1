<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkedin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css\stylesPerfil.css') }}">
    <link rel="stylesheet" href="{{ asset('css\miRed.css') }}">

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

    <!--inicio perfil-->
    <div class="container">
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="images/cover-pic.png" width="100%">
                <div class="sidebar-profile-info">
                    <img src="images/user-1.png">
                    <h1>John Doe</h1>
                    <h2>Estudiante en Universidad Nacional Autónoma de Honduras (UNAH)</h2>

                    <ul>
                        <h3>Distrito central, Francisco Morazan Honduras</h3>
                        <li><a href="" class="colorHref">Informacion de contacto</a></li>
                        <li class="colorHref">2 contactos</span></li>
                        <li> <button type="button" class="btn btn-primary">Tengo interes</button> <button
                                type="button" class="btn btn-outline-primary">añadir seccion</button>
                            <button type="button" class="btn btn-outline-primary">Mejorar Perfil</button><span><button
                                    type="button" class="btn btn-outline-primary">Recursos</button></span>
                        </li>
                        <li>
                            <div class="flex-item">
                                <div class="image-container">

                                    <p>En busca de empleo
                                        Cargos de Ingeniero de software

                                        <a href=""  class="colorHref">Mostrar detalles</a>
                                    </p>

                                </div>
                            </div>
                            <div class="flex-item">
                                <div class="image-container">

                                    <p> Comparte que estás buscando personal y atrae a candidatos cualificados.
                                        <a href="" class="colorHref"> Comenzar </a>
                                    </p>

                                </div>
                            </div>
                        </li>
                    </ul>
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
                <a href="#"><img src="images/group.png">Data Analyst group</a>
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
        <!--fin perfil-->

        <div class="right-sidebar">
            <div class="sidebar-news">
                <img src="images/more.png" class="info-icon">
                <h3>Trending News</h3>

                <a href="#">High Demand for Skilled Employees</a>
                <span>1d ago &middot; 10,934 readers</span>


                <a href="#">Inflation in Canada Affects the Workforce</a>
                <span>2d ago &middot; 7,043 readers</span>


                <a href="#">Mass Recruiters fire Employees</a>
                <span>4d ago &middot; 17,789 readers</span>


                <a href="#">Crypto predicted to Boom this year</a>
                <span>9d ago &middot; 2, 436 readers</span>

                <a href="#" class="read-more-link">Read More</a>


            </div>

            <div class="sidebar-ad">
                <small>Ad &middot; &middot; &middot;</small>
                <p>Master Web Development</p>
                <div>
                    <img src="images/user-1.png">
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
</body>

</html>

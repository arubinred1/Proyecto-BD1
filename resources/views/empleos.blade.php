<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas de Empleo</title>
    <link rel="stylesheet" href="{{ asset('css\principal.css') }}">
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
    <header>
        <h1>Ofertas de Empleo</h1>
    </header>
    <nav class="navbar">
        <div class="navbar-left">
         <a href=" {{ route('principal') }} " class="logo"><img src="{{ asset('images/logo.png') }}" alt="logo">
         </a>
         <div class="search-box">
             <img src="images/search.png" >
             <input type="text" placeholder="Search for anything">
         </div>
        </div>
        <div class="navbar-center">
         <ul>
             <li><a href=" {{ route('principal') }} " class="active-link"><img src="images/home.png" alt="home"> <span>Home</span></a></li>
             <li><a href=" {{ route('mired') }} "><img src="images/network.png" alt="network"> <span>My Network</span></a></li>
             <li><a href=" {{ route('empleos') }} "><img src="images/jobs.png" alt="jobs"> <span>Jobs</span></a></li>
             <li><a href=" {{ route('mensajes') }} "mensajes><img src="images/message.png" alt="message"> <span>Messaging</span></a></li>
             <li><a href=" {{ route('notificaciones') }} "><img src="images/notification.png" alt="notification"> <span>Notifications</span></a></li>
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
             <a href="#" class="profile-menu-link">
                 <img src="images/logout.png">
                 <p>Logout</p>
                 <span>></span>
             </a>
             
 
         </div>
        </div>
 
     </nav>

    

    <div class="container" id="job-list">
        <!-- Las tarjetas de trabajo se generarán dinámicamente -->
    </div>

    <footer>
        © 2024 Linkedin
    </footer>

    <script>
        // Ejemplo de datos de empleos
        const jobs = [
            {
                title: "Desarrollador Front-End",
                company: "Tech Innovators",
                location: "Remoto",
                description: "Buscamos un desarrollador front-end con experiencia en React y CSS."
            },
            {
                title: "Analista de Datos",
                company: "Data Insights",
                location: "USA, Florida",
                description: "Análisis de datos para proyectos empresariales. Conocimiento en Python y SQL."
            },
            {
                title: "Diseñador UI/UX",
                company: "Innova",
                location: "Honduras, San Pedro Sula",
                description: "Responsable de diseñar experiencias de usuario modernas y atractivas."
            }
        ];

        // Contenedor para las ofertas de empleo
        const jobList = document.getElementById('job-list');

        // Generar tarjetas de empleo dinámicamente
        jobs.forEach(job => {
            const jobCard = document.createElement('div');
            jobCard.className = 'job-card';

            jobCard.innerHTML = `
                <h2>${job.title}</h2>
                <p><strong>Empresa:</strong> ${job.company}</p>
                <p><strong>Ubicación:</strong> ${job.location}</p>
                <p>${job.description}</p>
                <div class="job-actions">
                    <button class="apply-button">Aplicar</button>
                    <button class="save-button">Guardar</button>
                </div>
            `;

            jobList.appendChild(jobCard);
        });

        // Agregar funcionalidad a los botones de guardar
        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('save-button')) {
                event.target.textContent = 'Guardado';
                event.target.disabled = true;
            }
        });

        let profileMenu = document.getElementById("profileMenu");

    function toggleMenu(){
        profileMenu.classList.toggle("open-menu");
    }

    let sideActivity = document.getElementById("sidebarActivity");
    let moreLink = document.getElementById("showMoreLink");

    function toggleActivity(){
        sideActivity.classList.toggle("open-activity");
        if (sideActivity.classList.contains("open-activity")) {
            moreLink.innerHTML="Show less <b>-</b>";
            
        }
        else{
            moreLink.innerHTML="Show More <b>+</b>";
        }
    }
    </script>
</body>
</html>

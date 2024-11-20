<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas de Empleo</title>
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
    </script>
</body>
</html>

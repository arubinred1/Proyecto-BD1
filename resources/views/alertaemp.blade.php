<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador de Oportunidades de Empleo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f2ef;
      margin: 0;
      padding: 20px;
    }

    .job-search-container {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .job-search-container h2 {
      font-size: 20px;
      margin-bottom: 20px;
      text-align: center;
      color: #0a66c2;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .form-group input, .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }

    .submit-btn {
      display: inline-block;
      width: 100%;
      text-decoration: none;
      background-color: #0a66c2;
      color: #fff;
      padding: 10px 20px;
      border-radius: 20px;
      font-size: 14px;
      font-weight: bold;
      text-align: center;
      transition: background-color 0.3s;
      cursor: pointer;
      border: none;
    }

    .submit-btn:hover {
      background-color: #004182;
    }
  </style>
</head>
<body>
  <div class="job-search-container">
    <h2>Filtra tus Oportunidades de Empleo</h2>
    <form id="jobSearchForm">
      <div class="form-group">
        <label for="jobTitle">Cargo de trabajo deseado:</label>
        <input type="text" id="jobTitle" name="jobTitle" placeholder="Ejemplo: Desarrollador Frontend">
      </div>
      <div class="form-group">
        <label for="jobMode">Modalidad:</label>
        <select id="jobMode" name="jobMode">
          <option value="Presencial">Presencial</option>
          <option value="Remoto">Remoto</option>
          <option value="Híbrido">Híbrido</option>
        </select>
      </div>
      <div class="form-group">
        <label for="location">Ubicación deseada:</label>
        <input type="text" id="location" name="location" placeholder="Ejemplo: Bogotá, Colombia">
      </div>
      <button type="button" class="submit-btn" onclick="showJobPreferences()">Buscar Empleos</button>
    </form>
    <div id="results" style="margin-top: 20px; font-size: 14px; color: #333;"></div>
  </div>

  <script>
    function showJobPreferences() {
      const jobTitle = document.getElementById('jobTitle').value || 'No especificado';
      const jobMode = document.getElementById('jobMode').value;
      const location = document.getElementById('location').value || 'No especificado';

      const resultsDiv = document.getElementById('results');
      resultsDiv.innerHTML = `
        <p><strong>Has filtrado por:</strong></p>
        <p><strong>Cargo:</strong> ${jobTitle}</p>
        <p><strong>Modalidad:</strong> ${jobMode}</p>
        <p><strong>Ubicación:</strong> ${location}</p>
        <p>¡Explora las oportunidades disponibles según tus preferencias!</p>
      `;
    }
  </script>
</body>
</html>

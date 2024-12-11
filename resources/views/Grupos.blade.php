<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sección de Grupos</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #f3f2ef;
    }

    /* Encabezado */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 10px 20px;
      border-bottom: 1px solid #e0e0e0;
    }

    .header .logo {
      font-size: 24px;
      color: #0073b1;
      font-weight: bold;
    }

    .header input {
      width: 300px;
      padding: 8px 10px;
      border: 1px solid #d0d0d0;
      border-radius: 5px;
      outline: none;
    }

    .header nav {
      display: flex;
      gap: 20px;
    }

    .header nav a {
      color: #666;
      text-decoration: none;
      font-size: 14px;
    }

    .header nav a:hover {
      color: #000;
    }

    /* Contenedor principal */
    .container {
      max-width: 1200px;
      margin: 20px auto;
      display: flex;
      gap: 20px;
    }

    /* Sección izquierda */
    .left-section {
      flex: 3;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .tabs {
      display: flex;
      border-bottom: 2px solid #e0e0e0;
      margin-bottom: 20px;
    }

    .tab {
      padding: 10px 20px;
      cursor: pointer;
      color: #666;
    }

    .tab.active {
      border-bottom: 2px solid #0073b1;
      color: #0073b1;
    }

    .group-search {
      text-align: center;
      margin-top: 40px;
    }

    .group-search img {
      width: 150px;
      margin-bottom: 20px;
    }

    .group-search h2 {
      font-size: 20px;
      margin: 0;
      color: #333;
    }

    .group-search p {
      font-size: 14px;
      color: #666;
    }

    .group-search button {
      background-color: #0073b1;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .group-search button:hover {
      background-color: #005580;
    }

    /* Sección derecha */
    .right-section {
      flex: 1;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .right-section h3 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #333;
    }

    .suggested-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .suggested-group img {
      width: 50px;
      height: 50px;
      border-radius: 5px;
      margin-right: 10px;
    }

    .group-details {
      flex: 1;
    }

    .group-details h4 {
      font-size: 14px;
      margin: 0;
      color: #333;
    }

    .group-details p {
      font-size: 12px;
      color: #666;
      margin: 0;
    }

    .join-button {
      background-color: #0073b1;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 12px;
    }

    .join-button:hover {
      background-color: #005580;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <div class="logo">in</div>
    <input type="text" placeholder="Buscar">
    <nav>
      <a href=" {{ route('principal') }} ">Inicio</a>
      <a href=" {{ route('mired') }} ">MiRed</a>
      <a href=" {{ route('empleos') }} ">Empleos</a>
      <a href=" {{ route('mensajes') }} ">Mensajes</a>
      <a href=" {{ route('notificaciones') }} ">Notificaciones</a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="container">
    <!-- Left Section -->
    <div class="left-section">
      <div class="tabs">
        <div class="tab active">Tus grupos</div>
        <div class="tab">Solicitados</div>
      </div>
      <div class="group-search">
        <img src="https://via.placeholder.com/150" alt="Buscar grupos">
        <h2>Buscar grupos</h2>
        <p>Encuentra otras comunidades que te ayudan a alcanzar tus objetivos.</p>
        <button>Buscar</button>
      </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <h3>Grupos que podrían interesarte</h3>
      <div class="suggested-group">
        <img src="https://via.placeholder.com/50" alt="Grupo">
        <div class="group-details">
          <h4>Trabajo Remoto en Latinoamérica - IT</h4>
          <p>232,880 miembros</p>
        </div>
        <button class="join-button">Unirse</button>
      </div>
      <div class="suggested-group">
        <img src="https://via.placeholder.com/50" alt="Grupo">
        <div class="group-details">
          <h4>Bolsa de Trabajo para Profesionales</h4>
          <p>39,035 miembros</p>
        </div>
        <button class="join-button">Unirse</button>
      </div>
      <div class="suggested-group">
        <img src="https://via.placeholder.com/50" alt="Grupo">
        <div class="group-details">
          <h4>Oportunidades Laborales</h4>
          <p>274,436 miembros</p>
        </div>
        <button class="join-button">Unirse</button>
      </div>
    </div>
  </div>
</body>
</html>

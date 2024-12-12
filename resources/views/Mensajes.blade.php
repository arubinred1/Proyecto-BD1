<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mensajes LinkedIn</title>
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

    /* Panel de mensajes */
    .left-panel {
      flex: 1;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .search-bar input {
      width: 100%;
      padding: 10px;
      border: 1px solid #d0d0d0;
      border-radius: 5px;
    }

    .filters {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .filters button {
      background-color: #f3f2ef;
      border: none;
      padding: 8px 15px;
      border-radius: 20px;
      font-size: 12px;
      color: #333;
      cursor: pointer;
    }

    .filters button.active {
      background-color: #0073b1;
      color: white;
    }

    .message-list {
      flex: 1;
      overflow-y: auto;
      margin-top: 10px;
    }

    .message-item {
      display: flex;
      gap: 10px;
      padding: 10px;
      border-bottom: 1px solid #e0e0e0;
      align-items: center;
    }

    .message-item img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .message-info {
      flex: 1;
    }

    .message-info h4 {
      margin: 0;
      font-size: 14px;
      color: #333;
    }

    .message-info p {
      margin: 0;
      font-size: 12px;
      color: #666;
    }

    .message-time {
      font-size: 12px;
      color: #999;
    }

    /* Detalle del mensaje */
    .message-detail {
      flex: 2;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .message-detail h3 {
      font-size: 16px;
      margin: 0;
      color: #333;
    }

    .message-detail .message-content {
      flex: 1;
      overflow-y: auto;
      margin-top: 10px;
    }

    .message-content p {
      font-size: 14px;
      color: #333;
      margin-bottom: 10px;
    }

    /* Publicidad */
    .right-panel {
      flex: 1;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .ad {
      text-align: center;
      margin-bottom: 20px;
    }

    .ad img {
      max-width: 100%;
      border-radius: 5px;
    }

    .premium {
      text-align: left;
      font-size: 14px;
      color: #666;
    }

    .premium button {
      background-color: #0073b1;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <div class="logo">in</div>
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
    <!-- Left Panel -->
    <div class="left-panel">
      <div class="search-bar">
        <input type="text" placeholder="Buscar mensajes">
      </div>
      <div class="filters">
        <button class="active">Prioritarios</button>
        <button>No leídos</button>
        <button>Borradores</button>
        <button>Mis contactos</button>
        <button>Mensajes InMail</button>
      </div>
      <div class="message-list">
        <div class="message-item">
          <img src="https://via.placeholder.com/50" alt="Kristen J.">
          <div class="message-info">
            <h4>Kristen J.</h4>
            <p>LinkedIn Offer - Probar</p>
          </div>
          <span class="message-time">19 nov</span>
        </div>
        <div class="message-item">
          <img src="https://via.placeholder.com/50" alt="Ariel Pereyra">
          <div class="message-info">
            <h4>Ariel Pereyra</h4>
            <p>Maestría en Marketing Digital</p>
          </div>
          <span class="message-time">15 nov</span>
        </div>
      </div>
    </div>

    <!-- Message Detail -->
    <div class="message-detail">
      <h3>Kristen J.</h3>
      <div class="message-content">
        <p>
          Hola, Usuario x:
          <br>
          Me llamo Kristen y formo parte del equipo de LinkedIn.
        </p>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="right-panel">
      <div class="ad">
        <img src="https://via.placeholder.com/300x200" alt="Publicidad">
        <p>Find a job that's right for you.</p>
      </div>
      <div class="premium">
        <p>Amplía tu red con Premium.</p>
        <button>Probar Premium</button>
      </div>
    </div>
  </div>
</body>
</html>

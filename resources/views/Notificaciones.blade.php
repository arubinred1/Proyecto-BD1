<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notificaciones LinkedIn</title>
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
      flex: 1;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-card {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .profile-card h3 {
      font-size: 18px;
      margin: 0;
      color: #333;
    }

    .profile-card p {
      font-size: 14px;
      color: #666;
    }

    .profile-card button {
      width: 100%;
      border: 1px dashed #0073b1;
      padding: 8px;
      border-radius: 5px;
      color: #0073b1;
      background: none;
      cursor: pointer;
      font-size: 14px;
    }

    .manage-notifications {
      margin-top: 20px;
      text-align: left;
    }

    .manage-notifications a {
      font-size: 14px;
      color: #0073b1;
      text-decoration: none;
    }

    /* Sección central */
    .center-section {
      flex: 2;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .filter-buttons {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
    }

    .filter-buttons button {
      background-color: #f3f2ef;
      border: none;
      padding: 10px 15px;
      border-radius: 20px;
      color: #333;
      font-size: 14px;
      cursor: pointer;
    }

    .filter-buttons button.active {
      background-color: #0073b1;
      color: white;
    }

    .notification {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
      border-bottom: 1px solid #e0e0e0;
      padding-bottom: 10px;
    }

    .notification img {
      width: 50px;
      height: 50px;
      border-radius: 5px;
    }

    .notification-details {
      flex: 1;
    }

    .notification-details h4 {
      font-size: 14px;
      margin: 0;
      color: #333;
    }

    .notification-details p {
      font-size: 12px;
      color: #666;
      margin: 0;
    }

    .notification-time {
      font-size: 12px;
      color: #999;
    }

    /* Sección derecha */
    .right-section {
      flex: 1;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .suggestion-card {
      margin-bottom: 20px;
      text-align: left;
    }

    .suggestion-card h4 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #333;
    }

    .suggestion-card p {
      font-size: 14px;
      color: #666;
    }

    .suggestion-card button {
      background-color: #0073b1;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 12px;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 12px;
      color: #666;
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
    <!-- Left Section -->
    <div class="left-section">
      <div class="profile-card">
        <img src="https://via.placeholder.com/80" alt="Foto de perfil">
        <h3>Usuario x</h3>
        <p>Tegucigalpa, Francisco Morazán</p>
        <button>+ Experiencia</button>
      </div>
      <div class="manage-notifications">
        <p>Gestiona tus notificaciones</p>
        <a href="#">Ver configuración</a>
      </div>
    </div>

    <!-- Center Section -->
    <div class="center-section">
      <div class="filter-buttons">
        <button class="active">Todo</button>
        <button>Empleos</button>
        <button>Mis publicaciones</button>
        <button>Menciones</button>
      </div>
      <div class="notification">
        <img src="https://via.placeholder.com/50" alt="Notificación">
        <div class="notification-details">
          <h4>Conocer cómo reclutan las empresas...</h4>
          <p>Mejorará tu búsqueda laboral.</p>
        </div>
        <span class="notification-time">1 hora</span>
      </div>
      <div class="notification">
        <img src="https://via.placeholder.com/50" alt="Notificación">
        <div class="notification-details">
          <h4>No tener una estrategia puede...</h4>
          <p>Perjudicar tu bienestar.</p>
        </div>
        <span class="notification-time">6 horas</span>
      </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <div class="suggestion-card">
        <h4>RAP Honduras</h4>
        <p>Mantente al tanto de la información más reciente.</p>
        <button>Seguir</button>
      </div>
      <div class="footer">
        <p>Acerca de · Accesibilidad · Ayuda</p>
      </div>
    </div>
  </div>
</body>
</html>

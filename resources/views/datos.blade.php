<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LinkedIn Registration - Name</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f2ef;
      color: #333;
    }

    .header {
      background-color: #0073b1;
      padding: 20px;
      text-align: center;
      color: white;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
    }

    .main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 120px);
    }

    .registration {
      background: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    input:focus {
      outline: none;
      border-color: #0073b1;
    }

    .btn {
      background-color: #0073b1;
      color: white;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .btn:hover {
      background-color: #005983;
    }

    .footer {
      background: #f3f2ef;
      text-align: center;
      padding: 20px;
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="container">
      <h1 class="logo">LinkedIn</h1>
    </div>
  </header>
  <main class="main">
    <section class="registration">
      <div class="container">
        <h2>Cuentanos sobre ti</h2>
        <form action="#" class="registration-form">
          <div class="form-group">
            <label for="first-name">Nombres</label>
            <input type="text" id="first-name" placeholder="Ingresa tu nombre" required>
          </div>
          <div class="form-group">
            <label for="last-name">Apellidos</label>
            <input type="text" id="last-name" placeholder="Ingresa tu apellido" required>
          </div>
          <button type="submit" class="btn">Continuar</button>
        </form>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <p>LinkedIn &copy; 2024</p>
    </div>
  </footer>
</body>
</html>

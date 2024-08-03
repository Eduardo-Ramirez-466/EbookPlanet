<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="styless.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Documento</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>
<body>
  <main>
    <div>
      <h1>Iniciar sesión</h1>
      <?php
      if (isset($_GET['error'])) {
      ?>
        <p class="error">
          <?php
          echo $_GET['error']
          ?>
        </p>
      <?php
      }
      ?>
      <form action="iniciar_sesion.php" method="POST">
        <div>
          <input type="email" name="correo" placeholder="Correo" required />
          <input type="password" name="contraseña" placeholder="Contraseña" required />
        </div>
        <div class="above">
          <input type="submit" value="Iniciar sesión"/>
        </div>
      </form>
      <div class="registrar">
        <p>
          ¿No tiene cuenta?
          <a href="#">Registrarse</a>
        </p>
      </div>
    </div>
  </main>
</body>
</html>

<?php
header("Location: ./pages/companyconfig.php");
exit;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" href="assets/favicon.svg" type="image/x-icon">
</head> 
<body>
  <main>
    <form action="./auth/login.php" method="POST" class="card">
      <h1 class="card-title">Iniciar sesión</h1>
      <div class="card-main">
        <label class="label-credentials" for="email">
          <span>Correo electronico:</span>
          <input class="credentials" type="email" placeholder="juancasas@gmail.com" name="correo" required>
        </label>
        <label class="label-credentials" for="password">
          <span>Contraseña:</span>
          <input class="credentials" type="password" placeholder="------" name="contrasenia" required>
        </label>
        <input type="submit" class="login-btn" value="Iniciar sesión">
      </div>
      <div class="card-footer">
        <p class="forgot-password">¿Puede registrar sus datos?</p>
        <a class="create-account" href="./pages/companyconfig.php">Registrarse</a>
      </div>
    </form>
  </main>
</body>
</html>

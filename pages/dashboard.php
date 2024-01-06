<?php
/* session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Obtener el rol del usuario
$userRole = $_SESSION['user']['role']; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
</head>
<body>
  <header>
    <div class="menu-header">
      <nav>
        <ul class="navbar">
          <li><a href="../pages/dashboard.html">Dashboard</a></li>
          <li><a href="../pages/usuarios.html">Usuarios</a></li>
          <li><a href="../pages/roles.html">Roles</a></li>
          <!-- Menú para trabajador -->
          <?php /* if ($userRole == 'worker'): */ ?>
          <li class="list-navbar">
            <a href="../pages/permisos.html">Permisos</a>
            <ul class="navbar-submenu">
              <li><a href="../pages/permisos.html">Permisos</a></li>
              <li><a href="../pages/permisos.html">Permisos</a></li>
              <li><a href="../pages/permisos.html">Permisos</a></li>
            </ul>
          </li>
          <!-- Menú para admin -->
           <?php /* elseif ($userRole == 'admin'):  */ ?>
          <li class="list-navbar">
            <a href="../pages/products.html">Productos</a>
            <ul class="navbar-submenu">
              <li><a href="">Productos Usados</a></li>
              <li><a href="">Agregar productos</a></li>
            </ul>
          </li>
          <?php /*  elseif ($userRole == 'root'): */ ?>
          <li class="list-navbar">
            <a href="">j</a>
             <!-- Menú para root -->
            <ul class="navbar-submenu">
                <li><a href="#">Desarrollo</a></li>
                <li><a href="#">Base de Datos</a></li>
                <li><a href="#">Configuración Avanzada</a></li>
                <li><a href="#">Informes Personalizados</a></li>
                <li><a href="#">Mensajes</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <a href="../pages/login.html" class="logout-btn">Cerrar sesión</a>
    </div>
  </header>
  <main>
    <h1>Bienvenido al dashboard</h1>
  </main>
</body>
</html>

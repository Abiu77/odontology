<?php
  // Importa la configuración de la base de datos
  include '../config/db.php';

  $email = $_POST['correo'];
  $password = $_POST['contrasenia'];

  // Busca el usuario por su correo electrónico
  $result = mysqli_query($connect, "SELECT * FROM erpo_usersistema WHERE correo='$email'");

  if ($result && $user = mysqli_fetch_assoc($result)) {
    // Verifica la contraseña utilizando password_verify
    if (password_verify($password, $user['contrasenia'])) {
      // La contraseña es válida
      session_start();
      $_SESSION['user_id'] = $user['id']; // Suponiendo que 'id' es la columna que contiene el ID del usuario
      header("location: ../index.html");
      exit();
    }
  }

  // Si no se encontró el usuario o la contraseña no coincide
  echo '
    <script>
      alert("Usuario no encontrado o la contraseña es incorrecta, inténtalo de nuevo");
      window.location = "../index.html";
    </script>
  ';

  mysqli_close($connect);
?>

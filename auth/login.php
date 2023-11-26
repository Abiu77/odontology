<?php
  // Importa la configuración de la base de datos
  include '../config/db.php';

  $email = $_POST['correo'];
  $password = $_POST['contrasenia'];

  $result = mysqli_query($connect, "SELECT * FROM erpo_usersistema WHERE correo='$email' and contrasenia='$password'");

  if ($result) {
    echo '
      <script>
        alert("Bienvenido");
        window.location = "../index.html";
        //window.location = "../dasboard.html";
      </script>
    ';
    exit;
  } else {
    echo '
      <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../index.html";
      </script>
    ';
    exit;
  }  
?>

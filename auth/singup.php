<?php
  // Importa la configuración de la base de datos
  include '../config/db.php';

  $name = $_POST['nombre'];
  $lastname = $_POST['apellido'];
  $username = $_POST['username'];
  $email = $_POST['correo'];
  $password = $_POST['contrasenia'];

  // Genera un hash seguro de la contraseña
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

  $query = "INSERT INTO erpo_usersistema (nombre, apellido, username, correo, contrasenia, fingerprint)
  VALUES ('$name', '$lastname', '$username', '$email', '$hashedPassword', '')";

  $execute = mysqli_query($connect, $query);

  if($execute){
    echo '
      <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.html";
      </script>
    ';
  }else{
    echo '
      <script>
        alert("Intentalo de nuevo, usuario no almacenado");
        window.location = "../index.html";
      </script>
    ';
  }

  mysqli_close($connect);
?>

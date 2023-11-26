<?php
  // Importa la configuración de la base de datos
  include '../config/db.php';

  $email = $_POST['email'];
  $password = $_POST['contrasenia'];

  $validate = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");

  if (mysqli_num_rows($validate) > 0) {
    $data = mysqli_fetch_array($validate);
    session_start();
    $_SESSION['active'] = true;
    $_SESSION['idUser'] = $data['id'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['user'] = $data['user'];
    $_SESSION['rol'] = $data['rol'];

    header("location: ../index.php");
  } else {
    header("location: ../index.html?error=login");
  }
?>
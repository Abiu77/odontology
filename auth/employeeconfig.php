<?php
include '../config/db.php';

// Recibe datos del formulario
$email = $_POST['correo'];
$password = $_POST['contrasenia'];


// SQL INJECTION:
// Preparar la consulta con una consulta preparada
$query = "SELECT * FROM erpo_usersistema WHERE correo=?";
$stmt = mysqli_prepare($connect, $query);

?>

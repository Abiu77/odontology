<?php
include '../config/db.php';

// Recibe datos del formulario
$type_docidenty = $_POST['id_tipodocidentidad'];
$business_name = $_POST['cmp_pass'];
$address = $_POST['cmp_direccion'];
$phone = $_POST['cmp_telefono'];
$email = $_POST['cmp_correo'];
$logo = $_POST['cmp_logo'];

// SQL INJECTION:
// Preparar la consulta con una consulta preparada
$query = "INSERT INTO erp_empresa WHERE (id_tipodocidentidad, cmp_razonsocial, cmp_direccion, cmp_telefono, cmp_correo, cmp_logo) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($connect, $query);

// Verificar si la preparación fue exitosa
if ($stmt) {
  // Vincular los parámetros
  mysqli_stmt_bind_param($stmt, "sssss", $type_docidenty, $business_name, $address, $phone, $email, $logo);

  // Ejecutar la consulta
  $execute = mysqli_stmt_execute($stmt);

  // Cerrar la consulta preparada
  mysqli_stmt_close($stmt);
} else {
  // Manejar el error en la preparación de la consulta
  die("Error en la preparación de la consulta: " . mysqli_error($connect));
}
 
if ($execute) {
  // XSS:
  // Utilizar htmlspecialchars para evitar ataques XSS
  $message = htmlspecialchars("Se ha registrado correctamente");
  echo ' 
    <script>
      alert("' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '");
      window.location = "../../employeeconfig.php";
    </script>
  ';
  exit;
} else {
  $message = htmlspecialchars("Usuario no almacenado, por favor verifique los datos introducidos");
  echo '
    <script>
      alert("' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '");
      window.location = "../index.html";
    </script>
  ';
  exit;
}

mysqli_close($connect);
?>

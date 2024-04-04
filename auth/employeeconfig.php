<?php
include '../config/db.php'; 

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtiene los datos del formulario
  $country = $_POST['country'];
  $province = $_POST['province'];
  $tipo_documento = $_POST['select'];
  $razon_social = $_POST['business'];
  $direccion = $_POST['address'];
  $telefono = $_POST['phone'];
  $email = $_POST['email'];
  $logo = $_POST['logo']

  // Prepara y ejecuta la consulta SQL para insertar los datos en la base de datos
  $query = "INSERT INTO erpo_empresa (country, province, id_tipodocidentidad, cmp_razonsocial, cmp_direccion, cmp_telefono, cmp_email, cmp_logo ) VALUES (?, ?, ?, ?, ?, ?)";
  $statement = $connect->prepare($query);
  $statement->bind_param("ssssss",   $country,  $province, $tipo_documento, $razon_social, $direccion, $telefono, $email, $logo);

  if ($statement->execute()) {
    // Si la consulta se ejecuta correctamente, redirige o muestra un mensaje de éxito
    echo "Los datos se han insertado correctamente.";
    // Puedes redirigir a otra página después de insertar los datos si lo deseas
    header("Location: ../pages/employeeconfig.php");
    exit();
  } else {
    echo "Error al insertar datos: " . $connect->error;
  }
}
?>

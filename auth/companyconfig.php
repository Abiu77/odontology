<?php
include '../config/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $document_type = $_POST['document_type'];
  $business = $_POST['business'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $logo = $_POST['logo'];

  $query = "INSERT INTO erpo_empresa (id_tipodocidentidad, cmp_razonsocial, cmp_direccion, cmp_telefono, cmp_email, cmp_logo) VALUES (?, ?, ?, ?, ?, ?)";
  $statement = $connect->prepare($query);
  $statement->bind_param("ssssss", $document_type, $business, $address, $phone, $email, $logo);

  if ($statement->execute()) {
    echo "Los datos se han insertado correctamente.";
    header("Location: ../pages/employeeconfig.php");
    exit();
  } else {
    echo "Error al insertar datos: " . $connect->error;
  }
}
?>
 
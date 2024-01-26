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
$query = "INSERT INTO erp_empresa WHERE (cmp_tipo_docidentidad, cmp_razonsocial, cmp_direccion, cmp_telefono, cmp_correo, cmp_logo) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($connect, $query);

?>

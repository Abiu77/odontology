<?php
include '../config/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $country = $_POST['country'];
  $province = $_POST['province'];
  $documentType = $_POST['document_type'];
  $name = $_POST['name'];
  $lastName = $_POST['last_name'];
  $birthdate = $_POST['birthdate'];
  $landline = $_POST['landline'];
  $mobilePhone = $_POST['mobile_phone'];
  $familyPhone = $_POST['family_phone'];
  $familyDescription = $_POST['family_description'];
  $email = $_POST['email'];
  $area = $_POST['area'];
  $position = $_POST['position'];

  $query = "INSERT INTO erpo_personal (id_pais, id_provincia, id_tipodocidentidad, cmp_nombre, cmp_apellido, cmp_fecha_nac, cmp_t_fijo, cmp_t_movil, cmp_t_familiar, cmp_t_descr_tfamiliar, cmp_email, cmp_area, cmp_cargo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $statement = $connect->prepare($query);
  $statement->bind_param("sssssssssssss", $country, $province, $documentType, $name, $lastName, $birthdate, $landline, $mobilePhone, $familyPhone, $familyDescription, $email, $area, $position);

  if ($statement->execute()) {
    echo "Los datos se han insertado correctamente.";
    header("Location: ../index.php");
    exit();
  } else {
    echo "Error al insertar datos: " . $connect->error;
  }
}
?>

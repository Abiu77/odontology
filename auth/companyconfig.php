<?php
 include '../config/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $document_type = $_POST['document_type'];
    $business = $_POST['business'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   /*  $logo_temp = $_FILES['logo']['tmp_name'];
    $logo_path = "ruta_de_guardado_en_servidor/" . $_FILES['logo']['name'];
    move_uploaded_file($logo_temp, $logo_path); */

    $query = "INSERT INTO erpo_empresa (id_tipodocidentidad, cmp_razonsocial, cmp_direccion, cmp_telefono, cmp_email) VALUES (?, ?, ?, ?, ?)";
    $statement = $connect->prepare($query);
    $statement->bind_param("sssss", $document_type, $business, $address, $phone, $email);

    if ($statement->execute()) {
        echo "Los datos se han insertado correctamente.";
        header("Location: ../pages/employeeconfig.php");
        exit();
    } else {
        echo "Error al insertar datos: " . $connect->error;
    }
}
?>

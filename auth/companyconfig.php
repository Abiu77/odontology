<?php
 include '../config/db.php'; 

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $tipo_documento = $_POST['select'];
    $razon_social = $_POST['business'];
    $direccion = $_POST['address'];
    $telefono = $_POST['phone'];
    $email = $_POST['email'];
   /*  $logo_temp = $_FILES['logo']['tmp_name'];
    $logo_path = "ruta_de_guardado_en_servidor/" . $_FILES['logo']['name'];
    move_uploaded_file($logo_temp, $logo_path); */

    // Prepara y ejecuta la consulta SQL para insertar los datos en la base de datos
    $query = "INSERT INTO erpo_empresa (id_tipodocidentidad, cmp_razonsocial, cmp_direccion, cmp_telefono, cmp_email) VALUES (?, ?, ?, ?, ?)";
    $statement = $connect->prepare($query);
    $statement->bind_param("sssss", $tipo_documento, $razon_social, $direccion, $telefono, $email);

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

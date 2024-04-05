<?php
include '../config/db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/index.css">
   <link rel="stylesheet" href="../css/responsive.css">
  <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
</head>
<body>
  <main>
     <h1 class="title-form">Proceso de configuración sistena ERPO_ODONTO</h1>
    <form action="../auth/employeeconfig.php" method="POST" class="card">
      <section>
        <h3 class="card-title">Personal</h3>
        <div class="card-form card-section">
          <label class="label-credentials" for="country">
            <span>País</span>
            <select name="country" class="credentials" onchange="funcion en javascrit">
            <?php 
            $query="SELECT * FROM erpo_pais";
            $result = mysqli_query($connect, $query);

            while($show=mysqli_fetch_array($result)){
              ?>
                <option value="<?php echo $show['id']; ?>" selected><?php echo $show['cmp_pais'] ?></option>
              <?php
            }
            ?>
            </select>
          </label>
          <label class="label-credentials" for="province">
            <span>Provincia</span>
            <select name="province" class="credentials">
            <?php
            $query="SELECT * FROM erpo_provincia";
            $result = mysqli_query($connect, $query);

            while($show=mysqli_fetch_array($result)){
              ?>
                <option value="<?php echo $show['id']; ?>" selected><?php echo $show['cmp_provincia'] ?></option>
              <?php
            }
            ?>
            </select>
          </label>
          <label class="label-credentials" for="document_type">
            <span>tipo de documento</span>
            <select name="document_type" class="credentials">
            <?php 
            $query="SELECT * FROM erpo_tipodocidentidad";
            $result = mysqli_query($connect, $query);

            while($show=mysqli_fetch_array($result)){
              ?>
                <option value="<?php echo $show['id']; ?>" selected><?php echo $show['cmp_tipo_docidentidad'] ?></option>
              <?php
            }
            ?>
            </select>
          </label>
          <label class="label-credentials" for="name">
            <span>Nombre</span>
            <input class="credentials" type="text" name="name" required>
          </label>
          <label class="label-credentials" for="last_name">
            <span>Apellido</span>
            <input class="credentials" type="text" name="last_name" required>
          </label>
          <label class="label-credentials" for="birthdate">
            <span>Fecha nacimiento</span>
            <input class="credentials" type="date" name="birthdate" required>
          </label>
          <label class="label-credentials" for="landline">
            <span>Telefono fijo</span>
            <input class="credentials" type="text" name="landline" required>
          </label>
          <label class="label-credentials" for="mobile_phone">
            <span>Telefono movil</span>
            <input class="credentials" type="text" name="mobile_phone" required>
          </label>
          <label class="label-credentials" for="family_phone">
            <span>Telefono familiar</span>
            <input class="credentials" type="text" name="family_phone" required>
          </label>
          <label class="label-credentials" for="family_description">
            <span>Descripcion familiar</span>
            <input class="credentials" type="text" name="family_description" required>
          </label>
          <label class="label-credentials" for="email">
            <span>Email</span>
            <input class="credentials" type="text" name="email" required>
          </label>
          <label class="label-credentials" for="area">
            <span>Área</span>
            <input class="credentials" type="text" name="area" required>
          </label>
          <label class="label-credentials" for="position">
            <span>Cargo</span>
            <input class="credentials" type="text" name="position" required>
          </label>
        </div>
      </section>
      <input type="submit" class="login-btn" value="Enviar">
    </form>
  </main>
</body>
</html>

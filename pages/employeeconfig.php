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
  <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
</head>
<body>
  <main>
    <form action="" method="POST" class="card">
      <section>
        <h3 class="card-title">Personal</h3>
        <div class="card-form card-section">
          <label class="label-credentials" for="country">
            <span>País</span>
            <select name="select" class="credentials">
            <?php 
            $query="SELECT * FROM erpo_pais";
            $result = mysqli_query($connect, $query);

            while($show=mysqli_fetch_array($result)){
              ?>
                <option value="value1" selected><?php echo $show['cmp_pais'] ?></option>
              <?php
            }
            ?>
            </select>
          </label>
          <label class="label-credentials" for="province">
            <span>Provincia</span>
            <select name="select" class="credentials">
            <?php
            $query="SELECT DISTINCT cmp_provincia FROM erpo_provincia";
            $result = mysqli_query($connect, $query);

            while($show=mysqli_fetch_array($result)){
              ?>
                <option value="value1" selected><?php echo $show['cmp_provincia'] ?></option>
              <?php
            }
            ?>
            </select>
          </label>
          <label class="label-credentials" for="document-type">
            <span>tipo de documento</span>
            <select name="select" class="credentials">
            <?php 
            $query="SELECT * FROM erpo_tipodocidentidad";
            $result = mysqli_query($connect, $query);

            while($show=mysqli_fetch_array($result)){
              ?>
                <option value="value1" selected><?php echo $show['cmp_tipo_docidentidad'] ?></option>
              <?php
            }
            ?>
            </select>
          </label>
          <label class="label-credentials" for="name">
            <span>Nombre</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="last-name">
            <span>Apellido</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="birthdate">
            <span>Fecha nacimiento</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="landline">
            <span>Telefono fijo</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="mobile-phone">
            <span>Telefono movil</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="family-phone">
            <span>Telefono familiar</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="family-description">
            <span>Descripcion familiar</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="email">
            <span>Email</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="area">
            <span>Área</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="position">
            <span>Cargo</span>
            <input class="credentials" type="text" required>
          </label>
        </div>
      </section>
      <input type="submit" class="login-btn" value="Enviar">
    </form>
  </main>

</body>
</html>

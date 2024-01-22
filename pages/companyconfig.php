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
    <form action="" method="POST" class="card card-config">
      <section>
        <h3 class="card-title">Empresa</h3>
        <div class="card-form card-section">
          <label class="label-credentials" for="">
            <span>Tipo de documento</span>
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
          <label class="label-credentials" for="">
            <span>Razon Social</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="">
            <span>Dirección</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="">
            <span>Telefono</span>
            <input class="credentials" type="text" required>
          </label>
          <label class="label-credentials" for="email">
            <span>Email</span>
            <input class="credentials" type="email" required>
          </label>
          <label class="label-credentials" for="">
            <span>logo</span>
            <div class="credentials">
              <input type="file" name="imagen" id="enviar">
            </div>
          </label>
        </div>
      </section>
      <input type="submit" class="login-btn" value="Enviar">
    </form>
  </main>

</body>
</html>

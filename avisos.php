
<?php include_once 'include/templates/header.php'; ?>

<head>
  <link rel="stylesheet" href="css/styleindex.css">
</head>
<br>
<section id="avisos">
  <div class="avisos_heading">
    <span>Avisos más recientes</span>
    <h3>AVISOS</h3>
  </div>

  <?php
  try {
     require_once('include/funciones/bd_conexion.php');
     $sql = "SELECT img, fecha, titulo, descripcion, lugar FROM avisos WHERE STATUS = 'A' ";
     $resultado = $conn->query($sql);
  } catch (\Exception $e) {
    echo $e->getMessage();
  }

   ?>
   <div class="avisos_container">
     <?php
    while ($avisos = $resultado->fetch_assoc()) { ?>
          <div class="avisos_box">

            <div class="avisos_img">
              <img src="<?php echo $avisos['img']; ?>">
            </div>

            <div class="avisos_text">
              <span><?php echo $avisos['fecha'] ?></span>
              <br>
              <h3><?php echo $avisos['titulo'] ?></h3>
              <p><?php echo $avisos['descripcion'] ?></p>
              <br>
              <b>Lugar:</b>
              <p><?php echo $avisos['lugar'] ?></p>
            </div>
          </div>

    <?php } ?>

   </div>
  <?php
  $conn->close();
   ?>




</section>


<?php include_once 'include/templates/footer.php'; ?>

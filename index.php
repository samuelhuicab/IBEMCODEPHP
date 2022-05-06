<?php include_once 'include/templates/header.php'; ?>
<!---head and style------->
<head>
  <link rel="stylesheet" href="css/styleindex.css">
</head>
<!--- end head and style------->

<!---Seccion de avisos------->
<?php
try {
   require_once('include/funciones/bd_conexion.php');
   $sql = "SELECT img, fecha, titulo, descripcion, lugar,hora,limite FROM proximas_act WHERE STATUS = 'A' ";
   $resultado = $conn->query($sql);
   $sql2 = "SELECT name FROM boletin_semana";
   $boletin = $conn->query($sql2);
} catch (\Exception $e) {
  echo $e->getMessage();
}

 ?>

<div class="colorsback" style="background-color: #EFF3F5; padding-bottom: 2em;">

<div class="tituloh1" id="activ">
  <br>
  <h3 style="margin-top: 1em; margin-bottom: 1em;"><b>PROXIMAS ACTIVIDADES</b></h3>
</div>

   <div class="container__cards">
    <?php while ($actividades = $resultado->fetch_assoc()) { ?>
       <div class="cards">
           <div class="cover__card">
               <img src="<?php echo $actividades['img']?>">
           </div>
           <h2><?php echo $actividades['titulo'] ?></h2>
           <p><?php echo $actividades['descripcion'] ?></p>
           <p>Lugar: <?php echo $actividades['lugar'] ?></p>
           <p>Límite: <?php echo  $actividades['limite'] ?></p>
           <hr>
           <div class="footer__card">
               <h3 class="user__name"><?php echo $actividades['fecha'] ?></h3>
               <i><?php echo $actividades['hora'] ?></i>
           </div>
       </div>
       <?php } ?>
   </div>
   </div>
<!---Fin seccion de avisos------->

<!---Seccion de actividades------->
<br>
<div class="tituloh1" id="acthoy">
  <h3><b>ACTIVIDADES</b></h3>
</div>
<div class="container">

      <!---Tarjeta 1------->
  <div class="card">
    <div class="left-column background1-left-column">
      <h6>Jardín de oración</h6>
      <h2>Miércoles</h2>
      <i class="fa-solid fa-person-praying"></i>
    </div>

    <div class="right-column">
      <div>
        <h4>Todos los Miércoles</h4>
        <h6>8:00 PM - 9:30 PM</h6>
        <br>
        <br>
        <h4>Modalidad</h4>
        <p>En linea</p>
        <br>
        <br>
        <h4>Nos puede visualizar por</h4>
        <br>
        <div class="itemsmod">
          <a href="https://www.facebook.com/elmesias.mx" target="_blank"> <i class="fab fa-facebook-square"></i> Facebook</a>
        </div>
        <div class="itemsmod">
          <a href="https://www.youtube.com/c/IBEMYucat%C3%A1n" target="_blank"><i class="fa-brands fa-youtube"></i> Youtube</a>
        </div>
      </div>
    </div>

  </div>

       <!---Tarjeta 2------->
  <div class="card">
    <div class="left-column background2-left-column">
      <h6>IBEM KIDS</h6>
      <h2>Sábados</h2>
      <i class="fa-solid fa-children"></i>
    </div>

    <div class="right-column">
      <div>
        <h4>Todos los Sábados</h4>
        <h6>10:00 AM</h6>
        <br>
        <br>
        <h4>Modalidad</h4>
        <p>En linea</p>
        <br>
        <br>
        <h4>Nos puede visualizar por</h4>
        <br>
        <div class="itemsmod">
          <a href="https://www.facebook.com/elmesias.mx" target="_blank"> <i class="fab fa-facebook-square"></i> Facebook</a>
        </div>
        <div class="itemsmod">
          <a href="https://www.youtube.com/c/IBEMYucat%C3%A1n" target="_blank"><i class="fa-brands fa-youtube"></i> Youtube</a>
        </div>
      </div>
    </div>


  </div>

           <!---Tarjeta 3------->
  <div class="card">
    <div class="left-column background1-left-column">
      <h6>Jóvenes e Intermedios</h6>
      <h2>Sábados</h2>
      <i class="fa-solid fa-people-group"></i>
    </div>

    <div class="right-column">
      <div>
        <h4>Todos los Sábados</h4>
        <h6>6:30 PM - 8:00 PM</h6>
        <br>
        <br>
        <h4>Modalidad</h4>
        <p>Presencial</p>
        <br>
        <br>
        <h4>Nos puede acompañar en</h4>
        <br>
        <div class="itemsmod">
          <a href="https://goo.gl/maps/E6duypLB6yX1b8HLA" target="_blank"> <i class="fa-solid fa-map-location-dot"></i> ‍‍‍‍‍‎ ‏‏‎‎ ‏‏‎C.28 # 382 x 85, Col. Morelos Oriente, C.P.97174</a>
        </div>
      </div>
    </div>

  </div>

</div>
<div class="container">

  <!---Tarjeta 4------->
  <div class="card">
    <div class="left-column background2-left-column">
      <h6>Culto de adoración</h6>
      <h2>Domingos</h2>
      <i class="fa-solid fa-place-of-worship"></i>
    </div>

    <div class="right-column">
      <div>
        <h4>Todos los Domigos</h4>
        <h6>9:00AM - 10:30AM  Y 6:00PM - 7:30PM</h6>
        <br>
        <h4>Modalidad</h4>
        <p>Presencial y en linea</p>
        <br>
        <h4>Nos puede visualizar por</h4>
        <div class="itemsmod">
          <a href="https://www.facebook.com/elmesias.mx" target="_blank"> <i class="fab fa-facebook-square"></i> Facebook</a>
        </div>
        <div class="itemsmod">
          <a href="https://www.youtube.com/c/IBEMYucat%C3%A1n" target="_blank"><i class="fa-brands fa-youtube"></i> Youtube</a>
        </div>
        <br>
        <h4>Nos puede acompañar en</h4>
        <div class="itemsmod">
          <a href="https://goo.gl/maps/E6duypLB6yX1b8HLA" target="_blank"> <i class="fa-solid fa-map-location-dot"></i> ‍‍‍‍‍‎ ‏‏‎‎ ‏‏‎C.28 # 382 x 85, Col. Morelos Oriente, C.P.97174</a>
        </div>
      </div>
    </div>


  </div>

  <div class="card">
    <div class="left-column background3-left-column">
      <h6>Boletín IBEM</h6>
      <h2>Boletín</h2>
      <i class="fa-solid fa-newspaper"></i>
    </div>
      <?php while ($bol = $boletin->fetch_assoc()) { ?>
    <div class="right-column">
      <div>
        <h4>Descarga aqui el boletín</h4>
        <h6>Se actualiza todos los domingos</h6>
        <br>
        <br>
        <br>
        <div class="itemsmod">
          <a href="pdf/<?php echo $bol['name'] ?>" target="_blank"><i class="fa-solid fa-laptop-file"></i> ‍‍‍‍‍‎ ‏‏‎‏‏‎Visualizar</a>
        </div>
        <br>
        <div class="itemsmod">
          <a href="pdf/<?php echo $bol['name'] ?>" download="BOLETINSEMANAL"><i class="fa-solid fa-cloud-arrow-down"></i> ‍ ‍‍‍‍‍‎‏‏‎‏‍Descargar</a>
        </div>
      </div>
    </div>

  </div>
  <?php } ?>
  <?php
  $conn->close();
   ?>
</div>
<!--- si se desea agregar más tarjetas solo es copiar y pegar, por cada containet solo debe de haber 3 tarjetas------->
<!--- fin Seccion de actividades------->






<?php include_once 'include/templates/footer.php'; ?>

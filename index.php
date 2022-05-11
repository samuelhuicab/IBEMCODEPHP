<?php include_once 'include/templates/header.php'; ?>
<!---head and style------->
<head>
  <link rel="stylesheet" href="css/styleindex.css">
</head>
<!--- end head and style------->

<?php
$versiculos = array(
  1 => " Vivimos por fe, no por vista. 2 Corintios 5:7",
  2 => "El que va tras la justicia y el amor halla vida, prosperidad y honra. Proverbios 21:21",
  3 => "¿De qué sirve ganar el mundo entero si se pierde la vida?. Marcos 8:36",
  4 => "Podrán desfallecer mi cuerpo y mi espíritu, pero Dios fortalece mi corazón; él es mi herencia eterna. Salmo 73:26",
  5 => "Guíame, pues eres mi roca y mi fortaleza, dirígeme por amor a tu nombre. Salmo 31:3",
  6 => "Todo tiene su momento oportuno; hay un tiempo para todo lo que se hace bajo el cielo. Eclesiastés 3:1",
  7 => "De aquel que cree en mí, como dice la Escritura, brotarán ríos de agua viva. Juan 7:38",
  8 => "Nunca preguntes por qué todo tiempo pasado fue mejor. No es de sabios hacer tales preguntas. Eclesiastés 7:10",
  9 => "Busquen la paz con todos, y la santidad, sin la cual nadie verá al Señor. Hebreos 12:14",
  10 => "El que adquiere cordura a sí mismo se ama, y el que retiene el discernimiento prospera. Proverbios 19:8",
  11 => "Porque también para este fin os escribí, para tener la prueba de si vosotros sois obedientes en todo. 2 Corintios 2:9",
  12 => "Antes que te formase en el vientre te conocí, y antes que nacieses te santifiqué, te di por profeta a las naciones. Jeremías 1:5",
  13 => "No os ha sobrevenido ninguna tentación que no sea humana; pero fiel es Dios, que no os dejará ser tentados más de lo que podéis resistir, sino que dará también juntamente con la tentación la salida, para que podáis soportar. 1 Corintios 10:13",
  14 => "",
);

$numero = rand(1,13);




 ?>

<div class="container__banner">

            <div class="banner">
                <div class="banner__icon-heart">
                    <img src="img/heart_notify.png" id="icon_heart" alt="">
                </div>
                <div class="banner__icon-fire">
                    <img src="img/fire-dynamic-color.png" id="icon_fire" alt="">
                </div>
                <div class="banner__text">
                    <h2><?php echo $versiculos[$numero]; ?></h2>
                </div>
            </div>

        </div>


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

<script type="text/javascript">
window.onscroll = function () {
    var posicion = window.pageYOffset || document.documentElement.scrollTop;
    var elemento1 = document.getElementById("icon_heart");
    var elemento2 = document.getElementById("icon_fire");
    elemento1.style.bottom = posicion * 0.1 + "px";
    elemento2.style.top = posicion * 0.1 + "px";
}
</script>

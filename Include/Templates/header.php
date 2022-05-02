<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleheader.css">
    <link rel="icon" href="img/logo.ico">
    <title>IBEM</title>
  </head>
  <body>
    <header class = "navegacion">
      <a href="#"><img class="logo" src="img/logo.png"></a>
      <nav class = "navoptions">
        <ul>
          <li class="inicio"><a href="http://localhost:8082/IBEMCODEPHP/">Inicio</a></li>
          <li class="avisos"><a href="#">Avisos</a></li>
          <li class="conferencias"><a href="#acthoy">Actividades</a></li>
          <li class="avisos"><a href="#">Proximas Actividades</a></li>
          <li class="contacto"><a href="#contactanos">Contáctanos</a></li>
        </ul>
      </nav>
    </header>
    <section class="zona1">
    </section>

    <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header")
      header.classList.toggle("abajo", window.scrollY>100);
    })
    </script>
  </body>
</html>

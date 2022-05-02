<head>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <link rel="stylesheet" href="css/stylefooter.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
</head>
<div class="contactoreal">
  <br>
  <main>
    <div class="item" id="contactanos">
      <h1>Contacto</h1>
    </div>
  </main>
  <div class="box__contacto">
    <div class="map" id="map" style="height: 300px; position: relative;">
    </div>
  </div>
  <div class="box__information">
    <h3>Información</h3>
    <br>
    <br>
    <b class="itemsinformation"><i class="fa-solid fa-location-dot"></i> ‍‍‍‍‍‎ ‏‏‎‎ ‏‏‎C.28 # 382 x 85, Col. Morelos Oriente, C.P.97174</b>
    <br>
    <br>
    <b class="itemsinformation"><i class="fa-solid fa-phone"></i> ‍‍‍‍‍‎ ‏‏‎‎ (999)929.69.74, (999)131.19.51, (999)490.07.15</b>
    <br>
    <br>
    <b class="itemsinformation"><i class="fa-solid fa-envelope"></i> ‍‍‍‍‍‎ ‏‏‎‎ vabuxap@correo.uady.mx</b>
  </div>
</div>


<footer>

        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="terms">
                    <p>Iglesia Bautista El Mesías A. R. Somos una comunidad de creyentes que tenemos a Jesucristo como Señor</p>
                </div>
            </div>
            <div class="box__footer">
              <h2>Nosotros</h2>
                <a href="http://localhost:8082/IBEMCODEPHP/">Inicio</a>
                <a href="#">Avisos</a>
                <a href="#acthoy">Actividades</a>
                <a href="#">Proximas Actividades</a>
                <a href="#contactanos">Contáctanos</a>
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.facebook.com/elmesias.mx"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="https://www.youtube.com/c/IBEMYucat%C3%A1n"><i class="fa-brands fa-youtube"></i> Youtube</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>Iglesia Bautista El Mesías</b></p>
            <p>Desarrollado por <b>IBEMCODE</b></p>
        </div>

        <script type="text/javascript">
        var map = L.map('map').setView([20.94591, -89.598849], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([20.94591, -89.598849]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();
        </script>
    </footer>

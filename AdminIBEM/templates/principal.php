<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/logo.ico">
  <title>Administracion IBEM</title>

  <!-- Google Font: Source Sans Pro -->
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/logo.png" alt="AdminLTELogo" height="70" width="200">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="login.php?cerrar_session=true">
          <button type="button" class="btn btn-block btn-dark">Cerrar sesión</button>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="bolet.php" class="nav-link">
              <i class="fa-solid fa-newspaper"></i>
              <p>
                 ‍‍‍‍‍‎ ‏‏‎‎ ‏‏‎Subir boletín
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-school"></i>
              <p>
                Escuela Dominical
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404.php" class="nav-link">
                  <i class="fa-solid fa-mattress-pillow"></i>
                  <p>Clases</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.php" class="nav-link">
                  <i class="fa-solid fa-person-chalkboard"></i>
                  <p>Maestros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.php" class="nav-link">
                  <i class="fa-solid fa-graduation-cap"></i>
                  <p>Alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="asignacionclases.php" class="nav-link">
                  <i class="fa-solid fa-chalkboard-user"></i>
                  <p>Asignacion de clases</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-bullhorn"></i></i>
              <p>
                Avisos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="crearavisos.php" class="nav-link">
                  <i class="fa-solid fa-circle-plus"></i>
                  <p>Subir Aviso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.php" class="nav-link">
                  <i class="fa-solid fa-list"></i>
                  <p>Todos los Avisos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-people-robbery"></i>
              <p>
                Proximas Actividades
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404.php" class="nav-link">
                  <i class="fa-solid fa-circle-plus"></i>
                  <p>Subir Proxima Actividad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.php" class="nav-link">
                  <i class="fa-solid fa-list"></i>
                  <p>Todas las Proximas Actividades</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user"></i>
              <p>
                 Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="crear-admin.php" class="nav-link">
                  <i class="fa-solid fa-circle-plus"></i>
                  <p>Crear Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="listausuarios.php" class="nav-link">
                  <i class="fa-solid fa-list"></i>
                  <p>Ver todos los usuarios</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

</body>
</html>

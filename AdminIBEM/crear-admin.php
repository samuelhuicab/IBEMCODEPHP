<?php include_once 'templates/principalsinanim.php';?>

<section class="content-header" style="margin-top: 50px; margin-left: 280px;">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Creación de usuarios aministrador</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>



<div class="col-md-6" style="margin-left: 280px;" >
  <!-- /.card-header -->
  <!-- form start -->
  <div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-light">
      <div class="card-header">
        <h3 class="card-title">Registro Administradores</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" name="crear-admin" id="crear-admin" method="post" action="insertar-admin.php">
        <div class="card-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text"   class="form-control" id="nombre" name="nombre" placeholder="Ingresa Nombre">
          </div>
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" autocomplete="usuario" class="form-control" id="usuario" name="usuario" placeholder="Ingresa Usuario">
          </div>
          <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" autocomplete="current-password" id="contraseña" name="contraseña" placeholder="Contraseña">
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="hidden" name="agregar-admin" value="1">
          <button type="submit"  class="btn btn-success">Crear</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
    </div>
</div>
<?php include_once 'templates/footer2.php';?>

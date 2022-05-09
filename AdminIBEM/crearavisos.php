<?php include_once 'sesiones.php'; ?>
<?php include_once 'templates/principalsinanim.php';?>



<section class="content-header" style="margin-top: 50px; margin-left: 280px;">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Subir Aviso</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="col-md-6" style="margin-left: 500px;">
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Crear Avisos</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form enctype="multipart/form-data" name="crear-aviso" id="form-avisos" method="post" action="insertaviso.php">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputFile">Seleccione la imagen</label>
        <div class="input-group">
          <div class="custom-file">
            <input name="file" type="file" class="custom-file-input" id="file">
            <label class="custom-file-label" for="exampleInputFile">Presione para buscar</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="nombre">Titulo</label>
        <input type="text"   class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo">
      </div>
      <div class="form-group">
        <label for="nombre">Descripcion</label>
        <input type="text"   class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripcion">
      </div>
      <div class="form-group">
        <label for="nombre">Fecha</label>
        <input type="text"   class="form-control" id="fecha" name="fecha" placeholder="Ingresa la fecha">
      </div>
      <div class="form-group">
        <label for="nombre">Lugar (Opcional)</label>
        <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ingresa el lugar">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <input type="hidden" name="crear-avisos" value="1">
      <button type="submit" class="btn btn-primary">Subir</button>
      <b></b>
    </div>
  </form>
</div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<?php include_once 'templates/footer2.php';?>

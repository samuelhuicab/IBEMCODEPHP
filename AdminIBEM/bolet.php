<?php include_once 'templates/principalsinanim.php';?>

<section class="content-header" style="margin-top: 50px; margin-left: 280px;">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Boletín Semanal</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="col-md-6" style="margin-top: 50px; margin-left: 500px;">
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Subir Boletin Semanal</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="insertboletin.php" enctype="multipart/form-data" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputFile">Seleccione el archivo</label>
        <div class="input-group">
          <div class="custom-file">
            <input name="file" type="file" class="custom-file-input" id="file">
            <label class="custom-file-label" for="exampleInputFile">Presione para buscar</label>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button name="submit" type="submit" class="btn btn-primary">Subir</button>
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

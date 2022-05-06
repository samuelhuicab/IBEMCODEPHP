<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login IBEM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>IBEM </b>WEBADMIN</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Iniciar Sesion</p>

      <form role="form" name="login-admin-form" id="login-admin" method="post" action="insertar-admin.php">
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="contraseña" class="form-control" placeholder="Constraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <input type="hidden" name="login-admin" value="1">
            <button name="login_admin" type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
        // Login Form
    $('#login-admin').on('submit', function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            // console.log(datos);
            $.ajax({
                type: $(this).attr('method'),
                data: datos,
                url: "insertar-admin.php",
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var resultado = data;
                    if(resultado.resultado == 'exito') {
                        swal(
                            'Login Exitoso' ,
                            'El usuario ' + resultado.usuario  + ' se logueo correctamente',
                            'success'
                        )
                        setTimeout(function(){
                            window.location.href = 'admin-area.php';
                        }, 3000);
                    } else {
                        swal(
                            'Error',
                            'Password Incorrecto o Usuario No existente',
                            'error'
                        )
                    }
                }
            });
    });
});
</script>
</body>
</html>

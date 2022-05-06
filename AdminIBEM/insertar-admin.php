<?php

require_once('../include/funciones/bd_conexion.php');

if (isset($_POST['agregar-admin'])) {

  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $password = $_POST['contraseña'];
  $status = "A";


  $opciones = array('cost' =>  12 );
  $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones );

  try {
    require_once('../include/funciones/bd_conexion.php');
    $stmt = $conn->prepare("INSERT INTO usuariowebadmin (nombre,usuario,pwd,status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $usuario, $password_hashed, $status);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    echo "error ".$e->getMessage();
  }



}


 ?>
<?php include_once 'templates/principalsinanim.php';?>
<style >
.modal {
	background: rgba(0,0,0,0.8);

	position: absolute;
	top: 0;
	left: 0;

	display: flex;
  align-items: center;

	animation: modal 0s 0s forwards;
	visibility: hidden;
	opacity: 0;
}


@keyframes modal {
	100% {
		visibility: visible;
		opacity: 1;
	}
}
</style>

<?php include_once 'templates/footer2.php';?>

<div class="modal fade" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content bg-success">
      <div class="modal-header">
        <h4 class="modal-title">Subida Exitosa</h4>
      </div>
      <div class="modal-body">
        <p>El registro se hizo correctamente en la base de datos</p>
      </div>
      <div class="modal-footer justify-content-between">
        <a href="crear-admin.php"><button type="button" class="btn btn-outline-light">Salir</button></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?php include_once 'sesiones.php'; ?>
<?php include_once 'templates/principalsinanim.php';?>
<section class="content-header" style="margin-top: 50px; margin-left: 280px;">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista Usuarios</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<?php
try {
   require_once('../include/funciones/bd_conexion.php');
   $sql = "SELECT * FROM usuariowebadmin WHERE status = 'A'";
   $resultado = $conn->query($sql);
} catch (\Exception $e) {
  echo $e->getMessage();
}

 ?>


<div class="col-md-8" style="margin-left: 280px;">
<div class="card-body">
  <table id="example2" class="table table-bordered table-hover" action="insertboletin.php" enctype="multipart/form-data" method="POST">
    <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Usuario</th>
      <th>Estatus</th>
      <th>Fecha creacion</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
      <?php while ($usuarios = $resultado->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $usuarios['usuario_id']?></td>
      <td> <?php echo $usuarios['nombre']?></td>
      <td><?php echo $usuarios['usuario']?></td>
      <td><?php echo $usuarios['status']?></td>
      <td><?php echo $usuarios['reg_timestamp']?></td>
      <td><a href="editarusuario.php?usuario_id=<?php echo$usuarios['usuario_id'];?>"><button type="button" class="btn btn-warning">
        Editar
      </button></td>
      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
        Eiminar
      </button></td>
    </tr>
    <?php } ?>
    </tbody>
    <tfoot>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Usuario</th>
      <th>Estatus</th>
      <th>Fecha creacion</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- /.card-body -->
</div>

<div class="modal fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">¿Desea continuar elimando al usuario seleccionado?</h4>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-light">Continuar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-warning">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-header">
        <h4 class="modal-title">¿Desea continuar?</h4>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
      <a href="editar.php?usuario_id=<?php echo $usuarios['id']; ?>"><button type="button" class="btn btn-outline-dark">Continuar</button></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


<?php
$conn->close();
 ?>


<?php include_once 'templates/footer2.php';?>

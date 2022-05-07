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
  <table id="listausuarios" class="table table-bordered table-hover">
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
      <td><a href="#" data-href="eliminar.php?id=<?php echo $usuarios['usuario_id']; ?>" data-toggle="modal" data-target="#confirm-delete"><button type="button" class="btn btn-danger">
        Eliminar
      </button></a></td>
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

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>

					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>





<?php
$conn->close();
 ?>


<?php include_once 'templates/footer2.php';?>
<script type="text/javascript">
$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

  $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>

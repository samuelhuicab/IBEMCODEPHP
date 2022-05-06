<?php include_once 'templates/principalsinanim.php';?>

<?php

try {
   require_once('../include/funciones/bd_conexion.php');
   $id = $_GET['usuario_id'];
   $sql = "SELECT * FROM usuariowebadmin WHERE usuario_id = '$id'";
   $resultado = $conn->query($sql);
} catch (\Exception $e) {
  echo $e->getMessage();
}

 ?>

<?php while ($usuarios = $resultado->fetch_assoc()) { ?>
<h1><?php echo $usuarios['usuario_id']?></h1>
<h1><?php echo $usuarios['nombre']?></h1>
<?php } ?>




<?php include_once 'templates/footer2.php';?>

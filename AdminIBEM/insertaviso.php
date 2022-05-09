
<?php
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$route = "../img/".$file_name;
move_uploaded_file($file_tmp,$route);
 ?>

 <?php

if (isset($_POST['crear-avisos'])) {

  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fecha = $_POST['fecha'];
  $lugar = $_POST['lugar'];
  $status = "A";


  try {
    require_once('../include/funciones/bd_conexion.php');
    $stmt = $conn->prepare("INSERT INTO avisos (img,fecha,titulo,descripcion, lugar, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $file_name, $fecha, $titulo, $descripcion, $lugar, $status);
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

 <div class="col-md-6" style="margin-top: 100px; margin-left: 550px;">
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
         <a href="crearavisos.php"><button type="button" class="btn btn-outline-light">Salir</button></a>
       </div>
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>

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
    $id_registro = $stmt->insert_id;
    if ($id_registro > 0) {
      $respuesta = array(
        'respuesta' => 'exito',
        'usuario_id' => $id_registro

      );
    }else {
      $respuesta = array(
        'respuesta' => 'error',
      );
    }
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    echo "error ".$e->getMessage();
  }

  die(json_encode($respuesta));

}


 ?>

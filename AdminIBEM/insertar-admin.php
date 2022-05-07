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


if (isset($_POST['login-admin'])) {

  $usuario = $_POST['usuario'];
  $password = $_POST['contraseña'];

  try {
    require_once('../include/funciones/bd_conexion.php');
    $stmt = $conn->prepare("SELECT * FROM usuariowebadmin WHERE usuario = ?;");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($id_admin, $usuario_admin, $nombre_admin, $password_admin, $status, $fechacreacion);
    if ($stmt->affected_rows) {
      $existe = $stmt->fetch();
      if ($existe) {
        if (password_verify($password, $password_admin)) {
          session_start();
          $_SESSION['usuario'] = $usuario_admin;
          $_SESSION['nombre'] = $nombre_admin;
          $respuesta = array('respuesta' => 'exitoso' );
        }else {
          $respuesta = array('respuesta' => 'password_incorrecto');
        }
      }else {
        $respuesta = array(
          'respuesta' => 'no_existe',
          'usuario' => $nombre_admin
        );
      }
    }
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    echo "error ". $e->getMessage();
  }


    die(json_encode($respuesta));





 }

 if($_POST['registro'] == 'actualizar') {

     $id_registro = $_POST['id_registro'];
     $usuario = $_POST['usuario'];
     $nuevo_password = $_POST['nuevo_password'];


     try {
         $opciones = array(
             'cost' => 12,
         );
         if(empty($_POST['nuevo_password']) && empty($_POST['repetir_password'])) {

             $stmt = $conn->prepare("UPDATE usuariowebadmin SET usuario = ? WHERE usuario_id = ?  ");
             $stmt->bind_param("si", $usuario, $id_registro);

         } else {
             $hash_password = password_hash($nuevo_password, PASSWORD_BCRYPT, $opciones);
             $stmt = $conn->prepare("UPDATE usuariowebadmin SET usuario = ?,  pwd = ? WHERE usuario_id = ?  ");
             $stmt->bind_param("ssi", $usuario, $hash_password, $id_registro);

         }

         $stmt->execute();
         if($stmt->affected_rows) {
             $respuesta = array(
                 'respuesta' => 'correcto',
                 'id_actualizado' => $stmt->insert_id
             );

         } else {
             $respuesta = array(
                 'respuesta' => 'error'
             );
         }
         $stmt->close();
         $conn->close();

     } catch(Exception $e) {
         $respuesta = array(
             'respuesta' =>  $e->getMessage()
         );
     }

     die(json_encode($respuesta));
 }




 ?>

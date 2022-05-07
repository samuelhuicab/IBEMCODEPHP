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

 ?>

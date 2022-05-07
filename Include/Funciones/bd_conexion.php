<?php
  $conn = new mysqli('localhost','root', '', 'ibemdb');
  if ($conn->connect_error) {
    echo $error -> connect_error;
  }

 ?>

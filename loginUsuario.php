<?php
  require("conexion.php");
  session_start();

  $_SESSION['usuario'] = '';
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  $consultaLogin = " SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = '$password' ";
  $resultadoLogin = mysqli_query($conexion, $consultaLogin);
  $row = mysqli_fetch_assoc($resultadoLogin);
  $cantidadRows = mysqli_num_rows($row);

  $JSON = array();

  if($cantidadRows == 1){
    $_SESSION['usuario'] = $usuario;
    $JSON = json_encode($row);
    echo $JSON;
  }
  else{
    die("Error");
  }
 ?>

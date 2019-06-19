<?php
  require("conexion.php");
  $consultaSQL = " SELECT hospedaje_id, nombre_h, descripcion_h, precio_h, enlace_h FROM hospedaje ";
  $query = mysqli_query($conectar, $consultaSQL);

  while($row = mysqli_fetch_assoc($query)){
    $data[]= $row;
  }
  echo json_encode($data);
?>

 <!--Se guardan los datos en la BD de LUGAR DE COMIDA-->

 <?php
  require("conexion.php");

  $nombre_c = $_POST["nombre_c"];
  $descripcion_c = $_POST["descripcion_c"];
  $direccion_c  = $_POST["direccion_c"];
  $imagen_c = $_POST["imagen_c"];
  $precio_c = $_POST["precio_c"];
  $enlace_c = $_POST["enlace_c"];
  $reserva_c = $_POST["reserva_c"];
  $horario_c = $_POST["horario_c"];
  $comida = $_POST["comida"];
  $servicios = $_POST["servicios"];
  $lugar = $_POST["lugar"];

  $sql = " INSERT INTO lugar_comida (imagen_c, nombre_c, descripcion_c, direccion_c, precio_c, enlace_c, reserva_c, horario_c, comida, servicios, lugar) VALUES ('$imagen_c','$nombre_c','$descripcion_c','$direccion_c','$precio_c','$enlace_c','$reserva_c','$horario_c','$comida' '$servicios','$lugar') ";

  $result = mysqli_query($conectar,$sql);
?>

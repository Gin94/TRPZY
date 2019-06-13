 <!--Se guardan los datos en la BD de HOSPEDAJES-->

 <?php
  require("conexion.php");

  $nombre_h = $_POST["nombre_h"];
  $descripcion_h = $_POST["descripcion_h"];
  $direccion_h  = $_POST["direccion_h"];
  $imagen_h = $_POST["imagen_h"];
  $precio_h= $_POST["precio_h"];
  $enlace_h = $_POST["enlace_h"];
  $reserva_h = $_POST["reserva_h"];
  $hospedaje = $_POST["hospedaje"];
  $habitacion = $_POST["habitacion"];
  $servicios = $_POST["servicios"];

  $sql = " INSERT INTO hospedaje (imagen_h, nombre_h, descripcion_h, direccion_h, precio_h, enlace_h, reserva_h, hospedaje, servicios, habitacion) VALUES ('$imagen_h','$nombre_h','$descripcion_h','$direccion','$precio_h','$enlace_h','$reserva_h','$hospedaje','$servicios','$habitacion') ";

  $result = mysqli_query($conectar,$sql);
?>

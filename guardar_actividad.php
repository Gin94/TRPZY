 <!--Se guardan los datos en la BD de ACTIVIDAD-->

 <?php
  require("conexion.php");

  $nombre_a = $_POST["nombre_a"];
  $descripcion_a = $_POST["descripcion_a"];
  $direccion_a  = $_POST["direccion_a"];
  $flayer_a = $_POST["flayer_a"];
  $enlace_a = $_POST["enlace_a"];
  $horario_a = $_POST["horario_a"];
  $actividad = $_POST["actividad_c"];
  $servicios = $_POST["servicios"];
  $entrada = $_POST["entrada"];


  $sql = " INSERT INTO actividad (flayer_a, nombre_a, descripcion_a, direccion_a, enlace_a, horario_a, actividad, servicios, entrada) VALUES ('$flayer_a','$nombre_a','$descripcion_a','$direccion_a','$enlace_a','$horario_a','$actividad' '$servicios','$entrada') ";
  $sql = " INSERT INTO actividad (flayer_a, nombre_a, descripcion_a, direccion_a, enlace_a, horario_a, actividad, servicios, entrada) VALUES ('$flayer_a','$nombre_a','$descripcion_a','$direccion_a','$enlace_a','$horario_a','$actividad' '$servicios','$entrada') ";

  $result = mysqli_query($conectar,$sql);
?>

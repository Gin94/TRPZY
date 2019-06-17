 <!--Se guardan los datos en la BD de HOSPEDAJES-->

 <?php
  require("conexion.php");

  $nombre_h = $_POST["nombre_h"];
  $descripcion_h = $_POST["descripcion_h"];
  $comuna = $_POST["comuna"];
  $direccion_h  = $_POST["direccion_h"];
  $imagen_h = addslashes(file_get_contents($_FILES['imagen_h']['tmp_name']));
  $precio_h= $_POST["precio_h"];
  $Contacto_wsp = $_POST["Contacto"];
  $enlace_h = $_POST["enlace_h"];
  $reserva_h = $_POST["reserva_h"];
  $hospedaje = $_POST["hospedaje"];
  $habitacion = $_POST["habitacion"];
  $servicios = $_POST["servicios"];

  $sql = " INSERT INTO hospedaje (imagen_h, nombre_h, descripcion_h, direccion_h, precio_h, enlace_h, reserva_h, hospedaje, servicios, habitacion,comuna,Contacto-wsp) VALUES ('$imagen_h','$nombre_h','$descripcion_h','$direccion','$precio_h','$enlace_h','$reserva_h','$hospedaje','$servicios','$habitacion','$comuna', '$Contacto_wsp') ";

  $result = mysqli_query($conectar,$sql);

if($resultado){
    echo "Si se inserto";
}else{
    echo "No se Guardo";
}

?>

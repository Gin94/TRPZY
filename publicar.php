<!--Aca se conecta por php a la BD-->
<?php
  require("conexion.php");
  session_start();
?>

<!--Inicio HTML de registro de emprendedores-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Treepezy, tu viaje soñado</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--Fuente de letra a utilizar-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"><!--Llamado a iconos-->
    <!-- <script src="jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="./publicar.js"></script>
    <link rel="stylesheet" href="publicar.css">
  </head>
  <body>

<div class="nav">
      <div class="logo"></div>
</div>

<div class="contenedor">
     <h1 style="margin:10px;">¡Publica con nosotros y aumenta tus clientes!</h1>
     <div class="opcion">
         <h3>¿Qué quieres publicar?</h3>
         <br>
         <input type="button" value="Hospedaje" class="btnOpciones" id="btnOpcHospedaje">
         <input type="button" value="Lugar de Comida" class="btnOpciones" id="btnOpcComida">
         <input type="button" value="Actividad o Evento" class="btnOpciones" id="btnOpcEvento">
     </div>
     <div class="extra-1" id="extra" >
       <h3>Quizas te puede ayudar...</h3>
        <div class="uno">
           <p>ACA VA ALGO</p>
        </div>
        <div class="uno">
            <p>Aca otra cosa.</p>
        </div>
     </div>

<!--CONTENEDOR DE LOS FORMULARIOS-->

<!--*******************FORMULARIO DE HOSPEDAJES****************************-->

<div class="boxHospedaje" id="hospedaje">
  <center><h2 style="padding:10px;">Formulario de Hospedaje.</h2></center>
  <h3 style="padding:10px;">Completa el siguiente formulario para poder publicar tu propuesta con nosotros. Los campos con (*) son obligatorios. </h3>
  <table width="90%" class="tabla">
    <tr>
         <td>(*) Nombre:</td>
         <td><input size="30%" type="text" id="nombre_h" placeholder="Nombre del hospedaje" required></td>
    </tr>
     <tr>
         <td>(*) Descripcion:</td>
         <td><textarea size="30%" id="descripcion_h" cols="60" rows="10" placeholder="Incluye lugares cercanos, ambiente, condiciones llegada y salida, etc." required></textarea></td>
    </tr>
     <tr>
         <td>(*) Dirección:</td>
         <td><input size="30%" type="text" id="direccion_h"></td>
    </tr>
     <tr>
         <td>(*) Imagen</td>
         <td><input type= "file" id="imagen_h" required max="4"></td>
    </tr>
     <tr>
         <td>(*) Precio:</td>
         <td><input size="30%" type="text" id="precio_h" placeholder="precio base de una habitacion"></td>
    </tr>

      <tr>
         <td>Enlace Página Web:</td>
         <td><input size="30%" type="text" id="enlace_h"></td>
    </tr>
      <tr>
         <td>(*) Reserva:</td>
         <td><input size="30%" type="text" id="reserva_h"  placeholder="¿Requiere de reserva previa? SI/NO" required></td>
    </tr>
    <tr>
         <td>(*) Tipo de hospedaje:</td>
         <td><select id="hospedaje" required>
             <option value="hotel">Hotel</option>
             <option value="hostal">Hostal</option>
             <option value="cabana">Cabaña</option>
             <option value="departamento">Departamento</option>
             <option value="casa">Casa</option>
         </select></td>
     </tr>
     <tr><!--ACA DEBO SACAR EL VALUE!!!!-->
         <td>(*) Tipos de habitaciones:</td>
         <td> <br><br>
            <input type="checkbox" value="simple" id="habitacion">Simple
            <input type="checkbox" value="doble" id="habitacion">Doble
            <input type="checkbox" value="matrimonial" id="habitacion">Matrimonial
         </td>
     </tr>
     <tr>
         <td>(*) Servicios a ofrecer:</td>
         <td>
           <br><br>
            <input type="checkbox" value="estacionamiento" id="servicios">Estacionamiento
            <input type="checkbox" value="wifi" id="servicios">Wifi
            <input type="checkbox" value="mascota" id="servicios">Acepta mascotas
            <br>
            <input type="checkbox" value="acceso" id="servicios">Acceso discapacitados
            <input type="checkbox" value="lavanderia" id="servicios">Lavanderia
            <input type="checkbox" value="otros" id="servicios">Otros
         </td>
     </tr>
     <tr>
         <td>  </td>
         <td><br><button type="button" name="button" id="btn-1" onclick="ingresarHospedaje();">PUBLICAR</button></td>
    </tr>
  </table>
</div>

<!---------------------Funcion en ajax para guardar los datos en la BD--------------------->
<!------------------------------------------------------------------------------------------>

<!--*************************FORMULARIO DE COMIDASSS************************-->
<div class="boxComida" id="comida">
<center><h2 style="padding:10px;">Formulario de Lugar de Comida.</h2></center>
<h3 style="padding:10px;">Completa el siguiente formulario para poder publicar tu propuesta con nosotros. Los campos con (*) son obligatorios. </h3>
    <table width="90%" class="tabla">
           <tr>
                <td>(*) Nombre:</td>
                <td><input size="30%" type="text" id="nombre_c" placeholder="Nombre del hospedaje" required></td>
           </tr>
            <tr>
                <td>(*) Descripcion:</td>
                <td><textarea size="30%" id="descripcion_c" cols="60" rows="10" placeholder="Incluye lugares cercanos, ambiente, condiciones llegada y salida, etc." required></textarea></td>
           </tr>
            <tr>
                <td>(*) Dirección:</td>
                <td><input size="30%" type="text" id="direccion_c"></td>
           </tr>
            <tr>
                <td>(*) Imagen</td>
                <td><input type= "file" id="imagen_c" required max="4"></td>
           </tr>
            <tr>
                <td>(*) Precio:</td>
                <td><input size="30%" type="text" id="precio_c" placeholder="Precio base de una habitacion"></td>
           </tr>
           <tr>
                <td>(*) Horario de Atención:</td>
                <td><input size="30%" type="text" id="horario_c" required></td>
           </tr>
           <tr>
                <td>Enlace Página Web:</td>
                <td><input size="30%" type="text" id="enlace_c"></td>
           </tr>
             <tr>
                <td>(*) Reserva:</td>
                <td><input size="30%" type="text" id="reserva_c"  placeholder="¿Requiere de reserva previa? SI/NO" required></td>
           </tr>
           <tr>
                <td>(*) Tipo de lugar:</td>
                <td><select id="lugar" required>
                    <option value="restaurant">Restaurant</option>
                    <option value="picada">Picada</option>
                    <option value="te">Salon de té</option>
                    <option value="internacional">Internacional</option>
                    <option value="otro">Otro</option>
                </select></td>
            </tr>
            <tr>
                <td>(*) Tipos de comidas:</td>
                <td> <br>
                   <input type="checkbox" value="rapida" id="comida">Rápida
                   <input type="checkbox" value="ejecutivo" id="comida">Menú ejecutivo
                   <input type="checkbox" value="casero" id="comida">Caseras
                   <br>
                   <input type="checkbox" value="internacional" id="comida">Internacional
                   <input type="checkbox" value="almuerzos" id="comida">Almuerzos
                   <input type="checkbox" value="otro" id="comida">Otro
                </td>
            </tr>
            <tr>
                <td>(*) Servicios a ofrecer:</td>
                <td>
                  <br>
                   <input type="checkbox" value="estacionamiento" id="servicios">Estacionamiento
                   <input type="checkbox" value="acceso" id="servicios">Acceso discapacitados
                   <input type="checkbox" value="vegano" id="servicios">Vegano
                   <input type="checkbox" value="especial" id="servicios">Eventos especiales
                </td>
            </tr>
            <tr>
                <td>  </td>
                <td><br><button type="button" name="button" id="btn-1" onclick="ingresarLugar();">PUBLICAR</button></td>
           </tr>
    </table>
</div>

<!--DESDE ACACOMIENZAS A EDITAR DE NUEVO!!!!!!!!!!!!!!!1-->
<!--*********************FORMULARIO DE ACTIVIDADES*********************-->
<div class="boxActividad" id="actividad">
<center><h2 style="padding:10px;">Formulario de Actividad o Evento.</h2></center>
<h3 style="padding:10px;">Completa el siguiente formulario para poder publicar tu propuesta con nosotros. Los campos con (*) son obligatorios. </h3>
    <table width="90%" class="tabla">
        <form action="guardar.php" method="post" enctype="multipart/form-data">
           <tr>
                <td>(*) Nombre:</td>
                <td><input size="30%" type="text" name="nombre" placeholder="Nombre de a actividad" required></td>
           </tr>
            <tr>
                <td>(*) Descripcion:</td>
                <td><textarea size="30%" name="descripcion" id="" cols="60" rows="10" placeholder="Incluye tema a tratar, demostracion o exposicion, etc." required></textarea></td>
           </tr>
            <tr>
                <td>(*) Dirección:</td>
                <td><input size="30%" type="text" name="direccion"></td>
           </tr>
            <tr>
                <td>(*) Flayer</td>
                <td><input type= "file" name="imagen" required max="4"></td>
           </tr>
           <tr>
                <td>(*) Horario:</td>
                <td><input size="30%" type="text" name="enlace" placeholder="Desde - Hasta (xx:xx - xx:xx)" required></td>
           </tr>
           <tr>
                <td>Enlace Página Web:</td>
                <td><input size="30%" type="text" name="enlace"></td>
           </tr>
           <tr>
                <td>(*) Tipo de actividad o evento:</td>
                <td><select name="tipo_h" required>
                    <option value="concierto">Concierto</option>
                    <option value="deportivo">Deportivo</option>
                    <option value="aire_libre">Aire Libre</option>
                    <option value="cine">Cine y/o Teatro</option>
                    <option value="feria">Feria</option>
                </select></td>
            </tr>
           <tr>
                <td>(*) Entrada:</td>
                <td><select name="entrada" required>
                    <option value="libre">Libre</option>
                    <option value="pagada">Pagada</option>
                </select></td>
            </tr>
            <tr>
                <td>(*) Servicios a ofrecer:</td>
                <td>
                  <br><br>
                   <input type="checkbox" value="estacionamiento">Estacionamiento
                   <input type="checkbox" value="comida">Sección comida
                   <input type="checkbox" value="acceso">Acceso discapacitados
                   <br>
                   <input type="checkbox" value="mascota">Acepta mascotas
                   <input type="checkbox" value="lockers">Lockers
                   <p>Otro</p>
                   <input type="text" value="" placeholder="Otro...">
                </td>
            </tr>
            <tr>
                <td>  </td>
                <td><br><input id="btn-1" type="submit" value="PUBLICAR"></td>
           </tr>
        </form>
    </table>
</div>
</div><!--------------------final contenedor---------------------------------------------->


<div class="footer">
      <div class="footer_box">
        <center>
        <div class="footer_logo"></div>
        </center>
        <div class="fl_txt">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Quod rerum voluptas
          alias id possimus cupiditate nihil cumque culpa
          beatae neque</div>
      </div>
      <div class="footer_box">
        <center>
        <h3>Contáctenos</h3>
        <br><br>
        <a href="">Whastapp</a>
        <br><br>
        <a href="">Facebook</a>
        <br><br>
        <a href="">Twitter</a>
        <br><br>
        <a href="">Instagram</a>
        </center>
      </div>
      <div class="footer_box">
        <center>
        <h3>Navegación</h3>
        <br><br>
        <a href="">Inicio</a>
        <br><br>
        <a href="">Destinos</a>
        <br><br>
        <a href="">Destinos de Usuarios</a>
        </center>
      </div>
      <div class="footer_box">
        <center>
        <h3>Soporte</h3>
        <br><br>
        <a href="">Preguntas Frecuentes</a>
        <br><br>
        <a href="">Contacto Desarrollador</a>
        <br><br>
        <a href="">Reportar un Error</a>
        </center>
      </div>
      </div>
  </body>
</html>

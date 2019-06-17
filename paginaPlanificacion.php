<?php
  require("conexion.php");
  $nombreCiudad = $_GET['id'];

 ?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <title>TreepEazy: Planificación</title>
    <!-- Font y jquery -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- estilos y funciones de esta pagina -->
    <link rel="stylesheet" href="./css/paginaPlanificacion.css">
    <script src="paginaPlanificacion.js"></script>

  </head>
  <body>

    <!-- navegador -->
    <div class="navegador">
      <div class="logo"></div>
      <div class="icono_usuario"></div>
      <div id="btn_iniciar_sesion" class="btn_iniciar_sesion_estilo">Iniciar Sesión</div>
      <div class="panel_iniciar_sesion">
        <div class="formulario_iniciar_sesion">
          <center>
            <h1>Iniciar Sesión</h1>
            <br>
            <input id="usuario" class="input_estilo" type="text" name="" value="" placeholder="Usuario">
            <input id="password" class="input_estilo" type="text" name="" value="" placeholder="Contraseña">
            <button id="btn_ingresar" class="btn_estilo" type="button" name="button">Ingresar</button>
            <a href="#">Registrate</a>
          </center>
        </div>
        <div class="formulario_registro">

        </div>
      </div>
    </div>
    <!-- ruta y slider -->
    <div class="ruta"><a href="#">PaginaPrincipal</a>/<a href="#">Destino</a>/<a href="#">Hospedaje</a>/<a href="#">Comida</a>/<a href="#">Evento</a></div>
    <center>
      <div class="slider">
        <div class="circulo">
          <div id="hojaUno" class="in_circulo"></div>
        </div>
        <div class="circulo">
          <div id="hojaDos" class="in_circulo"></div>
        </div>
        <div class="circulo">
          <div id="hojaTres" class="in_circulo"></div>
        </div>
        <div class="circulo">
          <div id="hojaCuatro" class="in_circulo"></div>
        </div>
      </div>
    </center>
    <!-- principal -->
    <div class="panel_planificacion">
      <!-- Hoja1 destino -->
      <div class="hoja1">
        <p>Destino:</p>
        <h1><?php echo $nombreCiudad; ?></h1>
        <center>
          <h2>Selecciona una fecha de viaje:</h2>
          <div class="boxFecha">Desde-Hasta:</div>
          <input type="text" class="inputFecha" id="fechaInicio" value="" placeholder="día-mes-año">
        </center>
        <div class="boxBoton">
          <button type="button" id="btnSiguiente">Siguiente</button>
        </div>
      </div>
      <!-- Hoja2 hospedaje -->
      <div class="hoja2">
        
      </div>
    </div>
    <!-- contenido viajes -->
    <div class="panel_info_viajes"></div>
    <!-- footer -->
    <div class="footer"></div>

  </body>
</html>

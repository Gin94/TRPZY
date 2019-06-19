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
      </div>
      <!-- Hoja2 hospedaje -->
      <div class="hoja2">
        <h1>Selecciona tu hospedaje:</h1>
        <div class="boxFiltros">
          <div class="hospedaje">
            <h4>Tipo de Hospedaje:</h4>
            <br>
            <p><input type="radio" name="tipoHospedaje" value=""> Hotel</p>
            <p><input type="radio" name="tipoHospedaje" value=""> Hostal</p>
            <p><input type="radio" name="tipoHospedaje" value=""> Cabaña</p>
            <p><input type="radio" name="tipoHospedaje" value=""> Departamento</p>
            <p><input type="radio" name="tipoHospedaje" value=""> Casa</p>
          </div>
          <div class="habitaciones">
            <h4>Cantidad habitaciones:</h4>
            <br>
            <select class="" name="">
              <option value="">1 habitacion</option>
              <option value="">2 habitacion</option>
              <option value="">3 habitacion</option>
              <option value="">4+ habitacion</option>
            </select>
          </div>
          <button type="button" class="btnEstilo">Filtrar</button>
        </div>
        <div class="boxHospedajes">
          <table>
            <tbody id="texto">
            </tbody>
          </table>
        </div>
        <center>

        </center>
      </div>
    </div>
    <!-- Hoja3 comidas -->
    <div class="hoja3"></div>
    <!-- Hoja4 eventos -->
    <div class="hoja4"></div>
    <!-- botonera -->
    <div class="boxBoton">
      <button type="button" class="btnEstilo" id="btnAnterior">Anterior</button>
      <button type="button" class="btnEstilo" id="btnSiguiente">Siguiente</button>
    </div>
    <!-- contenido viajes -->
    <div class="panel_info_viajes"></div>
    <!-- footer -->
    <div class="footer"></div>

  </body>
</html>

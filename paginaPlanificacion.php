<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <title>TreepEazy: Planificación</title>
    <!-- Font y jquery -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- estilos y funciones de esta pagina -->
    <link rel="stylesheet" href="./css/paginaPlanificacion.css">
    <script src="./js/paginaPlanificacion.js"></script>

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
    <!-- principal -->
    <div class="panel_planificacion"></div>
    <!-- contenido viajes -->
    <div class="panel_info_viajes"></div>
    <!-- footer -->
    <div class="footer"></div>

  </body>
</html>

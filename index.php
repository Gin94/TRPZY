<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <title>TreepEazy: Tu viaje Soñado</title>
    <!-- Font y jquery -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- estilos y funciones de esta pagina -->
    <link rel="stylesheet" href="./css/index.css">
    <script type="text/javascript" src="./js/paginaPrincipal.js"></script>

  </head>
  <body>
    <!-- notificacion -->
    <div class="notificacion">
      <center>
        <h1 id="textoNotificacion"></h1>
      </center>
    </div>
    <!-- navegador -->
    <div class="navegador">
      <div class="logo"></div>
      <div class="icono_usuario"></div>
      <div id="btn_iniciar_sesion" class="btn_iniciar_sesion_estilo">Iniciar Sesión</div>
      <h2 id="bienvenidoUsuario"></h2>
      <div class="panel_iniciar_sesion">
        <div class="formulario_iniciar_sesion">
          <center>
            <h1>Iniciar Sesión</h1>
            <br>
            <input id="usuario" class="input_estilo" type="text" value="" placeholder="Usuario" required>
            <input id="password" class="input_estilo" type="text" value="" placeholder="Contraseña" required>
            <button id="btn_ingresar" class="btn_estilo" type="button" >Ingresar</button>
            <a href="#" id="linkRegistrate" class="link">Registrate</a>
          </center>
        </div>
        <div class="formulario_registro">
          <center>
            <h1>Registrate con nosotros</h1>
            <br>
            <input id="regUsuario" class="input_estilo" type="text" name="" value="" placeholder="Usuario">
            <input id="regCorreo" class="input_estilo" type="text" name="" value="" placeholder="Correo">
            <input id="regPassword" class="input_estilo" type="text" name="" value="" placeholder="Contraseña">
            <select class="selector" name="" id="regNacionalidad">
              <option value="">Nacionalidad</option>
              <option value="chile">Chile</option>
              <option value="eeuu">EEUU</option>
              <option value="peru">Perú</option>
            </select>
            <select class="selector" name="" id="regTipoUsuario">
              <option value="">Tipo Usuario</option>
              <option value="viajero">Viajero</option>
              <option value="emprendedor">Emprendedor</option>
            </select>

            <button id="btn_registrar" class="btn_estilo" type="button" name="button">Registrar</button>
            <a href="#" id="linkIniciarSesion" class="link">Inicia Sesion</a>
          </center>
        </div>
      </div>
    </div>
    <!-- principal -->
    <div class="panel_principal">
      <center>
        <a href="paginaPlanificacion.php?id=santiago"><button type="button" class="btn_planificacion">Comienza a planificar</button></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </center>
    </div>
    <!-- contenido viajes -->
    <div class="titulo_contenido_viajes">
      <center>
        <h1>Los viajes que tenemos para ti</h1>
      </center>
    </div>
    <div class="contenido_viajes">
      <div class="primera fila">
        <center>
          <div id="santiago" class="box">Santiago</div>
          <div id="concepcion" class="box">Concepcion</div>
          <div id="losangeles" class="box">Los Angeles</div>
        </center>
      </div>
      <div class="panel_informacion infoUno">
        <img class="imgInfo" src="./sources/destinos/santiago.jpg">
        <div class="textoInfo"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
        <a id="btnUrl" href="paginaPlanificacion.php?id=santiago"><button type="button" class="btn_box" >Planificar</button></a>
      </div>
      <div class="segunda fila">
        <center>
          <div id="cusco" class="box">Cusco</div>
          <div id="lima" class="box">Lima</div>
          <div id="tacna" class="box">Tacna</div>
        </center>
      </div>
      <!-- <div class="panel_informacion infoDos"></div> -->
      <div class="tercera fila">
        <center>
          <div id="lasvegas" class="box">Las Vegas</div>
          <div id="washington" class="box">Washington</div>
          <div id="newyork" class="box">New Yrok</div>
        </center>
      </div>
      <!-- <div class="panel_informacion infoTres"></div> -->
    </div>
    <!-- contenido ranking -->
    <div class="contenido_ranking"></div>
    
    
    <!-- footer -->
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

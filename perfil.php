
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Treepezy, tu viaje soñado</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="perfil.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="perfil.js"></script>
  </head>
  <body>
<div class="nav">
      <div class="logo"></div>
</div>


<!----INICIO DEL CONTENEDOR-->
<div class="contenedor">
      <div class="opciones">
        <img src="https://image.freepik.com/iconos-gratis/feliz-cara-cuadrada-emoticono-sonriente-con-gafas-de-sol_318-58589.jpg" class="foto">
        <h1 style="text-align: center; color:#5F002F;">Nombre del usuario</h1>
        <hr style="margin: 10px;">
        <center>
        <input type="button" value="Mi Informacion" class="btn" id="btnInfo-user">
        <input type="button" value="Mis Viajes" class="btn" id="btnMis-viajes">
        <input type="button" value="Mis Viajes en espera" class="btn" id="btnViajes-espera">
        <input type="button" value="Planificar" class="btn" id="btnPlanificar">
        <input type="button" value="Configuración/Ajustes" class="btn" id="btnConfiguracion">
        <input type="button" value="Publicar" class="btn">
<!--        <div style="display:inline-block;">
            <i class="material-icons" id="cand">https</i>
        </div>-->
        
        </center>  
      </div>
      
      <div class="info">
        <h3>ACA SE MUESTRA TU INFORMACION</h3>
        <hr style="margin:10px;">
            <div class="boxInfo-user">
                    <h3>INFORMACION DEL USUARIO</h3>
                     <table class="tabla-info-user">
                         <tr>
                             <th>Nombre:</th>
                             <td>Gina</td>
                         </tr>
                         <tr>
                             <th>Nacionalidad:</th>
                             <td>Chilena</td>
                         </tr>
                         <tr>
                             <th>Contacto:</th>
                             <td>+569XXXXXXXX</td>
                         </tr>
                         <tr>
                             <th>Tipo de usuario:</th>
                             <td>NORMAL O REPRESENTANTE</td>
                         </tr>
                        <tr>
                             <th>Correo Electrónico:</th>
                             <td>micorreo@hola.com</td>
                         </tr>
                     </table>              
            </div>
            <div class="boxMis-viajes">
               <h3>REVISA TUS VIAJES REALIZADOS</h3>
                   <div class="prueba">
                      <h2>aca se supone que va la info de los viajes que ya ha planificado.
                       Aun no se como es el diseño</h2> 
                   </div>
                
            </div>
            <div class="boxViajes-espera">
              <h3> REVISA EL ESTADO DE TUS VIAJES EN ESPERA.</h3>
               <div class="prueba">
                   <h2>Muestra los viajes con estado:"EN ESPERA"</h2>
               </div>
            </div>
            <div class="boxPlanificar">
                <div>
                    <h3>Te redireccionaremos a planificar un nuevo viaje.</h3>
                </div>
            </div>
            <div class="boxConfiguracion">
                <h3>Configuracion de tu cuenta</h3>
                <h4>Puedes modificar tus datos registrados</h4>
                     <table class="editar-info-user">
                             <tr>
                                 <th>Nombre:</th>
                                 <td>Gina</td>
                                 <td><center><i class="material-icons">edit</i></center></td>
                             </tr>
                             <tr>
                                 <th>Nacionalidad:</th>
                                 <td>Chilena</td>
                                 <td><center><i class="material-icons">edit</i></center></td>
                             </tr>
                             <tr>
                                 <th>Contacto:</th>
                                 <td>+569XXXXXXXX</td>
                                 <td><center><i class="material-icons">edit</i></center></td>
                             </tr>
                             <tr>
                                 <th>Tipo de usuario:</th>
                                 <td>NORMAL O REPRESENTANTE</td>
                                 <td><center><i class="material-icons">edit</i></center></td>
                             </tr>
                              <tr>
                                 <th>Correo Electrónico:</th>
                                 <td>micorreo@hola.com</td>
                                 <td><center><i class="material-icons">edit</i></center></td>
                             </tr>
                             <tr>
                                 <th>Contraseña:</th>
                                 <td>*************</td>
                                 <td><center><i class="material-icons">edit</i></center></td>
                             </tr>
                         </table>
            </div>
      </div>


</div><!--final contenedor-->
     

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
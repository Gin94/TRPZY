//*********FUNCIONES RELACIONADAS CON EL REGISTRO DE LOS NEGOCIOS EN LA PAGINA**************
$(document).ready(function(){
  $(".boxHospedaje").hide();
  $(".boxComida").hide();
  $(".boxActividad").hide();

  $("#btnOpcHospedaje").click(function(){
    $(".boxHospedaje").hide(200);
    $(".boxComida").hide(200);
    $(".boxActividad").hide(200);
    $(".boxHospedaje").toggle(200);
  });
  $("#btnOpcComida").click(function(){
    $(".boxHospedaje").hide(200);
    $(".boxComida").hide(200);
    $(".boxActividad").hide(200);
    $(".boxComida").toggle(200);
  });
  $("#btnOpcEvento").click(function(){
    $(".boxHospedaje").hide(200);
    $(".boxComida").hide(200);
    $(".boxActividad").hide(200);
    $(".boxActividad").toggle(200);
  });
});

/*

//FUNCIONES DE CAMBIO DE FORMULARIO+++++++++++++++++++++++++++++++++++++++++++********
function Mostrar_h(){

  document.getElementById("hospedaje").style.display = "block";
  document.getElementById("comida").style.display = "block";
  document.getElementById("comida").style.display = "none";
  document.getElementById("actividad").style.display = "none";
}

function Mostrar_lc(){
  document.getElementById("hospedaje").style.display = "none";
  document.getElementById("comida").style.display = "block";
  document.getElementById("extra").style.display = "block";
  document.getElementById("actividad").style.display = "none";
}

function Mostrar_a(){
  document.getElementById("hospedaje").style.display = "none";
  document.getElementById("comida").style.display = "none";
  document.getElementById("actividad").style.display = "block";
  document.getElementById("extra").style.display = "block";
}
*/





//Funcion ajax, Guardar en la BD los HOSPEDAJE**************************************
/*function ingresarHospedaje(){
        var nombre_h = document.getElementById("nombre_h").value;
        var descripcion_h= document.getElementById("descripcion_h").value;
        var comuna= document.getElementById("comuna").value;
        var direccion_h = document.getElementById("direccion_h").value;
        var imagen_h = document.getElementById("imagen_h").value;
        var precio_h = document.getElementById("precio_h").value;
        var enlace_h = document.getElementById("enlace_h").value;
        var Contacto = document.getElementById("Contacto-wsp").value;
        var reserva_h = document.getElementById("reserva_h").value;
        var hospedaje = document.getElementById("hospedaje").value;
        var habitacion = document.getElementById("habitacion").value;
        var servicios = document.getElementById("servicios").value;
        var data = '&nombre_h='+nombre_h+'&descripcion_h='+descripcion_h+'&comuna='+comuna+'&direccion_h='+direccion_h+'&imagen_h='+imagen_h+'&precio_h='+precio_h+'&Contacto-wsp='+Contacto+'&enlace_h='+enlace_h+'&reserva_h='+reserva_h+'&hospedaje='+hospedaje+'&habitacion='+habitacion+'&servicios='+servicios;

        $.ajax({
          type: 'POST',
          url: 'guardar_hospedaje.php',
          data: data,
          beforseSend: function(){
            console.log(data);
          },
          success: function(){
            console.log(data);
           // location.reload();
          }
        });
        return false;
      }*/
/*----------------------------------------------------------------
//----------------------------------------------------------------
//Funcion ajax, Guardar en la BD los LUGAS DE COMIDA**************************************
function ingresarLugar()){
        var nombre_c = document.getElementById("nombre_c").value;
        var descripcion_c= document.getElementById("descripcion_c").value;
        var direccion_c = document.getElementById("direccion_c").value;
        var imagen_c = document.getElementById("imagen_c").value;
        var precio_c = document.getElementById("precio_c").value;
        var enlace_c = document.getElementById("enlace_c").value;
        var reserva_c = document.getElementById("reserva_c").value;
        var horario_c = document.getElementById("horario_c").value;
        var comida = document.getElementById("comida").value;
        var servicios = document.getElementById("servicios").value;
        var lugar = document.getElementById("lugar").value;
        var data = '&nombre_c='+nombre_c+'&descripcion_c='+descripcion_c+'&direccion_c='+direccion_c+'&imagen_c='+imagen_c+'&precio_c='+precio_c+'&enlace_c='+enlace_c+'&reserva_c='+reserva_c+'&horario_c='+horario_c+'&servicios='+servicios+'&comida='+comida+'&lugar='+lugar;

        $.ajax({
          type: 'POST',
          url: 'guardar_lugarcomida.php',
          data: data,
          beforseSend: function(){
            console.log(data);
          },
          success: function(){
            console.log(data);
           // location.reload();
          }
        });
        return false;
      }

//----------------------------------------------------------------
//----------------------------------------------------------------
//Funcion ajax, Guardar en la BD las ACTIVIDADES**************************************
function ingresarActividad()){
        var nombre_a = document.getElementById("nombre_a").value;
        var descripcion_a= document.getElementById("descripcion_a").value;
        var direccion_a = document.getElementById("direccion_a").value;
        var flayer_a = document.getElementById("flayer_a").value;
        var enlace_a = document.getElementById("enlace_a").value;
        var horario_a = document.getElementById("horario_a").value;
        var actividad = document.getElementById("actividad").value;
        var servicios = document.getElementById("servicios").value;
        var entrada = document.getElementById("entrada").value;

        var data = '&nombre_a='+nombre_a+'&descripcion_a='+descripcion_a+'&direccion_a='+direccion_a+'&flayer_a='+flayer_a+'&enlace_a='+enlace_a+'&horario_a='+horario_a+'&actividad='+actividad+'&servicios='+servicios+'&entrada='+entrada;

        $.ajax({
          type: 'POST',
          url: 'guardar_actividad.php',
          data: data,
          beforseSend: function(){
            console.log(data);
          },
          success: function(){
            console.log(data);
           // location.reload();
          }
        });
        return false;
      }

//----------------------------------------------------------------
//----------------------------------------------------------------

*/

$(document).ready(function(){
$(".panel_iniciar_sesion").hide();
$(".notificacion").hide();
$(".infoUno").hide();

  $("#btn_iniciar_sesion").click(function(){
    $(".formulario_iniciar_sesion").css("display", "block");
    $(".formulario_registro").css("display", "none");
    $(".panel_iniciar_sesion").toggle(200);
  });

  $("#linkRegistrate").click(function(){
    $(".formulario_iniciar_sesion").css("display", "none");
    $(".formulario_registro").css("display", "block");
  });

  $("#linkIniciarSesion").click(function(){
    $(".formulario_registro").css("display", "none");
    $(".formulario_iniciar_sesion").css("display", "block");
  });

  $("#btn_registrar").click(function(){
    $("#textoNotificacion").text("Usuario registrado con éxito!");
    $(".notificacion").slideDown(200).delay(1000).slideUp(200);
  });

  //ingresar usuario, transformar panel, esconder boton
  var show = '';
  var open = false;

  $("#santiago").click(function(){
    if(show == 'santiago' && open == true){
      $(".infoUno").hide(200);
      open = false;
    }
    else{
      $(".infoUno").show(200);
      $(".imgInfo").attr("src", "./sources/destinos/santiago.jpg");
      $("#btnUrl").attr("href", "paginaPlanificacion.php?id=santiago");
      show = 'santiago';
      open = true;
    }
  });
  $("#concepcion").click(function(){
    if(show == 'concepcion' && open == true){
      $(".infoUno").hide(200);
      open = false;
    }
    else{
      $(".infoUno").show(200);
      $(".imgInfo").attr("src", "./sources/destinos/concepcion.jpg");
      $("#btnUrl").attr("href", "paginaPlanificacion.php?id=concepción");
      show = 'concepcion';
      open = true;
    }
  });
  $("#losangeles").click(function(){
    if(show == 'losangeles' && open == true){
      $(".infoUno").hide(200);
      open = false;
    }
    else{
      $(".infoUno").show(200);
      $(".imgInfo").attr("src", "./sources/destinos/losangeles.jpg");
      $("#btnUrl").attr("href", "paginaPlanificacion.php?id=losángeles");
      show = 'losangeles';
      open = true;
    }
  });


});


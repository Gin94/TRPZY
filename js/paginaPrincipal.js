$(document).ready(function(){
$(".panel_iniciar_sesion").hide();
$(".notificacion").hide();

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
  function mostrarInfoViaje(id){
    switch(id){
      case 'santiago':
        
      break;
    }
  }

});

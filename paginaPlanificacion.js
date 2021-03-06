$(document).ready(function(){
  $(function() {
    $('#fechaInicio').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });
/* Funcion cambiar de hojas */
  $(".hoja2").css("display","none");
  $(".hoja3").css("display","none");
  $(".hoja4").css("display","none");
  $("#btnAnterior").css("display","none");

  var hojaActiva = "hoja1";

  $("#btnSiguiente").click(function(){
    switch(hojaActiva){
      case "hoja1":
        $("#btnAnterior").css("display","block");
        $("#hojaUno").css("background-color","white");
        $("#hojaDos").css("background-color","#900048");
        $(".hoja1").css("display", "none");
        $(".hoja2").css("display", "block");
        hojaActiva = "hoja2";
      break;
      case "hoja2":
        $("#hojaDos").css("background-color","white");
        $("#hojaTres").css("background-color","#900048");
        $(".hoja2").css("display","none");
        $(".hoja3").css("display","block");
        hojaActiva = "hoja3";
      break;
      case "hoja3":
        $(this).css("display","none");
        $("#hojaTres").css("background-color","white");
        $("#hojaCuatro").css("background-color","#900048");
        $(".hoja3").css("display", "none");
        $(".hoja4").css("display", "block");
        hojaActiva = "hoja4";
      break;
    }
  });
  $("#btnAnterior").click(function(){
    switch(hojaActiva){
      case "hoja4":
        $("#btnSiguiente").css("display","block");
        $("#hojaCuatro").css("background-color","white");
        $("#hojaTres").css("background-color","#900048");
        $(".hoja4").css("display", "none");
        $(".hoja3").css("display", "block");
        hojaActiva = "hoja3";
      break;
      case "hoja3":
        $("#hojaTres").css("background-color","white");
        $("#hojaDos").css("background-color","#900048");
        $(".hoja3").css("display", "none");
        $(".hoja2").css("display", "block");
        hojaActiva = "hoja2";
      break;
      case "hoja2":
        $(this).css("display","none");
        $("#hojaDos").css("background-color","white");
        $("#hojaUno").css("background-color","#900048");
        $(".hoja2").css("display", "none");
        $(".hoja1").css("display", "block");
        hojaActiva = "hoja1";
      break;
    }
  });


  function mostrarHospedajes(){
    var data = '';
    $.ajax({
      type: 'POST',
      url: 'jsonHospedajes.php',
      data: data,
      dataType: "JSON",
      success: function(datos){
        var filas = document.getElementById("texto");

        for(var i in datos){
          var id = datos[i].hospedaje_id;
          var nombre = datos[i].nombre_h;
          var descripcion = datos[i].descripcion_h;
          var precio = datos[i].precio_h;
          var enlace = datos[i].enlace_h;
          filas.innerHTML += "<tr><div style='background-color: white;width: 600px;height:200px;padding: 30px; border: 1px solid #900048; border-radius: 20px;'><h1>"+nombre+"</h1><p>"+descripcion+"</p><a href='#'>"+enlace+"</a><h1 style='float:right;'>$"+precio+"</h1></div></tr>";
        }

      }
    });
    return false;
  }
  mostrarHospedajes();
});

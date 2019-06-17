$(document).ready(function(){
  $(function() {
    $('#fechaInicio').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });

  var hojaActiva = "hoja1";

  $("#btnSiguiente").click(function(){
    switch(hojaActiva){
      case "hoja1":

      break;
    }
    $(".hoja1").css("display","none");
  });
});

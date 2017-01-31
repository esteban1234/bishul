$(document).ready(function(){
  $(".abrir").click(function(e){
    e.preventDefault();
    $("#mod-menu").show(100);
    $(".cerrar").show(100);
    $(".abrir").hide(100);
  });

  $(".cerrar").click(function(e){
    e.preventDefault();
    $("#mod-menu").hide();
    $(".abrir").show(100);
    $(".cerrar").hide();
  });
});

$(document).ready(function() {
    var cambio = false;
    $('.nav2 li a').each(function(index) {
        if (this.href.trim() == window.location) {
            $(this).parent().addClass("seleccion");
            cambio = true;
        }
    });
    if (!cambio) {
        $('.nav2 li:first').addClass("seleccion");
    }
});

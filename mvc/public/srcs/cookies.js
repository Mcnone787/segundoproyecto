$(document).ready(function () {
    if ($.cookie('aceptoCookies') == null) {
        $('#AceptoCookies').show();
    } else {
        $('#AceptoCookies').hide();
    }
    $("#btnAceptarCookies").click(function () {
        $("#AceptoCookies").slideUp("slow");
        //guardamos que ya se aceptaron las cookies para no volver a mostrar mensaje
        $.cookie("aceptoCookies", "2");
    });
});
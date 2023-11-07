$(document).ready(function () {
    if ($.cookie('cookieAceptada') == null) {
        $('#AceptoCookies').addClass("display");
    }
    $("#btnAceptarCookies").click(function () {
        event.preventDefault();
        console.log("entrando");
        $("#AceptoCookies").slideUp("slow");
        //guardamos que ya se aceptaron las cookies para no volver a mostrar mensaje
        $.cookie("aceptoCookies", "2");
    });
});
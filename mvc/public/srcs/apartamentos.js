const { jsPDF } = window.jspdf;
$(document).ready(function () {
    let x = Math.random();
    var tituloapa = $('#tituloapa').val();
    $("#btnPDF").click(function () {
        var doc = new jsPDF();
        doc.addImage('../imgs/logo/logo.png', 'PNG', 150, 25, 50, 50);
        doc.text(20, 30, 'Recibo de Pago');
        doc.text(20, 40, 'Recibo con IVA INCLUIDO!');
        doc.text(20, 50, 'Este es el recibo de pago de su reserva :)');
        doc.text(20, 60, 'Gracias por su preferencia');
        doc.text(20, 70, 'Apartamento: ' + tituloapa);
        doc.text(20, 80, 'Llegada: ' + fechaini);
        doc.text(20, 90, 'Salida: ' + fechafin);
        doc.text(20, 100, 'Total: ' + precioTotal);
        doc.text(20, 110, 'El pago se realizo con exito!');
        doc.text(20, 120, 'Gracias por confiar en Moya y Marcelo para sus vacaciones...!');
        doc.save('recibo'+ x +'.pdf');
    });
});


$(".btnpdfdownload").click(function() {
  let id_ajax_pdf=$(this).id;

    $.ajax({
        type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url: "index.php", //url guarda la ruta hacia donde se hace la peticion
        data: {
            r: "infopdfreservas",
            idapartamento: id_ajax_pdf,
        },
        success: function(datos) {
            if (datos == 1) {
                $('#spiner').show();
                setTimeout(() => {
                    $('#spiner').hide();
                    $('#modalBody').hide();
                    $('#alertReserva').show();

                    let x = Math.random();
                    var tituloapa = $('#tituloapa').val();
                        var doc = new jsPDF();
                        doc.addImage('../imgs/logo/logo.png', 'PNG', 150, 25, 50, 50);
                        doc.text(20, 30, 'Recibo de Pago');
                        doc.text(20, 40, 'Recibo con IVA INCLUIDO!');
                        doc.text(20, 50, 'Este es el recibo de pago de su reserva :)');
                        doc.text(20, 60, 'Gracias por su preferencia');
                        doc.text(20, 70, 'Apartamento: ' + tituloapa);
                        doc.text(20, 80, 'Llegada: ' + fechaini);
                        doc.text(20, 90, 'Salida: ' + fechafin);
                        doc.text(20, 100, 'Total: ' + precioTotal);
                        doc.text(20, 110, 'El pago se realizo con exito!');
                        doc.text(20, 120, 'Gracias por confiar en Moya y Marcelo para sus vacaciones...!');
                        doc.save('recibo'+ x +'.pdf');
                }, 3000);
            } else {
                alert("No se ha podido reservar")
            }
        },
        error: function(datos) {
            alert("No se ha podido reservar");
        },
    });
});

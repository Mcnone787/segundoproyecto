$(document).ready(function () {
  // Modal de reserva de apartamento
  $("#apartamentoReserva").on("show.bs.modal", function (event) {
    var modal = $(this);
    modal.find(".modal-title").text("Reservar Apartamento");

    var fechaini = $("#from").val();
    var fechafin = $("#to").val();
    var numHabita = $("#numhabita").val();

    $.ajax({
      url: "apartamentos.php",
      method: "POST",
      data: {
        r: "apartamentos",
        fechaini: fechaini,
        fechafin: fechafin,
        numHabita: numHabita
      },
      success: function (data) {
        if (data && data.html) {
          modal.find(".modal-body").html(data.html);
        }
      }
    });
  });

});

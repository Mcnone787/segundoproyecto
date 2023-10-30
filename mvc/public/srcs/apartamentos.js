$(document).ready(function () {
  // Modal de reserva de apartamento
  $("#apartamentoReserva").on("show.bs.modal", function (event) {
    var modal = $(this);
    modal.find(".modal-title").text("Reservar Apartamento");

    $.ajax({
      url: "apartamentos.php",
      method: "POST",
      data:{r:"apartamentos", fechaini:$("#from").val(), fechafin:$("#to").val(), numHabita:$("#numhabita").val()},
      success: function (data) {
        data.array.forEach(element => {
          console.log(element.Titulo) 
        });
      },
    });
  });
});

// $(document).ready(function () {
//   // Reserva de apartamento
//   // $("#formReservaApartamento").submit(function (event) {
//   //   event.preventDefault();
//   //   var id = $("#id").val();
//   //   var fechaInicio = $("#fechaInicio").val();
//   //   var fechaFin = $("#fechaFin").val();
//   //   var precio = $("#precio").val();
//   //   var token = $("#token").val();
//   //   var url = "/apartamentos/reservar";
//   //   $.ajax({
//   //     url: url,
//   //     headers: { "X-CSRF-TOKEN": token },
//   //     type: "POST",
//   //     dataType: "json",
//   //     data: {
//   //       id: id,
//   //       fechaInicio: fechaInicio,
//   //       fechaFin: fechaFin,
//   //       precio: precio,
//   //     },
//   //     success: function (data) {
//   //       if (data["status"] == "success") {
//   //         $("#apartamentoReserva").modal("hide");
//   //         Swal.fire({
//   //           icon: "success",
//   //           title: "Reserva realizada",
//   //           text: "Se ha realizado la reserva correctamente",
//   //         });
//   //       } else {
//   //         Swal.fire({
//   //           icon: "error",
//   //           title: "Error",
//   //           text: "No se ha podido realizar la reserva",
//   //         });
//   //       }
//   //     },
//   //     error: function (data) {
//   //       Swal.fire({
//   //         icon: "error",
//   //         title: "Error",
//   //         text: "No se ha podido realizar la reserva",
//   //       });
//   //     },
//   //   });
//   // });

//   // Modal de reserva de apartamento
//   $("#apartamentoReserva").on("show.bs.modal", function (event) {
//     var button = $(event.relatedTarget);
//     var id = button.data("id");
//     var modal = $(this);
//     modal.find(".modal-title").text("Reservar Apartamento");
//   });
// });

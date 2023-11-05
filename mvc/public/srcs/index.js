$(document).ready(function () {
   
   $('.btnSwitch').click(function () {
      const body = $('body');
      const currentTheme = body.attr('data-bs-theme');
      if (currentTheme === 'dark') {
         body.attr('data-bs-theme', 'light'); // Switch to light theme
      } else {
         body.attr('data-bs-theme', 'dark'); // Switch to dark theme
      }
   });

   // Funcion para mostrar el modal de confirmacion de borrado de reserva
   $('.btnDeleteReserva').click(function () {
      $('#modalDeleteReserva').modal('show');
      let id_ = this.id
      $("#reservaIDhref").attr("href", "index.php?r=deletereserva&id=" + id_);
   });
});

$.get('../prueba.php',
   { prueba: '90' },
   function (respuesta) {
      alert(respuesta)
   }
   , 'html')

// $('body:contains('Lorem')').css('font-weight', 'bold');
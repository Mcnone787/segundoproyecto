$(document).ready(function () {
   const body = $('body');
   const switchButton = $('.btnSwitch');
   const darkModeCheckbox = $('#flexSwitchCheckDefault');

   // Obtener el tema guardado en el localStorage
   const savedTheme = localStorage.getItem('themePreference');
   if (savedTheme === 'dark') {
      body.attr('data-bs-theme', 'dark');
      darkModeCheckbox.prop('checked', true); // Actualizar el checkbox
   } else {
      body.attr('data-bs-theme', 'light');
   }

   // Funcion para que cuando se haga click en el boton de cambiar tema, se cambie el tema
   switchButton.click(function () {
      toggleDarkMode();
   });

   // Funcion para cambiar el tema de la pagina web (dark/light)
   function toggleDarkMode() {
      const currentTheme = body.attr('data-bs-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

      // Actualizar el tema de la pagina web
      body.attr('data-bs-theme', newTheme);

      // Guardar el tema en el localStorage
      localStorage.setItem('themePreference', newTheme);

      // actualizar el checkbox
      darkModeCheckbox.prop('checked', newTheme === 'dark');
   }
   //funcion ocultar el menu de perfil del usuario
   $('#perfil-menu').show();
   $('#btn-toogler').click(function () {
      if($(this).attr("aria-expanded") == 'true'){
         $('#perfil-menu').hide();
      }else{
         $('#perfil-menu').show();
      }
   });

   // Funcion para mostrar el modal de confirmacion de borrado de reserva
   $('.btnDeleteReserva').click(function () {
      $('#modalDeleteReserva').modal('show');
      let id_ = this.id
      $("#reservaIDhref").attr("href", "index.php?r=deletereserva&id=" + id_);
   });
});
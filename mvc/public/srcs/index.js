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
 });


 $.get('../prueba.php',
 {prueba:'90'},
 function(respuesta){
   alert(respuesta)
 }
 ,"html")
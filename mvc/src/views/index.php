<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bootstrap demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="srcs/style.css">
   <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
</head>

<body data-bs-theme="light">

   <?php include "nav.php"; ?>
   <?php include "ERROR_MANAGMENT.php"; ?>
   <!-- carrousel -->
   <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://hips.hearstapps.com/hmg-prod/images/casa-de-diseno-contemporaneo26-1637602658.jpg?crop=1xw:0.9066731141199227xh;center,top&resize=1200:*" class="d-block w-100" alt="casa blanca">
         </div>
         <div class="carousel-item" data-bs-interval="2000">
            <img src="https://www.apartamentogudar.com/templates/yootheme/cache/Apartamentos-Sierra-Gudar-casa1_08-b6078931.jpeg" class="d-block w-100" alt="casa blanca">
         </div>
         <div class="carousel-item">
            <img src="https://orpea.es/wp-content/uploads/2022/10/Apartamentos-Ciutat-diagonal-20200917-0139-L.jpg" class="d-block w-100" alt="casa blanca">
         </div>
      </div>
      <button class="carousel-control-prev text-light" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next text-light" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
   <div class="container contendores_ini" style="margin-top:100px; margin-bottom:100px;">
      <div class="row" style="display: flex;
    flex-direction: row;
    align-items: center;">
         <div class="col-3">
            <img src="https://f1ciaimobiliaria.com.br/wp-content/uploads/2022/03/como-funciona-aluguel-por-imobiliaria.jpg" class="d-block w-100" alt="casa blanca">
         </div>
         <div class="col-9">
            <p class="text-center">Empresa dedicada integramente en la satisfaccion de nuestros clientes con años de experiencia</p>
         </div>
      </div>
   </div>

   <!-- info en medio -->
   <div class="container contendores_ini">
      <div class="row" style="display: flex;
    flex-direction: row;
    align-items: center;">
         <div class="col-9">
            <p class="text-center">Apartamentos ubicados en las mejores zonas con las mejores calidades que puedan haber a que esperas corre </p>
         </div>
         <div class="col-3">
            <img src="https://i0.wp.com/www.carreiraodalgrande.com.br/wp-content/uploads/2018/03/assessoria-imobili%C3%A1ria.png?resize=840%2C483&ssl=1" class="d-block w-100" alt="casa blanca">
         </div>
      </div>
   </div>
   <!-- search -->
   

   <div class="container">
      <div class="row mt-5">
         <div class="col-12 col-lg-6 textcentroHV">
            <h2 class="text-center ">Empresa lider de nuestro sector</h2>
         </div>

         <div class="col-6 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.2256160229385!2d2.962094874992734!3d42.273707040554356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1697476156936!5m2!1ses!2ses" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>

   <!-- Cookie Aviso Legal -->
   <div id="AceptoCookies" class="border m-3 p-3 bg-body rounded-3 shadow fixed-bottom">
      <p>Bienvnido a Apartamentos Figures, al navegar por nuestra web asumiremos que estas de acuerdo y <b>aceptas los términos y condiciones</b></p>
      <p>Este es un aviso legal informando que esta web utilizara cookies para guardar informacion</p>
      <button style="float: right;" type="button" class="btn btn-primary" id="btnAceptarCookies">Aceptar</button>
   </div>

   <?php include "footer.php"; ?>
   <script src="srcs/index.js"></script>
   <script src="srcs/cookies.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
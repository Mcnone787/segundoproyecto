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
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>

</head>

<body data-bs-theme="light">
   <?php include "nav.php"; ?>
   <!-- carrousel -->
   <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://hips.hearstapps.com/hmg-prod/images/casa-de-diseno-contemporaneo26-1637602658.jpg?crop=1xw:0.9066731141199227xh;center,top&resize=1200:*" class="d-block w-100" alt="casa blanca">
         </div>
         <div class="carousel-item" data-bs-interval="2000">
            <img src="https://hips.hearstapps.com/hmg-prod/images/casa-de-diseno-contemporaneo26-1637602658.jpg?crop=1xw:0.9066731141199227xh;center,top&resize=1200:*" class="d-block w-100" alt="casa blanca">
         </div>
         <div class="carousel-item">
            <img src="https://hips.hearstapps.com/hmg-prod/images/casa-de-diseno-contemporaneo26-1637602658.jpg?crop=1xw:0.9066731141199227xh;center,top&resize=1200:*" class="d-block w-100" alt="casa blanca">
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
      <div class="row">
         <div class="col-3">
            <img src="https://hips.hearstapps.com/hmg-prod/images/casa-de-diseno-contemporaneo26-1637602658.jpg?crop=1xw:0.9066731141199227xh;center,top&resize=1200:*" class="d-block w-100" alt="casa blanca">
         </div>
         <div class="col-9">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia distinctio nobis ipsam, quo libero tempora, debitis suscipit at, saepe neque quod atque minima facere dolor quas consequatur sit quia?</p>
         </div>
      </div>
   </div>

   <!-- info en medio -->
   <div class="container contendores_ini">
      <div class="row">
         <div class="col-9">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia distinctio nobis ipsam, quo libero tempora, debitis suscipit at, saepe neque quod atque minima facere dolor quas consequatur sit quia?</p>
         </div>
         <div class="col-3">
            <img src="https://hips.hearstapps.com/hmg-prod/images/casa-de-diseno-contemporaneo26-1637602658.jpg?crop=1xw:0.9066731141199227xh;center,top&resize=1200:*" class="d-block w-100" alt="casa blanca">
         </div>
      </div>
   </div>
   <!-- search -->
   <div class="container" style="margin-top:50px;margin-bottom:100px;;">
      <div class="row">
         <div class="col-1">
         </div>
         <div class="col-10">
            <h3 class="text-center" id="title_apartamentos" style="padding:50px;">Mira nuestros apartamentos</h3>
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-12">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-12">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-12">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-12">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-12">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-12">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>

   <div class="container">
      <div class="row">
         <div class="col-6 textcentroHV">
            <h2 class="text-center ">Empresa lider de nuestro sector</h2>
         </div>

         <div class="col-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.2256160229385!2d2.962094874992734!3d42.273707040554356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1697476156936!5m2!1ses!2ses" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
   <!-- Cookies -->
   <div id="AceptoCookies">
      <div class="container">
         <div class="row shadow border rounded-2">
            <div class="col-12">
               <p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios. Si continúa navegando, consideramos que acepta su uso. Puede obtener más información, o bien conocer cómo cambiar la configuración, en nuestra <a href="#">Política de cookies.</a></p>
            </div>
            <div class="col-12 m-2">
               <button class="btn btn-primary" id="btnAceptarCookies">Aceptar cookies</button>
            </div>
         </div>
      </div>
   </div>

   <?php include "footer.php"; ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="srcs/index.js"></script>
</body>

</html>
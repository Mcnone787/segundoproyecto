<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="srcs/style.css">
      <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
   </head>
   <body>

   <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
         <div class="container-fluid">
            <img  src="imgs/logo/logo.png" class="img-thumbnail" alt="logo" width="auto"  style="height:90px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
               <div style="margin: 0 auto; width: 50%;">
                  <form class="d-flex" role="search">
                     <input class="form-control me-2 search_nav" type="search" placeholder="Search" aria-label="Search" style="width: 65%;margin:0 auto;">
                  </form>
               </div>
               <div style="float: right;">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Departamentos</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Session
                        </a>
                     </li>
                   
                  </ul>
               </div>
            </div>
         </div>
      </nav>

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
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
         </button>
      </div>
      <div class="container contendores_ini"style="margin-top:100px; margin-bottom:100px;" >
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
      <div class="container contendores_ini" >
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
      <?php include "footer.php";?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>
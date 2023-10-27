<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary nav">
   <div class="container-fluid">
      <img src="imgs/logo/logo.png" class="img-thumbnail" alt="logo" width="auto" style="height:90px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
         <li class="nav-item">
            <a class="nav-link text-dark" href="index.php">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link text-dark" href="index.php?r=apartamentos">Departamentos</a>
         </li>
      </ul>
      <div class="collapse navbar-collapse" id="navbarScroll">
         <div style="width: 70%;">
            <form class="d-flex text-dark" role="search">
               <input class="form-control me-2 search_nav text-dark" type="search" placeholder="Search" aria-label="Search" style="width: 65%;margin:0 auto;">
            </form>
         </div>
      </div>
      <div style="float: right;">
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class='nav-item dropdown'>
               <?php if ($_SESSION['user']) { ?>
                  <a class='nav-link dropdown-toggle-hide text-dark' type='button' data-bs-toggle='dropdown' aria-expanded='false'><?php echo $_SESSION['user']['Nombre']; ?></a>
                  <ul class='dropdown-menu dropdown-menu-lg-end'>
                     <li><a class='dropdown-item' href='index.php?r=perfilUser'>Perfil</a></li>
                     <li><a class='dropdown-item' href='index.php?r=reservas'>Reservas</a></li>
                     <li><a class='dropdown-item' href='index.php?r=dologout'>Log Out</a></li>
                     <?php if ($_SESSION["user"]["Rol"] == "gestor" || $_SESSION["user"]["Rol"] == "admin") { ?>
                        <li><a class='dropdown-item' href='index.php?r=gestores'>Apartamentos</a></li>
                     <?php }
                     if ($_SESSION["user"]["Rol"] == "admin") { ?>
                        <li><a class='dropdown-item' href='index.php?r=gestores'>Panel</a></li>
                     <?php } ?>
                     <li>
                        <hr class='dropdown-divider'>
                     </li>
                     <li>
                        <div class='form-check form-switch ms-2'>
                           <input class='form-check-input btnSwitch' type='checkbox' role='switch' id='flexSwitchCheckDefault'>
                           <label class='form-check-label' for='flexSwitchCheckDefault'>Dark Mode</label>
                        </div>
                     </li>
                  </ul>
               <?php } else { ?>
            <li class='nav-item text-dark'>
               <a class='nav-link' href='index.php?r=login' role='button' aria-expanded='false'>Login</a>
            </li>
         <?php } ?>
         </li>
         </ul>
      </div>
   </div>
</nav>
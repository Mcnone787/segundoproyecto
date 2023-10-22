<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary nav">
    <div class="container-fluid">
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="index.php?r=index"><img src="imgs/logo/logo.png" class="img-thumbnail" alt="logo" width="auto" style="height:90px;"><span class="text-muted ms-3" style="font-size: 20px">Apartaments Figueres</span></a>
        <?php
                     
                     if($_SESSION["user"]){
                        echo  "  <li class='nav-item' style='border:solid black 2px;' >
                        <p class=''  aria-expanded='false'>
                        Bienvenido 
                        ".$_SESSION['user']['Nombre']."
                       
                        </p>
                     </li>";
                     }else{
                        echo "
                        <li class='nav-item '>
                        <a class='nav-link ' href='index.php?r=login' role='button' aria-expanded='false'>
                           Login
                        </a>
                     </li>
                        ";
                     }
                   
                     ?>
    </div>
</nav>
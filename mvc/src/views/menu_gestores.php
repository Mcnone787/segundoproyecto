<div class="col-2 border">
    <a href="index.php?r=gestores"><h2 class="link-body-emphasis text-center">Menus</h2></a>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_apartamentos"><p>Apartamentos</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_temporadas"><p>Temporadas</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_estados"><p>Estados</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_reserva"><p>Reserva</p></a></li>
        <?php if($_SESSION["user"]["Rol"] == "admin"){ ?>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_usuarios"><p>Usuarios</p></a></li>
        <?php } ?>
    </ul>
</div>
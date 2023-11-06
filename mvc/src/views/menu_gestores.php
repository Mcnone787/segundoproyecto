<div class="col-2 border">
    <h2 class="text-center">Menus</h2>
    <ul class="list-group list-group-flush">
        <?php if($_SESSION['user']['Rol'] == 'gestor'): ?>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_apartamentos"><p>Apartamentos</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_temporadas"><p>Temporadas</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_estados"><p>Estados</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_reserva"><p>Reserva</p></a></li>
        <?php endif; ?>
        <?php if($_SESSION['user']['Rol'] == 'admin'): ?>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminUsuarios"><p>Usuarios</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminApartamento"><p>Apartamentos</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminTemporada"><p>Temporadas</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminEstados"><p>Estados</p></a></li>
        <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminReserva"><p>Reserva</p></a></li>
        <?php endif; ?>
    </ul>
</div>
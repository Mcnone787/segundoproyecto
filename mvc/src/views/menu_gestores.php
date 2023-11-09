<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group list-group-flush">
            <?php if ($_SESSION['user']['Rol'] == 'gestor') : ?>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_apartamentos">
                        <p>Apartamentos</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_temporadas">
                        <p>Temporadas</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_estados">
                        <p>Estados</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=gestores_reserva">
                        <p>Reserva</p>
                    </a></li>
            <?php endif; ?>
            <?php if ($_SESSION['user']['Rol'] == 'admin') : ?>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminUsuarios">
                        <p>Usuarios</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminApartamento">
                        <p>Apartamentos</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminTemporada">
                        <p>Temporadas</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminEstados">
                        <p>Estados</p>
                    </a></li>
                <li class="list-group-item"><a class="link-body-emphasis" href="index.php?r=adminReservas">
                        <p>Reserva</p>
                    </a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
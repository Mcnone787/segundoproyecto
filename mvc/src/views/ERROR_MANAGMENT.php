<html>
    <?php if($_GET["error"] == 1){
        echo 
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, hay campos vacios.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["error"] == 2) {
        echo 
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, hay campos negativos.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["error"] == 3) {
        echo 
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, hay campos vacios y negativos.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["errorTemporada"] == 1) {
        echo
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, la fecha de inicio es mayor que la fecha de fin.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["errorApartamento"] == 1) {
        echo
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, El precio Alto no puede ser menor al precio Bajo.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["errorUsuario"] == 1) {
        echo
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, El rol que has seleccionado no existe.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["errorUsuario"] == 2) {
        echo
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo actualizar los datos, El email que has introducido ya existe.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } elseif ($_GET["errorUsuario"] == 3) {
        echo
        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> No se pudo iniciar session compruebe que los datos que esta introduciendo son correctos.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } ?>
</html>
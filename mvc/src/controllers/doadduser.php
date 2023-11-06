<?php
function adduser($request, $response, $container)
{
    $userModel = $container->users();


    $nombre = $request->get(INPUT_POST, "nombre");
    $apellidos = $request->get(INPUT_POST, "apellido");
    $contrasena = $request->get(INPUT_POST, "password");
    $email = $request->get(INPUT_POST, "email");
    $rol = $request->get(INPUT_POST, "rol");

    if ($nombre == null || $apellidos == null || $contrasena == null || $email == null || $rol == null) {
        $response->redirect("Location: index.php?r=ctrladduser&error=1");
        return;
    }
    if ($nombre == -1 || $apellidos == -1 || $contrasena == -1 || $email == -1 || $rol == -1) {
        $response->redirect("Location: index.php?r=ctrladduser&error=2");
        return;
    }
    if ($userModel->validationEmail($email)) {
        $response->redirect("Location: index.php?r=ctrladduser&errorUsuario=2");
        return;
    } 
    if ($userModel) {
        $userModel->setUser($nombre, $apellidos, $contrasena, $email, $rol);
        $response->redirect("Location: index.php?r=adminUsuarios");
    } else {
        $response->redirect("Location: index.php?r=adminUsuarios");
    }
}

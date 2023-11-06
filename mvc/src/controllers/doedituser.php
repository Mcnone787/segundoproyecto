<?php

function edituser($request, $response, $container)
{
    $userModel = $container->users();
    $id = $request->get(INPUT_GET, "id");
    $nombre = $request->get(INPUT_POST, "nombre");
    $apellidos = $request->get(INPUT_POST, "apellido");
    $contrasena = $request->get(INPUT_POST, "contrasena");
    $email = $request->get(INPUT_POST, "email");
    $rol = $request->get(INPUT_POST, "rol");

    if($id == null || $nombre == null || $apellidos == null || $contrasena == null || $email == null || $rol == null){
        $response->redirect("Location: index.php?r=ctrledituser&error=1");
        return;
    }
    if($id == -1 || $nombre == -1 || $apellidos == -1 || $contrasena == -1 || $email == -1 || $rol == -1){
        $response->redirect("Location: index.php?r=ctrledituser&error=2");
        return;
    }

    if ($userModel) {
        $userModel->edituser($nombre, $apellidos, $contrasena, $email, $rol, $id);
        $response->redirect("Location: index.php?r=gestores_usuarios");
    } else {
        $response->redirect("Location: index.php?r=gestores_usuarios");
    }
}

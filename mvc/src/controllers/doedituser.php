<?php

function edituser($request, $response, $container)
{
    $userModel = $container->users();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $nombre = $request->get(INPUT_POST, "nombre");
    $apellidos = $request->get(INPUT_POST, "apellido");
    $contrasena = $request->get(INPUT_POST, "contrasena");
    $email = $request->get(INPUT_POST, "email");
    $rol = $request->get(INPUT_POST, "rol");

    if ($userModel) {
        $userModel->edituser($nombre, $apellidos, $contrasena, $email, $rol, $id);
        $response->redirect("Location: index.php?r=gestores_usuarios");
    } else {
        $response->redirect("Location: index.php?r=gestores_usuarios");
    }
}

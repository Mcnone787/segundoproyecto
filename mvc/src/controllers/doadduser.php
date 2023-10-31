<?php
function adduser($request, $response, $container)
{
    $nombre = $request->get(INPUT_POST, "nombre");
    $apellidos = $request->get(INPUT_POST, "apellidos");
    $pass = $request->get(INPUT_POST, "pass");
    $email = $request->get(INPUT_POST, "email");
    $telefono = $request->get(INPUT_POST, "telefono");
    $rol = $request->get(INPUT_POST, "rol");

    $userModel = $container->users();
    $userModel->addUser($nombre, $apellidos, $pass, $email, $telefono, $rol);
    $response->redirect("location: index.php?r=gestores_usuarios");
    return $response;

}
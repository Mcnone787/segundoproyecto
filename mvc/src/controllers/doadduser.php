<?php
function adduser($request, $response, $container)
{
    $userModel = $container->users();

    $nombre = $request->get(INPUT_POST, "nombre");
    $apellidos = $request->get(INPUT_POST, "apellido");
    $contrasena = $request->get(INPUT_POST, "password");
    $email = $request->get(INPUT_POST, "email");
    $rol = $request->get(INPUT_POST, "rol");
    
    if($userModel){
        $userModel->setUser($nombre, $apellidos, $contrasena, $email, $rol);
        $response->redirect("Location: index.php?r=gestores_usuarios");
    } else {
        $response->redirect("Location: index.php?r=gestores_usuarios");
    }
}

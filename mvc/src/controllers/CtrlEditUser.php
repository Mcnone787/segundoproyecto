<?php
function CtrlEditUser($request, $response, $container)
{
    $userModel = $container->users();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $userData = $userModel->getPersonalData($id);

    $Nombre = $userData["Nombre"];
    $Apellidos = $userData["Apellidos"];
    $email = $userData["email"];
    $contrasena = $userData["Contrasena"];
    $rol = $userData["Rol"];

    $response->setTemplate("editUser.php");
    $response->set("container", $container);
    $response->set("nombre", $Nombre);
    $response->set("apellidos", $Apellidos);
    $response->set("email", $email);
    $response->set("contrasena", $contrasena);
    $response->set("rol", $rol);
    $response->set("id", $id);
    
}
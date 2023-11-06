<?php
function CtrlEditUser($request, $response, $container)
{
    $userModel = $container->users();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    if($id == null) {
        $response->redirect("location: index.php?r=gestores_usuarios&error=1");
        return;
    }
    if($id == -1) {
        $response->redirect("location: index.php?r=gestores_usuarios&error=2");
        return;
    }
    if($id == null && $id == -1){
        $response->redirect("location: index.php?r=gestores_usuarios&error=3");
        return;
    }
    $userData = $userModel->getPersonalData($id);

    $Nombre = $userData["Nombre"];
    $Apellidos = $userData["Apellidos"];
    $email = $userData["email"];
    $contrasena = $userData["contrasena"];
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
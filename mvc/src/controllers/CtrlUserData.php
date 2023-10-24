<?php 
function ctrlUserData($request, $response, $container)
{
    $userModel = $container->users(); 

    $userData = $userModel->getPersonalData($_SESSION["user"]["IDUsuario"]);
    
    $Nombre = $userData["Nombre"];
    $email = $userData["email"];
    $telefono = $userData["Telefono"];

    // VARIABLES
    $response->setTemplate("perfil.php");
    $response->set("container", $container);
    $response->set("nombre", $Nombre);
    $response->set("email", $email);
    $response->set("telefono", $telefono);
    return $response;
}
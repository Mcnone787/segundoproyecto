<?php 
function ctrlUserData($request, $response, $container)
{
    $userModel = $container->users(); 

    $userData = $userModel->getPersonalData($_SESSION["user"]["IDUsuario"]);
    
    $Nombre = $userData["Nombre"];
    $email = $userData["email"];
    $telefono = $userData["Telefono"];
    $Apellidos = $userData["Apellidos"];
    $debitcard = $userData["Tarjeta_Credito"];


    // VARIABLES
    $response->setTemplate("perfil.php");
    $response->set("container", $container);
    $response->set("nombre", $Nombre);
    $response->set("email", $email);
    $response->set("telefono", $telefono);
    $response->set("apellidos", $Apellidos);
    $response->set("debitcard", $debitcard);
    
    return $response;
}
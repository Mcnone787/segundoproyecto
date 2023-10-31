<?php
function gestores_usuarios($request, $response, $container)
{
    $userModel = $container->users();
    $users = $userModel->getUsers();
    $response->set("usuarios", $users);
    $response->setTemplate("gestores_usuarios.php");
    $response->set("container", $container);
    return $response;
}
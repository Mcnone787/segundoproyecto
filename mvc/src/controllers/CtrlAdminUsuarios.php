<?php
function ctrlAdminUsuarios($request, $response, $container)
{
    $userModel = $container->users();
    $users = $userModel->getUsers();
    $response->set("usuarios", $users);
    $response->setTemplate("AdminUsuarios.php");
    $response->set("container", $container);
    return $response;
}
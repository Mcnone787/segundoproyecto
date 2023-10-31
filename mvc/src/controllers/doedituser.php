<?php 

function edituser($request, $response, $container)
{
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $userModel = $container->users();
    $userModel->editUser($id);
     $response->redirect("location: index.php?r=gestores_usuarios");
    return $response;
}
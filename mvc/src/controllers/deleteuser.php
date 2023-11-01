<?php
function deleteuser($request, $response, $container)
{
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $userModel = $container->users();
    $userModel->deleteUser($id);
    $response->redirect("location: index.php?r=gestores_usuarios");
}
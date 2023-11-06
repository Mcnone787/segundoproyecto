<?php
function deleteuser($request, $response, $container)
{
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    if($id == null){
        $response->redirect("location: index.php?r=gestores_usuarios&error=1");
        return;
    }
    if($id == -1){
        $response->redirect("location: index.php?r=gestores_usuarios&error=2");
        return;
    }
    if($id == null && $id == -1){
        $response->redirect("location: index.php?r=gestores_usuarios&error=3");
        return;
    }
    $userModel = $container->users();
    $userModel->deleteUser($id);
    $response->redirect("location: index.php?r=gestores_usuarios");
}
<?php
function deleteestado($request, $response, $container)
{
    $id = $request->get(INPUT_GET,"id");
    
    $estadoModel = $container->estados();
    $estadoModel->deleteEstado($id);
    
    
    if($_SESSION["user"]["Rol"]=="gestor"){
        $response->redirect("Location: index.php?r=gestores_estados");

    }else if($_SESSION["user"]["Rol"]=="admin"){
        $response->redirect("Location: index.php?r=adminEstados");

    }
    
}
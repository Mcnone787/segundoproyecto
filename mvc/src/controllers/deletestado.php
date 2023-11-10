<?php
function deleteestado($request, $response, $container)
{
    $id = $request->get(INPUT_GET,"id");
    
    $estadoModel = $container->estados();
    $estadoModel->deleteEstado($id);
    
    $response->redirect("Location: index.php?r=index");
}
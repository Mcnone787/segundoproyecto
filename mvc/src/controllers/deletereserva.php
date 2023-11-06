<?php
function deletereserva($request, $response, $container)
{
    $id = $request->get(INPUT_GET,"id");
    if($id == null){
        $response->redirect("Location: index.php?r=reservas&error=1");
        return;
    }
    if($id == -1){
        $response->redirect("Location: index.php?r=reservas&error=2");
        return;
    }
    if($id == null && $id == -1){
        $response->redirect("Location: index.php?r=reservas&error=3");
        return;
    }
    $reservaModel = $container->reservas();
    $reservaModel->deleteReserva($id, $_SESSION["user"]["IDUsuario"]);
    
    $response->redirect("Location: index.php?r=reservas");
}
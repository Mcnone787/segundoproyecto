<?php
function deletereserva($request, $response, $container)
{
    $id = $request->get(INPUT_GET,"id");
    
    $reservaModel = $container->reservas();
    $reservaModel->deleteReserva($id);
    
    $response->redirect("Location: index.php?r=reservas");
}
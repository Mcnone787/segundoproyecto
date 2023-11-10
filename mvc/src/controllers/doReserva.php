<?php
function ctrlDoReserva($request, $response, $container){
    $reservaModel = $container->reservas();

    $diaEntrada = $_POST['diaini'];
    $diaSalida = $_POST['diafin'];
    $precio = $_POST['precio'];
    $apartamentoId = $_POST['idapartamento'];
    $userId = $_SESSION['user']['IDUsuario'];
    
    $reservaModel->setReserva($userId, $apartamentoId, $diaEntrada, $diaSalida, $precio);
    echo "1";    
}
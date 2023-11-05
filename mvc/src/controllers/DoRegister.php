<?php
function ctrlDoRegistro($request, $response, $container){

    $userModel = $container->users();

    $nombre = $request->get(INPUT_POST, "nombre");
    $apellido = $request->get(INPUT_POST, "apellido");
    $debitCard = $request->get(INPUT_POST, "debit-card");
    $email = $request->get(INPUT_POST, "email");
    $contrasena = $request->get(INPUT_POST, "password");

    if($nombre == null || $apellido == null || $debitCard == null || $email == null || $contrasena == null){
        echo "Algun campo esta vacio";
    }
    if($userModel){
        $userModel->register($nombre, $apellido, $debitCard, $email, $contrasena);
        $response->redirect("Location: index.php?r=login");
    } else {
        $response->redirect("Location: index.php?r=registro");
    }

    return $response;
}
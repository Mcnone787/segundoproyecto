<?php
function ctrlDoRegistro($request, $response, $container){

    $userModel = $container->users();

    $nombre = $request->get(INPUT_POST, "nombre");
    $apellido = $request->get(INPUT_POST, "apellido");
    $debitCard = $request->get(INPUT_POST, "debit-card");
    $email = $request->get(INPUT_POST, "email");
    $contrasena = $request->get(INPUT_POST, "password");

    if($nombre == null || $apellido == null || $debitCard == null || $email == null || $contrasena == null){
        $response->redirect("Location: index.php?r=registro&error=1");
        return;
    }
    if($nombre == -1 || $apellido == -1 || $debitCard == -1 || $email == -1 || $contrasena == -1){
        $response->redirect("Location: index.php?r=registro&error=2");
        return;
    }
    if($userModel->validationEmail($email)){
        $response->redirect("Location: index.php?r=registro&errorUsuario=2");
        return;
    }
    if($userModel){
        $userModel->register($nombre, $apellido, $debitCard, $email, $contrasena);
        $response->redirect("Location: index.php?r=login");
    } else {
        $response->redirect("Location: index.php?r=registro");
    }

    return $response;
}
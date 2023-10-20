<?php
function ctrlDoRegistro($request, $response, $container){

    $userModel = $container->users();

    $name = $request->get(INPUT_POST, "nombre");
    $lastname = $request->get(INPUT_POST, "apellido");
    $debitCard = $request->get(INPUT_POST, "debit-card");
    $email = $request->get(INPUT_POST, "email");
    $pass = $request->get(INPUT_POST, "password");
    if($userModel){
        $userModel->register($name, $lastname, $debitCard, $email, $pass);
        $response->redirect("Location: index.php?r=login");
    } else {
        $response->redirect("Location: index.php?r=registro");
    }

    return $response;
}
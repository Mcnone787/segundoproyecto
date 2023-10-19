<?php
function ctrlDoRegistro($request, $response, $container){

    $name = $request->get(INPUT_POST, "nombre");
    $lastname = $request->get(INPUT_POST, "apellido");
    $debitCard = $request->get(INPUT_POST, "debit-card");
    $email = $request->get(INPUT_POST, "email");
    $pass = $request->get(INPUT_POST, "password");

    $userModel = $container->users();

    $userModel->register($name, $lastname, $debitCard, $email, $pass);
    die ;
    // if($userModel) {
    //     $response->redirect("location: index.php?r=login");
    // } else {
    //     $response->redirect("location: index.php?r=registro");
    // }

    return $response;
}
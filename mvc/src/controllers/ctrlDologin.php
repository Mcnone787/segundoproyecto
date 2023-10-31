<?php

function ctrlDoLogin($request, $response, $container){

    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");

    $userModel = $container->users();
    $userModel = $userModel->login($user, $pass);
    
    if($userModel) {

        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php?r=login");
    }

    return $response;
}
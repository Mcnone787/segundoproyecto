<?php

function ctrlDoLogin($request, $response, $container){

    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");

    if($user == null || $pass == null) {
        $response->redirect("location: index.php?r=login&error=1");
        return $response;
    }
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
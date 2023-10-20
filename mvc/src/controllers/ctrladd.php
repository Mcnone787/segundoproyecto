<?php

function ctrlAdd($request, $response, $container){
    
    $taskModel = $container->users();
    // $task = $request->get(INPUT_POST, "task");    
    // $user = $request->get("SESSION", "user");

    $taskModel->add($task, $user["id"]);


    $response->redirect("location: index.php");
    return $response;
}
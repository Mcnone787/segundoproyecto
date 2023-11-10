<?php

function ctrldeletedepartamento($request, $response, $container){
    $id=$request->get(INPUT_GET, "id");
    $apartamento=$container->apartamentos();
    echo $apartamento->EliminarApartamento($id);
    if($_SESSION["user"]["Rol"]=="gestor"){
        $response->redirect("location: index.php?r=gestores_apartamentos&delete=1");

    }else if($_SESSION["user"]["Rol"]=="admin"){
        $response->redirect("Location: index.php?r=adminApartamento&delete=1");

    }
    

}
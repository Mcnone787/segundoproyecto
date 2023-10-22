<?php

function ctrldeletedepartamento($request, $response, $container){
    $id=$request->get(INPUT_GET, "id");
    $apartamento=$container->apartamentos();
    echo $apartamento->EliminarApartamento($id);
    $response->redirect("location: index.php?r=gestores&delete=1");

}
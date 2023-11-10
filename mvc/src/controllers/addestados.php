<?php

function    addestados($request, $response, $container){
$estadosM=$container->estados();
if($_POST["ini"]==null || $_POST["fin"]==null || $_POST["apartamento"]==null){
    $response->redirect("location: index.php?r=estados");
return $response;
}
$estadosM->addEstado($_POST["ini"],$_POST["fin"],$_POST["apartamento"],$_SESSION["user"]["IDUsuario"]);
$response->redirect("location: index.php?r=gestores_estados");
$response->set("container", $container);
return $response;

}
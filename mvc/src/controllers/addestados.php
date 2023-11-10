<?php

function    addestados($request, $response, $container){
$estadosM=$container->estados();

$estadosM->addEstado($_POST["ini"],$_POST["fin"],$_POST["apartamento"],$_SESSION["user  "]["IDUsuario"]);
$response->redirect("location: index.php?r=index");
$response->set("container", $container);
return $response;

}
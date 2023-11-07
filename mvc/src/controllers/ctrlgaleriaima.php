<?php

function  ctrlgaleriaima($request, $response, $container){
    $imagenesfile=file_get_contents("../src/jsons/img.json");
    $imagenes=json_decode($imagenesfile,true);
    $id=$_GET["id"];
    $imgs=$imagenes["src"][$id];
    $imgs=$imagenes["src"][$id];
    $response->set("imgs",$imgs);
    $response->set("id",$id);
    $response->setTemplate("galeriaimg.php");
    $response->set("container", $container);
    
}
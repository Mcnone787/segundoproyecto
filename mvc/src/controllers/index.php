<?php

function ctrlIndex($request, $response, $container){
  
  $ruta_json="../src/jsons/img.json";
  $jsoninfoimgs=file_get_contents($ruta_json);
  $jsoninfoimgsdecode=json_decode($jsoninfoimgs,true);
  $response->setTemplate("index.php");
  $response->set("container",$container);
  $response->set("jsoninfoimgsdecode",$jsoninfoimgsdecode);


  return $response;
}
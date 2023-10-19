<?php

/**
 * Controlador de la portada.
 * Exemple per a M07.
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Carrega la imatge que toca i la visualitza
 *
 **/

/**
<<<<<<< HEAD
 * ctrlIndex: Controlador que carrega les tasques i visaulitza la portada
 *
 * @param $get array associatiu amb el contingut de la variable $_GET.
 * @param $cookie array associatiu amb el contingut de la variable $_COOKIE.
 * @param $session Model que encapsula la sessió.
 * @param $images Model que encapsula les imatges.
 *
 **/
function ctrlIndex($request, $response, $container){
  
  $response->setTemplate("index.php");
  $response->set("container",$container);

  return $response;
}
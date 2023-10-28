<?php

function adtemporadaApartamento($request, $response, $container){
      
    $temporada_apartamentosModel=$container->temporada_servicios();
    
    $temporadas_apartamentos=$temporada_apartamentosModel->getAllApartamentos($_GET["id"]);
    
    $temporadaModel=$container->temporada();
    $totaltemporada=$temporadaModel->getTemporadas($_SESSION["user"]["IDUsuario"]);

    for($i=0;$i<count($totaltemporada);$i++){
        for($i2=0;$i2<count($temporadas_apartamentos);$i2++){
                if($temporadas_apartamentos[$i]["temporadaNombre"]==$totaltemporada[$i2]["temporadaNombre"]){
                    
                    $totaltemporada[$i]=1;
                }
        }
    }
    
    $response->set("temporadas_apartamentos",$temporadas_apartamentos);
    $response->set("totaltemporada",$totaltemporada);
    $response->setTemplate("addtemporada_apartamento.php");
    $response->set("container",$container);
    return $response;
  }
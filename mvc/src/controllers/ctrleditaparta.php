<?php

function ctrleditaparta($request, $response, $container){
    
  
        $response->setTemplate("editapartamento.php");
        $response->set("container",$container);
      
        return $response;
    
}
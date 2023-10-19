<?php

function ctrlFooter($request, $response, $container){
  
    $response->setTemplate("footer.php");
    $response->set("container",$container);
  
    return $response;
  }
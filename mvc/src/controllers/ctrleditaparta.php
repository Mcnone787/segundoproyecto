<?php

function ctrleditaparta($request, $response, $container){
    
  
        $response->setTemplate("editapartamento.php");
        $apartamento=$container->apartamentos();
        $apartamento=$container->apartamentos();

        $servicios_apartamentos=$container->servicios_apartamentos();
        $serviciosID=$servicios_apartamentos->getAll($request->get(INPUT_GET,"id"));
        $servicios=$container->servicios();
        $servicios_nombres=[];
        
        
        for($i=0;$i<count($serviciosID);$i++){
            array_push($servicios_nombres,$servicios->getservicioall($serviciosID[$i]["servicioid"]));
        }

        $id=$request->get(INPUT_GET, "id");
        $informationapartamento=$apartamento->getapartamento($id);
       $response->set("informationapartamento", $informationapartamento);
       $response->set("servicios_nombres",$servicios_nombres);
        return $response;
    
}
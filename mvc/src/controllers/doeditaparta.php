<?php

function doeditaparta($request, $response, $container){
    $Titulo = $request->get(INPUT_POST, "Titulo"); 
    $CP = $request->get(INPUT_POST, "CP"); 
    $Laltitud = $request->get(INPUT_POST, "Laltitud"); 
    $Longitud = $request->get(INPUT_POST, "Longitud"); 
    $descripcion = $request->get(INPUT_POST, "descripcion"); 
    $m2 = $request->get(INPUT_POST, "m2"); 
    $Longitud = $request->get(INPUT_POST, "Longitud"); 
    $descripcion = $request->get(INPUT_POST, "descripcion"); 
    $add =[];
    $valores=$_POST; 
  
    foreach($valores as $i=> $item){
        // echo $i;
        if(str_contains($i, 'add')){
            $add[]=$i;
        }
    }
    print_r($add);
    die();
    //[] => 4 [] => 4 [] => altura 2 [] => dawdad [] => [] => 4 [add1] => on [precioalt] => 4 [temporada] => 4 [estados] => 4 ) d
    
}
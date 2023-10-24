<?php

function doeditaparta($request, $response, $container){
    $Modaapartameto=$container->apartamentos();
    $id=$request->get(INPUT_GET, "id"); 
    $Titulo = $request->get(INPUT_POST, "Titulo"); 
    $CP = $request->get(INPUT_POST, "CP"); 
    $Laltitud = $request->get(INPUT_POST, "Laltitud"); 
    $Longitud = $request->get(INPUT_POST, "Longitud"); 
    $descripcion = $request->get(INPUT_POST, "descripcion"); 
    $m2 = $request->get(INPUT_POST, "m2"); 
    $Longitud = $request->get(INPUT_POST, "Longitud"); 
    $descripcion = $request->get(INPUT_POST, "descripcion"); 
    $add =[];
    $precioalt = $request->get(INPUT_POST, "precioalt"); 
    $preciobaj = $request->get(INPUT_POST, "preciobaj"); 
    $temporada = $request->get(INPUT_POST, "temporada"); 
    $estados = $request->get(INPUT_POST, "estados"); 
    $valores = $_POST; 
    // echo $id,$Titulo,
    // $CP,
    // $Laltitud ,
    // $Longitud,
    // $descripcion ,
    // $m2,
    // $add ,
    // $precioalt,
    // $preciobaj,
    // $temporada,
    // $estados;
    foreach($valores as $i=> $item){
        // echo $i;
        if(str_contains($i, 'add')){
            $add[]=$i;
        }
    }
    $updateaparmeto=$Modaapartameto->setupdateapartamento(  $id,$Titulo,
    $CP,
    $Laltitud ,
    $Longitud,
    $descripcion ,
    $m2,
    $precioalt,
    $preciobaj
     );
     $response->redirect("location: index.php?r=gestores");
    
}
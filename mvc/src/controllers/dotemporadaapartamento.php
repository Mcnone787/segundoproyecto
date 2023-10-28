<?php

function doeditTempoAparta($request, $response, $container){
    $TemporadaApartamentoModel=$container->temporada_servicios();
    $id=$request->get(INPUT_GET, "id"); 
    $add =[];
    $rm=[];
 
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
            $add[]=str_replace("add","",$i);
        }
    }
    foreach($valores as $i=> $item){
        // echo $i;
        if(str_contains($i, 'rm')){
            $rm[]=str_replace("rm","",$i);
        }
    }

    foreach($add as $item){
        $TemporadaApartamentoModel->add_temporada($id,$item);
    }
    foreach($rm as $item){
        $TemporadaApartamentoModel->rm_temporada($id,$item);
    }
  


     $response->redirect("location: index.php?r=gestores_apartamentos");
    
}
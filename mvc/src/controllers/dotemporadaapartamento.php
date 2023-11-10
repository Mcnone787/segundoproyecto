<?php

function doeditTempoAparta($request, $response, $container)
{
    $TemporadaApartamentoModel = $container->temporada_servicios();
    $id = $request->get(INPUT_GET, "id");

    if($id == null){
        $response->redirect("Location: index.php?r=gestores_apartamentos&error=1");
        return;
    }
    if($id == -1){
        $response->redirect("Location: index.php?r=gestores_apartamentos&error=2");
        return;
    }
    $add = [];
    $rm = [];

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
    foreach ($valores as $i => $item) {
        // echo $i;
        if (str_contains($i, 'add')) {
            $add[] = str_replace("add", "", $i);
        }
    }
    foreach ($valores as $i => $item) {
        // echo $i;
        if (str_contains($i, 'rm')) {
            $rm[] = str_replace("rm", "", $i);
        }
    }

    foreach ($add as $item) {
        $TemporadaApartamentoModel->add_temporada($id, $item);
    }
    foreach ($rm as $item) {
        $TemporadaApartamentoModel->rm_temporada($id, $item);
    }

    $response->redirect("location: index.php?r=gestores_apartamentos");
}

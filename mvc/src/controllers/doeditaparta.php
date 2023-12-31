<?php

function doeditaparta($request, $response, $container)
{
    $Modaapartameto = $container->apartamentos();
    $Modelservicio_apartamentos = $container->servicios_apartamentos();
    $id = $request->get(INPUT_GET, "id");
    $Titulo = $request->get(INPUT_POST, "Titulo");
    $CP = $request->get(INPUT_POST, "CP");
    $Laltitud = $request->get(INPUT_POST, "Laltitud");
    $Longitud = $request->get(INPUT_POST, "Longitud");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $m2 = $request->get(INPUT_POST, "m2");
    $Longitud = $request->get(INPUT_POST, "Longitud");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $add = [];
    $rm = [];
    $precioalt = $request->get(INPUT_POST, "precioalt");
    $preciobaj = $request->get(INPUT_POST, "preciobaj");
    $numhabita = $request->get(INPUT_POST, "numhabita");

    if($Titulo == null || $CP == null || $Laltitud == null || $Longitud == null || $descripcion == null || $m2 == null || $precioalt == null || $preciobaj == null || $numhabita == null){
        $response->redirect("Location: index.php?r=ctrleditaparta&error=1");
        return;
    }
    if($m2 == -1 || $precioalt == -1 || $preciobaj == -1 || $numhabita == -1){
        $response->redirect("Location: index.php?r=ctrleditaparta&error=2");
        return;
    }
    if($precioalt < $preciobaj){
        $response->redirect("Location: index.php?r=ctrleditaparta&errorApartamento=1");
        return;
    }

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
        $Modelservicio_apartamentos->add_servicios($id, $item);
    }
    foreach ($rm as $item) {
        $Modelservicio_apartamentos->rm_servicios_apartamento($id, $item);
    }

    $updateaparmeto = $Modaapartameto->setupdateapartamento(
        $id,
        $Titulo,
        $CP,
        $Laltitud,
        $Longitud,
        $descripcion,
        $m2,
        $precioalt,
        $preciobaj,
        $numhabita
    );

    if ($_SESSION['user']['Rol'] == 'gestor') {

        $response->redirect("location: index.php?r=gestores_apartamentos");
    }
    if($_SESSION['user']['Rol'] == 'admin') {
        $response->redirect("location: index.php?r=adminApartamento");

    }
}

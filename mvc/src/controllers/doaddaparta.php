<?php

function doanadiraparta($request, $response, $container)
{
    $Modaapartameto = $container->apartamentos();
    $Modelservicio_apartamentos = $container->servicios_apartamentos();

    $id = $_SESSION["user"]["IDUsuario"];
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

    $updateaparmeto = $Modaapartameto->setaddapartamento(
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
    $ultimo_apartamento = $Modaapartameto->ultimoapartamento();
    foreach ($add as $item) {
        $Modelservicio_apartamentos->add_servicios($ultimo_apartamento["ApartamentosID"], $item);
    }

    $response->redirect("location: index.php?r=gestores");
}

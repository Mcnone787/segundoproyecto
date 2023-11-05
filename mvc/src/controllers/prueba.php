<?php
function pruebas($request, $response, $container)
{
    $apartamentosModel = $container->apartamentos();

    $apartamentosModel=$container->apartamentos();
 
    $apartamentosdisponibles=$apartamentosModel->getapartamentosdisoponibles($_POST["diaini"],$_POST["diafin"],$_POST["numhabita"],$_POST["titulo"]);
$pruebas=[
    "prueba1"=>1
];
$ruta_json="../src/jsons/img.json";
$jsoninfoimgs=file_get_contents($ruta_json);
$jsoninfoimgsdecode=json_decode($jsoninfoimgs,true);

$prueba2=$apartamentosdisponibles;
$informacion=[$prueba2,$jsoninfoimgsdecode];
echo json_encode($informacion,true);
    $apartamentosdisponibles = $apartamentosModel->getapartamentosdisoponibles($_POST["diaini"], $_POST["diafin"], $_POST["numhabita"], $_POST["titulo"]);
    $pruebas = [
        "prueba1" => 1
    ];
    $prueba2 = json_encode($pruebas, true);
    echo json_encode($apartamentosdisponibles);
}

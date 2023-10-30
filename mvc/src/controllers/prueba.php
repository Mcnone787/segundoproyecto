<?php
function pruebas($request, $response, $container){

    $apartamentosModel=$container->apartamentos();
 
    $apartamentosdisponibles=$apartamentosModel->getapartamentosdisoponibles($_POST["diaini"],$_POST["diafin"],$_POST["numhabita"],$_POST["titulo"]);
$pruebas=[
    "prueba1"=>1
];
$prueba2=json_encode($pruebas,true);
echo json_encode(["d"=>[1,2,3],"d2"=>[1,2,3]],true);
}

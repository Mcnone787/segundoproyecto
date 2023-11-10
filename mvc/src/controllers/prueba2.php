<?php
function pruebas2($request, $response, $container){

    $temporadaModel=$container->temporada_servicios();
    
    $temporada=$temporadaModel->daysinrangetemporada($_POST["diaini"],$_POST["idapartamento"]);

 echo json_encode($temporada);

}
 
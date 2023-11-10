<?php
function infopdfreservas($request, $response, $container){
    $reservainfoModel=$container->reservas();
   
    $informacion=$reservainfoModel->reservas_apartamento_usuario($_POST["idreserva"]);
    $apartamentoModel=$container->apartamentos();
    $apartamento=$apartamentoModel->getapartamento($informacion[0]["ApartamentosID"]);
    
    echo json_encode([$informacion,$apartamento]);

 

}
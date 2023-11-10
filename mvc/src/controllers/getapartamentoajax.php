<?php

function getapartamentoAJAX($request, $response, $container){
        $apartamentoModel=$container->apartamentos();

        $apartamento=$apartamentoModel->getapartamento($_POST["idapartamento"]);
        $imgjson=json_decode(file_get_contents("../src/jsons/img.json"),true);
        $imgjson_= $imgjson["src"][$_POST["idapartamento"]];


        echo  json_encode([$apartamento,$imgjson_]);
}
<?php
function ctrlestados($request, $response, $container){
    $arpartamentoModel=$container->apartamentos();
    
    $apartamentos=$arpartamentoModel->getAll($_SESSION["user"]["IDUsuario"]);
    $response->set("apartamentos", $apartamentos);
    $response->set("container", $container);

    $response->setTemplate("add_estados_gestores.php");
}
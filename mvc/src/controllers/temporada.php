<?php

function temporada($request, $response, $container)
{
  $apartamentoModel = $container->apartamentos();
  $apartamentos = $apartamentoModel->getApartamentos();
  $response->set("apartamntos", $apartamentos);
  $response->setTemplate("temporada.php");
  $response->set("container", $container);
  return $response;
}

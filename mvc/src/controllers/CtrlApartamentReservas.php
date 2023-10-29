<?php

function ctrlApartamentosReservas($request, $response, $container)
{
    $apartamentosModal = $container->apartamentos();
    $apartamentos = $apartamentosModal->getapartamentos();

    $precioAlt = $apartamentos["precioALT"];
    $precioBaj = $apartamentos["PrecioBAJ"];
    $CP = $apartamentos["CP"];
    $m2 = $apartamentos["m2"];
    $numHabitaciones = $apartamentos["num_habita"];
    $Titulo = $apartamentos["Titulo"];
    $latitud = $apartamentos["latitud"];
    $longitud = $apartamentos["Longitud"];
    $lista_servicios = $apartamentos["Lista_servicios"];

    $response-> set("precioBaj", $precioBaj);
    $response-> set("precioAlt", $precioAlt);
    $response-> set("CP", $CP);
    $response-> set("m2", $m2);
    $response-> set("numHabitaciones", $numHabitaciones);
    $response-> set("Titulo", $Titulo);
    $response-> set("latitud", $latitud);
    $response-> set("longitud", $longitud);
    $response-> set("lista_servicios", $lista_servicios);
    return $response;
}
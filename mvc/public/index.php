<?php

/**
 * Exemple de MVC.
 * Exemple per a M07 - Projecte 2.
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Exemple amb una mini galeria d'imatges.
 * Per provar com funcionar podeu executar php -S localhost:8000 a la carpeta public.
 * I amb el navegador visitar la url http://localhost:8000/
 *
 *
 **/

 
 include "../src/config.php";

include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/registro.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = $_REQUEST["r"];


// /* Creem els diferents models */
// $session = new Daw\Session();
// $images = new Daw\Images();

switch ($r) {
    case "login":
        ctrlLogin($request, $response, $container);
        break;
    case "index":
        ctrlIndex($request, $response, $container);
        break;
    case "registro":
        ctrlRegistro($request, $response, $container);
        break;
    case "footer":
        ctrlFooter($request, $response, $container);
        break;
    default:
    ctrlIndex($request, $response, $container);

        break;
}

$response->response();





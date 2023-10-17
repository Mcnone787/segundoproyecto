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



include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/registro.php";

$r = $_REQUEST["r"];

// /* Creem els diferents models */
// $session = new Daw\Session();
// $images = new Daw\Images();

switch ($r) {
    case "login":
        ctrlLogin();
        break;
    case "index":
        ctrlIndex();
        break;
    case "registro":
        ctrlRegistro();
        break;
    default:
        ctrlIndex();
        break;
}


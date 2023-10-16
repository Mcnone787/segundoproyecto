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
include "../src/controllers/footer.php";


// $r = $_REQUEST["r"];

// /* Creem els diferents models */
// $session = new Daw\Session();
// $images = new Daw\Images();

// if ($r === "login") {
//     ctrlLogin($_GET, $session);
// } elseif ($r === "save") {
//     ctrlSave($_POST, $session);
// } elseif ($r == "about") {
//     ctrlAbout($_GET, $_COOKIE, $session);
// } elseif ($r == "exemple") {
//     ctrlExemple($images);
// } elseif ($r == "") {
//     ctrlIndex($_GET, $_COOKIE, $session, $images);
// } else {
//     ctrlError($_GET, $session);
// }


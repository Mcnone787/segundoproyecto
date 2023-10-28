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
include "../src/controllers/footer.php";
include "../src/controllers/nav.php";
include "../src/controllers/registro.php";
include "../src/controllers/ctrlDologin.php";
include "../src/controllers/DoRegister.php";
include "../src/controllers/ctrlLogout.php";
include "../src/controllers/gestors.php";
include "../src/controllers/Ctrldeletedepartamento.php";
include "../src/controllers/Ctrlanadirapartamento.php";
include "../src/controllers/apartamentos.php";
include "../src/controllers/CtrlUserData.php";
include "../src/controllers/CtrlUserDataUpdate.php";
include "../src/controllers/ctrleditaparta.php";
include "../src/controllers/doeditaparta.php";
include "../src/controllers/doaddaparta.php";
include "../src/controllers/CtrlApartamentReservas.php";
include "../src/controllers/temporada.php";
include "../src/controllers/addtemporada.php";
include "../src/controllers/TempoParaApartame.php";
include "../src/controllers/gestores_apartamentos.php";
include "../src/controllers/gestores_estados.php";
include "../src/controllers/gestores_temporadas.php";
include "../src/controllers/deletetemporada.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = $_REQUEST["r"];


// /* Creem els diferents models */
// $session = new Daw\Session();
// $images = new Daw\Images()dd;
switch ($r) {
    case "login":
        ctrlLogin($request, $response, $container);
        break;
    case "gestores":
        ctrlgestores($request, $response, $container);
        break;
    case "index":
        ctrlIndex($request, $response, $container);
        break;
    case "registro":
        ctrlRegistro($request, $response, $container);
        break;
    case "doregistro":
        ctrlDoRegistro($request, $response, $container);
        break;
    case "dologin":
        ctrlDoLogin($request, $response, $container);
        break;
    case "dologout":
        ctrlDoLogout($request, $response, $container);
        break;
    case "perfilUser":
        ctrlUserData($request, $response, $container);
        break;
    case "doUpDateUserData":
        ctrlUserDataUpdate($request, $response, $container);
        break;
    case "ctrldeleteapartamento":
        ctrldeletedepartamento($request, $response, $container);
        break;
    case "addapartamento":
        ctrladdapartamento($request, $response, $container);
        break;
    case "apartamentos":
        ctrlApartamentos($request, $response, $container);
        break;
        case "ctrleditaparta":
            ctrleditaparta($request, $response, $container);
            break;
            case "doeditaparta":
                doeditaparta($request, $response, $container);
                break;
                case "doanadiraparta":
                    doanadiraparta($request, $response, $container);
                    break;
    case "apartamentoReserva":
        ctrlApartamentosReservas($request, $response, $container);
        break;
    case "footer":
            ctrlFooter($request, $response, $container);
        break;
    case "temporada":
            temporada($request, $response, $container);
        break;
        case "addtemporada":
            addtemporada($request, $response, $container);
        break;
        case "TempoParaApartame" :
            adtemporadaApartamento($request, $response, $container);
        break;
        case "gestores_apartamentos" :
            gestores_apartamentos($request, $response, $container);
        break;
        case "gestores_estados" :
            gestores_estados($request, $response, $container);

        break;
        case "gestores_temporadas" :
            gestores_temporadas($request, $response, $container);

        break;
        case "deletetemporada":
            deleteTemporada($request, $response, $container);
            break; 
    default:
        ctrlIndex($request, $response, $container);
        break;
}


$response->response();

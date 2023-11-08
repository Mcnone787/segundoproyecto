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
include "../src/controllers/ctrlDologin.php";
include "../src/controllers/DoRegister.php";
include "../src/controllers/ctrlLogout.php";
include "../src/controllers/CtrlAdmin.php";
include "../src/controllers/Ctrldeletedepartamento.php";
include "../src/controllers/Ctrlanadirapartamento.php";
include "../src/controllers/CtrlApartamentos.php";
include "../src/controllers/CtrlUserData.php";
include "../src/controllers/CtrlUserDataUpdate.php";
include "../src/controllers/CtrlReservas.php";
include "../src/controllers/doReserva.php";
include "../src/controllers/ctrleditaparta.php";
include "../src/controllers/doeditaparta.php";
include "../src/controllers/doaddaparta.php";
include "../src/controllers/temporada.php";
include "../src/controllers/addtemporada.php";
include "../src/controllers/TempoParaApartame.php";
include "../src/controllers/gestores_apartamentos.php";
include "../src/controllers/gestores_estados.php";
include "../src/controllers/gestores_temporadas.php";
include "../src/controllers/gestores_reserva.php";
include "../src/controllers/deletetemporada.php";
include "../src/controllers/dotemporadaapartamento.php";
include "../src/controllers/prueba.php";
include "../src/controllers/prueba2.php";
include "../src/controllers/getapartamentoajax.php";
include "../src/controllers/img_apartamentos_ajax.php";
include "../src/controllers/deleteuser.php";
include "../src/controllers/doedituser.php";
include "../src/controllers/doadduser.php";
include "../src/controllers/CtrlAddUser.php";
include "../src/controllers/CtrlEditUser.php";
include "../src/controllers/deletereserva.php";
include "../src/controllers/ctrlgaleriaima.php";
include "../src/controllers/CtrlAdminApartamento.php";
include "../src/controllers/CtrlAdminTemporada.php";
include "../src/controllers/CtrlAdminReserva.php";
include "../src/controllers/CtrlAdminUsuarios.php";
include "../src/controllers/CtrlAdminEstados.php";
include "../src/controllers/modifygalery.php";
include "../src/controllers/ctrlestados.php";
include "../src/controllers/addestados.php";


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

// Front Controller
switch ($r) {
    case "prueba":
        pruebas($request, $response, $container);
        break;
    case "prueba2":
        pruebas2($request, $response, $container);
        break;
    case "login":
        ctrlLogin($request, $response, $container);
        break;
    case "panelAdmin":
        ctrlAdmin($request, $response, $container);
        break;
    case "adminApartamento":
        ctrlAdminApartamento($request, $response, $container);
        break;
    case "adminTemporada":
        ctrlAdminTemporada($request, $response, $container);
        break;
    case "adminReservas":
        ctrlAdminReserva($request, $response, $container);
        break;
    case "adminUsuarios":
        ctrlAdminUsuarios($request, $response, $container);
        break;
    case "adminEstados":
        ctrlAdminEstado($request, $response, $container);
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
    case "reservas":
        ctrlReservas($request, $response, $container);
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
    case "doreserva":
        ctrlDoReserva($request, $response, $container);
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
    case "temporada":
        temporada($request, $response, $container);
        break;
    case "addtemporada":
        addtemporada($request, $response, $container);
        break;
    case "TempoParaApartame":
        adtemporadaApartamento($request, $response, $container);
        break;
    case "ctrledituser":
        CtrlEditUser($request, $response, $container);
        break;
    case "ctrldeleteuser":
        deleteuser($request, $response, $container);
        break;
    case "ctrladduser":
        CtrlAddUser($request, $response, $container);
        break;
    case "gestores_apartamentos":
        gestores_apartamentos($request, $response, $container);
        break;
    case "gestores_estados":
        gestores_estados($request, $response, $container);
        break;
    case "gestores_temporadas":
        gestores_temporadas($request, $response, $container);
        break;
    case "gestores_reserva":
        gestores_reserva($request, $response, $container);
        break;
    case "edituser":
        edituser($request, $response, $container);
        break;
    case "deleteuser":
        deleteuser($request, $response, $container);
        break;
    case "doadduser":
        adduser($request, $response, $container);
        break;
    case "deletereserva":
        deletereserva($request, $response, $container);
        break;
    case "deletetemporada":
        deleteTemporada($request, $response, $container);
        break;
    case "dotemporadaapartamento";
        doeditTempoAparta($request, $response, $container);
        break;
    case "apartamentoAJAX":
        getapartamentoAJAX($request, $response, $container);
        break;
    case "img_apartamentos_ajax":
        img_apartamentos_ajax($request, $response, $container);
        break;
    case "galeriaima":
        ctrlgaleriaima($request, $response, $container);
        break;
        case "modifygalery":
            modifygalery($request, $response, $container);
            break;
            case "estados":
                ctrlestados($request, $response, $container);
                break;
                case "addestados":
                    addestados($request, $response, $container);
                    break;
    default:
        ctrlIndex($request, $response, $container);
        break;
        
}

$response->response();

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
include "../src/controllers/Ctrldetallesreserva.php";
include "../src/controllers/infopdfreservas.php";
include "../src/controllers/deletestado.php";
include "../src/controllers/ctrlserviciosAdmin.php";
include "../src/controllers/dodeleteservicio.php";
include "../src/controllers/ctrladdservicio.php";
include "../src/controllers/doaddservicio.php";

include "../src/middleware/isLogged.php";
include "../src/middleware/isgestor.php";
include "../src/middleware/isadmin.php";

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
        isadmin($request, $response, $container,"ctrlAdmin");
        break;
    case "adminApartamento":
        isadmin($request, $response, $container,"ctrlAdminApartamento");
        break;
    case "adminTemporada":
        isadmin($request, $response, $container,"ctrlAdminTemporada");
        break;
    case "adminReservas":
        isadmin($request, $response, $container,"ctrlAdminReserva");

        break;
    case "adminUsuarios":
        isadmin($request, $response, $container,"ctrlAdminUsuarios");

        break;
    case "adminEstados":
        isadmin($request, $response, $container,"ctrlAdminEstado");

        
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
        isLogged($request, $response, $container,"ctrlUserData");
        break;
    case "doUpDateUserData":
        isLogged($request, $response, $container,"ctrlUserDataUpdate");
        break;
    case "reservas":
        isLogged($request, $response, $container,"ctrlReservas");

        break;
    case "ctrldeleteapartamento":

        isgestor($request, $response, $container,"ctrldeletedepartamento");
        break;
    case "addapartamento":

        isgestor($request, $response, $container,"ctrladdapartamento");

        break;
    case "apartamentos":
        
        ctrlApartamentos($request, $response, $container);
        break;
    case "doreserva":
        isLogged($request, $response, $container,"ctrlDoReserva");

        
        break;
    case "ctrleditaparta":

        isgestor($request, $response, $container,"ctrleditaparta");

        break;
    case "doeditaparta":

        isgestor($request, $response, $container,"doeditaparta");

        break;
    case "doanadiraparta":

        isgestor($request, $response, $container,"doanadiraparta");

        break;
    case "temporada":

        isgestor($request, $response, $container,"temporada");

        break;
    case "addtemporada":

        isgestor($request, $response, $container,"addtemporada");

        break;
    case "TempoParaApartame":

        isgestor($request, $response, $container,"adtemporadaApartamento");

        break;
    case "ctrledituser":
        isadmin($request, $response, $container,"CtrlEditUser");

        break;
    case "ctrldeleteuser":
        isadmin($request, $response, $container,"deleteuser");

        
        break;
    case "ctrladduser":
        isadmin($request, $response, $container,"CtrlAddUser");


        break;
    case "gestores_apartamentos":

        isgestor($request, $response, $container,"gestores_apartamentos");

        break;
    case "gestores_estados":

        isgestor($request, $response, $container,"gestores_estados");

        break;
    case "gestores_temporadas":

        isgestor($request, $response, $container,"gestores_temporadas");

        break;
    case "gestores_reserva":

        isgestor($request, $response, $container,"gestores_reserva");

        break;
    case "edituser":
        edituser($request, $response, $container);
        break;
    case "deleteuser":
        
        isadmin($request, $response, $container,"deleteuser");

        break;
    case "doadduser":
        adduser($request, $response, $container);

        break;
    case "ctrldetallesreserva":
        ctrldetallesreserva($request, $response, $container);
        break;
    case "deletereserva":
        deletereserva($request, $response, $container);


        break;
    case "deletetemporada":

        isgestor($request, $response, $container,"deleteTemporada");

        break;
    case "dotemporadaapartamento";

        isgestor($request, $response, $container,"doeditTempoAparta");

        break;
    case "apartamentoAJAX":
        getapartamentoAJAX($request, $response, $container);
        break;
    case "img_apartamentos_ajax":
        img_apartamentos_ajax($request, $response, $container);
        break;
    case "galeriaima":

        isgestor($request, $response, $container,"ctrlgaleriaima");

        break;
    case "modifygalery":

                isgestor($request, $response, $container,"modifygalery");

        break;
    case "estados":

        isgestor($request, $response, $container,"ctrlestados");

        break;
    case "addestados":

        isgestor($request, $response, $container,"addestados");

        break;
    case "infopdfreservas":

        isLogged($request, $response, $container,"infopdfreservas");


        break;
        case "deletestado":

            isgestor($request, $response, $container,"deleteestado");

            break;
            case "ctrlserviciosAdmin":  
                isadmin($request, $response, $container,"ctrlserviciosAdmin");

                
                break;
            case "dodeleteservicio":

                isgestor($request, $response, $container,"dodeleteservicio");
            break;
            case "ctrladdservicio":
                isadmin($request, $response, $container,"ctrladdservicio");

                    break;
                    case "doaddservicio":
                        isadmin($request, $response, $container,"doaddservicio");

                        break;
    default:
        ctrlIndex($request, $response, $container);
        break;
}

$response->response();

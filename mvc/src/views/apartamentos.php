<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <style>
        .house {
            display: block;
            margin: auto;
            width: 16em;
            height: auto;
        }
        #map { height: 180px; }
        /* Dark theme */
        @media (prefers-color-scheme: dark) {
            :root {
                --bg: hsl(var(--hue), 10%, 10%);
                --fg: hsl(var(--hue), 10%, 90%);
            }

        }

        .spiner {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }
    </style>
</head>

<body>
    <?php include 'nav.php'; ?>
    <?php include 'ERROR_MANAGMENT.php'; ?>

    <div class="container" style="">
        <div class="row">
            <div class="form-inline " style="
    margin-top: 50px;
    background: #8ec7eb59;
    padding: 20px;
    border-radius:27px;
 ">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-5">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="titulo" id="titulo">
                </div>
            </div>
            <div class="row d-flex justify-content-center ">
             <div class="col-12 col-lg-8 ">
             <div class="row  d-flex align-items-center d-flex justify-content-evenly">
                    <div class="col-12 col-lg-5 p-0 p-lg-3">
                        <input type="text" id="from" name="from" placeholder="Fecha final de la reserva!"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">                    
                    </div>
                    <div class="col-12 col-lg-4 ">
                        <input type="text" id="to" name="to" placeholder="Fecha final de la reserva!"  class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                
             </div>
             <div class="col-12 col-lg-2  ">
             <div class="col-12 col-lg-12  p-0 p-lg-3">
                <input type="number" name="numhabita" min="1" id="numhabita" placeholder="Num. de habitaciones"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
             </div>
    </div>
                <div class="col-12 d-flex justify-content-center ">
                    <button class="btn btn-outline-success my-2 my-sm-0 " style="float:right;width:60%;" type="submit" id="buscarbtn">Buscar</button>
                </div>
            </div>
            
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2  row-cols-xl-4 g-4 my-5 py-3" id="cosas">
            <?php if (isset($apartamentos) && is_array($apartamentos)) : ?>
                <?php foreach ($apartamentos as $apartamento) : ?>
                    <?php

                    $titulo = $apartamento['Titulo'];
                    $descripcion = $apartamento['Descripcion'];
                    $numHabitaciones = $apartamento['num_habita'];
                    $precioAlt = $apartamento['precioALT'];
                    $precioBaj = $apartamento['PrecioBAJ'];
                    $apartamentoID = $apartamento['ApartamentosID'];
                    $imgApartamento=$imgjsondecode["src"][$apartamentoID]["src_imagen"][0];
                    ?>
                    <div class="col apartamento_ px-2" id="<?php echo   $apartamentoID; ?>">
                        <a class="link-offset-2 link-underline link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#apartamentoReserva" class="stretched-link">
                            <div class="card h-100" style="width: 100%;">
                                <img src="<?php echo $imgApartamento == null ? 'imgs/logo/logo.png' : $imgApartamento ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $titulo ?>
                                    </h5>
                                    <p class="card-text">
                                        <?= $descripcion ?>
                                    </p>
                                    <p class="card-text">Habitaciones:
                                        <?= $numHabitaciones ?>
                                    </p>
                                    <h6 class="card-text">Precio Alto:
                                        <?= $precioAlt ?>€ - Precio Bajo:
                                        <?= $precioBaj ?>€
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No apartments available.</p>
            <?php endif; ?>
        </div>

        <!-- modal -->
        <div id="apartamentoReserva" tabindex="-1" class="modal fade" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div id="spiner">
                        <svg class="house spiner" viewBox="0 0 200 160" width="200px" height="160px" role="img" aria-label="Animated outline drawing of a house spinning">
                            <g fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" transform="translate(30,0)">
                                <polyline class="house__roof1" points="70 1,70 95">
                                    <animate attributeName="points" dur="2s" repeatCount="indefinite" keyTimes="0;0.5;0.75;1" values="70 1,139 70;70 1,1 70;70 1,-27 70;70 1,1 70" />
                                </polyline>
                                <polyline class="house__roof2" points="70 1,70 95">
                                    <animate attributeName="points" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;1" values="70 1,139 70;70 1,167 70;70 1,139 70;70 1,1 70" />
                                </polyline>
                                <polyline class="house__roof-edge" points="1 70,139 70">
                                    <animate attributeName="points" dur="2s" repeatCount="indefinite" values="1 70,139 70;-27 70,167 70;1 70,139 70;-27 70,167 70;1 70,139 70" />
                                </polyline>
                                <polyline class="house__edge1" points="139 70,139 159">
                                    <animate attributeName="points" dur="2s" repeatCount="indefinite" keyTimes="0;0.5;0.75;1" values="139 70,139 159;1 70,1 159;-27 70,-27 159;1 70,1 159" />
                                </polyline>
                                <polyline class="house__edge2" points="139 70,139 159">
                                    <animate attributeName="points" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;1" values="139 70,139 159;167 70,167 159;139 70,139 159;1 70,1 159" />
                                </polyline>
                                <rect class="house__left-window" x="20" y="85" width="40" height="32">
                                    <animate attributeName="width" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;0.75;1" values="0;28;40;28;0" />
                                    <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;0.75;1" values="139;84;20;-13;1" />
                                </rect>
                                <rect class="house__right-window" x="80" y="85" width="40" height="32">
                                    <animate attributeName="width" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;0.75;1" values="0;28;40;28;0" />
                                    <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;0.75;1" values="139;127;80;29;1" />
                                </rect>
                                <rect class="house__door1" x="50" y="110" width="40" height="49">
                                    <animate attributeName="width" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;1" values="40;28;0;0" />
                                    <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.25;0.5;1" values="50;7;1;1" />
                                </rect>
                                <rect class="house__door2" x="50" y="110" width="40" height="49">
                                    <animate attributeName="width" dur="2s" repeatCount="indefinite" keyTimes="0;0.5;0.75;1" values="0;0;28;40" />
                                    <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.5;0.75;1" values="139;139;105;50" />
                                </rect>
                                <polygon class="house__outline" points="70 1,139 70,139 159,1 159,1 70">
                                    <animate attributeName="points" dur="2s" repeatCount="indefinite" values="70 1,139 70,139 159,1 159,1 70;70 1,167 70,167 159,-27 159,-27 70;70 1,139 70,139 159,1 159,1 70;70 1,167 70,167 159,-27 159,-27 70;70 1,139 70,139 159,1 159,1 70" />
                                </polygon>
                            </g>
                        </svg>
                    </div>
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div id="modalBody" class="modal-body bg-body-secondary">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <!-- img -->
                                        <div class="col-12 col-md-6 p-3 m-3 rounded-4 bg-white imgReservaBox">
                                            <div id="carouselExampleIndicators" class="carousel slide slider_modal ">
                                                <div class="carousel-indicators" id="buttons_carr"></div>
                                                <div class="carousel-inner" id="slider_modal_img"></div>
                                            </div>
                                        </div>
                                        <!-- reserva -->
                                        <div class="col p-3 m-3 rounded-4 bg-white reservabox">
                                            <div class="col mt-3 p-3">
                                                <div class="col d-flex rounded-2 p-3 m-3 text-center" style="border: 1px black">
                                                    <div class="col rounded p-3">
                                                        <span class="fw-bold">Llegada</span>
                                                        <p id="llegada"></p>
                                                    </div>
                                                    <div class="col rounded p-3">
                                                        <span class="fw-bold">Salida</span>
                                                        <p id="salida"></p>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <button class="btn btn-primary btn-lg " type="submit" id="reserva">Reservar</button>
                                                </div>
                                            </div>
                                            <div class="col mt-5 p-3">
                                                <div class="mb-3">
                                                    <span class="text-dark">Precio por dia por temporada baja:</span>
                                                    <span class="text-dark fw-bold" style="float: right;" id="preciobaja">100€</span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="text-dark">Precio por dia por temporada alta</span>
                                                    <span class="text-dark fw-bold" style="float: right;" id="precioalta">100€</span>
                                                </div>
                                                <div class="border-top mb-3">
                                                    <span class="text-dark">TOTAL:</span>
                                                    <span class="text-dark fw-bold" style="float: right;" id="total">100€</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- info -->
                            <div class="col p-3 m-3 bg-white text-dark rounded-4 infoReservaBox">
                                <div class="row">
                                    <div class="col-12 col-lg-6 p-3">
                                        <div class="col p-3 m-2">
                                            <div>
                                                <span class="fw-bold">Titulo:</span>
                                                <span class="text-dark" id="tituloapa">Titulo</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold">Descripcion:</span>
                                                <span class="text-dark" id="descapa">Descripcion</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold">M2:</span>
                                                <span class="text-dark" id="m2apa"> M2</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold">Numero Habitaciones:</span>
                                                <span class="text-dark" id="numhabitaapa"> Habitaciones</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 p-3">
                                        <h4>Servicios</h4>
                                        <div class="row" id="servicios">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div id="map"></div>
                    </div>
                    <div id="alertReserva" class="alert alert-success" role="alert">Reserva realizada correctamente. 
                        <button type="button" class="btn btn-primary" id="btnPDF">Descargar PDF</button>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script>


        $('#spiner').hide();
        // CALENDARIO

        // Filtro de apartamentos
        $("#from").datepicker({
            dateFormat: "yy-mm-dd",
            
        });
        $("#to").datepicker({
            dateFormat: "yy-mm-dd",

        });

        $(function() {
            var dateFormat = "yy-mm-dd",
                from = $("#from")
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3,

                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#to")
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3,
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }
                return date;
            }
        });
       
        let datos2
        let formfeiniglobal
        let formfefinglobal
        let id_

        let fechaini
        let fechafin
        let precioTotal
   
        let temporada_baja_defaultini;
        let temporada_baja_defaultfin
        let temporada_alta_defaultini
        let temporada_alta_defaultfin
        let tituloApartamento
        prueba()
        jQuery("#buscarbtn").click(() => {
            let fechaini_ = jQuery("#from").val();
            let fechafin_ = jQuery("#to").val();
            
            fechaini = fechaini_
            fechafin = fechafin_
            fecha = new Date(fechaini_)
            ano = fecha.getFullYear()
            let titulo = jQuery("#titulo").val();
            let numhabita = jQuery("#numhabita").val();
            formfeiniglobal = new Date(fechaini_)
            formfefinglobal = new Date(fechafin_)
            console.log(formfeiniglobal+" aquiii")
           let fechainitransform = formfeiniglobal.getFullYear()
           let fechafintransform = formfefinglobal.getFullYear()
            temporada_baja_defaultini = new Date(fechainitransform + "-01-01");
            temporada_baja_defaultfin = new Date(fechafintransform + "-06-30");
            temporada_alta_defaultini = new Date(fechainitransform + "-07-01");
            temporada_alta_defaultfin = new Date(fechafintransform + "-12-31");

            temporada_baja_defaultini.setHours(0,0,0,0)
            temporada_baja_defaultfin.setHours(0,0,0,0)
            temporada_alta_defaultini.setHours(0,0,0,0)
            temporada_alta_defaultfin.setHours(0,0,0,0)
            $.ajax({
                type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..
                url: "index.php", //url guarda la ruta hacia donde se hace la peticion
                data: {
                    r: "prueba",
                    diaini: fechaini,
                    diafin: fechafin,
                    titulo: titulo,
                    numhabita: numhabita
                }, // data recive un objeto con la informacion que se enviara al servidor
                success: function(datos) {
                    //success es una funcion que se utiliza si el servidor retorna informacion
                    console.log(datos)

                    let apartamentos = JSON.parse(datos);
                    datos2 = apartamentos

                        jQuery("#cosas").html("");
                        apartamentos[0].forEach((element) => {
                            let nombre = element.ApartamentosID
                            let src = ""
                            if (apartamentos[1].src.hasOwnProperty(nombre)) {
                                console.log(apartamentos[1].src[nombre].src_imagen[0])
                                if(apartamentos[1].src[nombre].src_imagen[0]!=""){
                                    src = apartamentos[1].src[nombre].src_imagen[0]
                                }else{
                                    src = "imgs/logo/logo.png"

                                }
                                

                        } else {
                            src = "imgs/logo/logo.png"
                        }
                        jQuery("#cosas").append(`
                        <div class="col apartamento_ px-2" id="${element.ApartamentosID}">
                        <a class="link-offset-2 link-underline link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#apartamentoReserva" class="stretched-link" >
                            <div class="card h-100" style="width: 100%;">
                                <img src='${src}' class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">${element.Titulo}</h5>
                                    <p class="card-text">${element.Descripcion}</p>
                                    <p class="card-text">Habitaciones: ${element.num_habita}</p>
                                    <h6 class="card-text">Precio Alto: ${element.precioALT}€ - Precio Bajo: ${element.PrecioBAJ}€</h6>
                                </div>
                            </div>
                        </a>
                    </div>`);
                        prueba()
                    });

                    //  datos.forEach(element => {
                    //     console.log(element.Titulo)
                    //  });
                },

                dataType: "html", // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
            });


        });

        function prueba() {
            $('#alertReserva').hide();
            jQuery(".apartamento_").each((element, obje) => {
                obje.addEventListener("click", () => {
                 
                   

                    id_ = obje.id
                    let sum = 0;
                    let apartamento_
                    let formfeini = formfeiniglobal
                    let formfefin = formfefinglobal
                    let precioALta = 0
                    let precioBaja = 0
                    let temporadaaltacount = 0;
                    let temporadabajacount = 0;
                    let galeriaimagenes = []
                    let servicios=[]
                    // Coger apartamento clicado para la info etc...
                    $.ajax({
                        type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..
                        url: "index.php", //url guarda la ruta hacia donde se hace la peticion
                        data: {
                            r: "apartamentoAJAX",
                            idapartamento: id_
                        },
                        async: false,
                        success: function(apartamento) {
                            
                            
                            apartamento_ = apartamento[0]

                            if (apartamento[1] != null) {
                                galeriaimagenes.push(apartamento[1].src_imagen)
                            }
                            servicios.push(apartamento[2])
                        }, 
                        dataType: "json", // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
                    });



                    for (i = formfeini; i < formfefin; i.setDate(i.getDate() + 1)) {
                        let fechaconstruir = i.getFullYear() + "-" + (i.getMonth() + 1) + "-" + i.getDate()
                        let fechaconstruir_dateformat = new Date(fechaconstruir);
                        $.ajax({
                            type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..
                            url: "index.php", //url guarda la ruta hacia donde se hace la peticion
                            data: {
                                r: "prueba2",
                                diaini: fechaconstruir,
                                idapartamento: id_
                            },
                            async: false,
                            success: function(prueba) {
                                
                                if(fechaconstruir_dateformat<formfefinglobal){

                               
                                if (prueba.length <= 0) {
                                    if (fechaconstruir_dateformat >= temporada_baja_defaultini && fechaconstruir_dateformat < temporada_baja_defaultfin) {
                                        sum += apartamento_.PrecioBAJ
                                        precioBaja = apartamento_.PrecioBAJ
                                        temporadabajacount++;


                                    } else if (fechaconstruir_dateformat >= temporada_alta_defaultini && fechaconstruir_dateformat < temporada_alta_defaultfin) {
                                        sum += apartamento_.precioALT
                                        precioALta = apartamento_.precioALT
                                        temporadaaltacount++;

                                    }
                                } else {
                                    switch (prueba[0].Tipo) {
                                        case "alta":
                                            sum += apartamento_.precioALT
                                            temporadaaltacount++;
                                            precioALta = apartamento_.precioALT
                                            break;
                                        case "baja":
                                            sum += apartamento_.PrecioBAJ
                                            precioBaja = apartamento_.PrecioBAJ
                                            temporadabajacount++;
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }

                            }, // data recive un objeto con la informacion que se enviara al servidor
                            //success es una funcion que se utiliza si el servi¡dor retorna informacion
                            //  datos.forEach(element => {
                            //     console.log(element.Titulo)
                            //  });
                            dataType: "json", // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
                        });
                    }
                    formfeiniglobal = new Date(fechaini)
                    formfefinglobal = new Date(fechafin)
                    jQuery("#llegada").html(fechaini);
                    jQuery("#salida").html(fechafin);
                    jQuery("#tituloapa").html(apartamento_.Titulo);
                    jQuery("#descapa").html(apartamento_.Descripcion);
                    jQuery("#m2apa").html(apartamento_.m2);
                    jQuery("#numhabitaapa").html(apartamento_.num_habita);
                    jQuery("#total").html(sum + "€")
                    precioTotal = sum;
                    jQuery("#preciobaja").html(temporadabajacount + "dias * " + precioBaja + "€")
                    jQuery("#precioalta").html(temporadaaltacount + "dias * " + precioALta + "€")
                    tituloApartamento=apartamento_.Titulo
                    jQuery("#buttons_carr").html("")
                    jQuery("#slider_modal_img").html("")
                    var container = L.DomUtil.get('map');
if(container != null){
container._leaflet_id = null;
}
                                        let mapDiv = document.getElementById("map");
let map = L.map(mapDiv).setView([apartamento_.Laltidud, apartamento_.Longitud], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
var marker = L.marker([apartamento_.Laltidud, apartamento_.Longitud]).addTo(map);

const resizeObserver = new ResizeObserver(() => {
  map.invalidateSize();
});
resizeObserver.observe(mapDiv);
                    if (galeriaimagenes!= "") {
                        galeriaimagenes[0].forEach((item, i) => {
                            jQuery("#buttons_carr").append(
                                `
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}"
                             class="${(i==0) ? 'active' : ''} botonoescarr_main" aria-current="true" aria-label="Slide 1" style="
                             width: 0 !important;
                            height: 0 !important; 
                            padding: 10px !important;
                            border: 0 !important; 
    border-top: 0 !important;
    border-bottom: 0 !important;

    background: #5aab99 !important;
    border-radius: 37px;
                             "></button>

                            `
                            )

                            jQuery("#slider_modal_img").append(
                                `
                            <div class="carousel-item ${(i==0) ? 'active' : ''} ">
                                        <img src="${item}" class="d-block w-100 rounded-4" alt="...">
                            </div>
                            `
                            )
                            
                            servicios[0].forEach(item => {
                                jQuery("#servicios").append(
                                    `
                                    <div class="col-12 col-lg-6 justify-content-center text-center" id="servicios">
                                                <h6>${item.servicio}</h6>
                                            </div>
                                    `
                                )
                            });
                            

                        })
                    } else {
                        console.log("entra")
                        jQuery("#slider_modal_img").append(
                            `
                            <div class="carousel-item active ">
                                        <img src=../imgs/logo/logo.png class="d-block w-100 rounded-4" alt="imglogo">
                            </div>
                            `
                        )
                    }

                
                    //aqui
                })
            });
        }
        $("#reserva").click(function() {
            $.ajax({
                type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..
                url: "index.php", //url guarda la ruta hacia donde se hace la peticion
                data: {
                    r: "doreserva",
                    idapartamento: id_,
                    diaini: fechaini,
                    diafin: fechafin,
                    precio: precioTotal
                },
                success: function(datos) {
                    
                    if (datos == 1) {
                        $('#spiner').show();
                        setTimeout(() => {
                            $('#spiner').hide();
                            $('#modalBody').hide();
                            $('#alertReserva').show();
                        }, 3000);
                    } else {
                        window.location.href="index.php?r=login" 
                    }
                },
                error: function(datos) {
                    alert("No se ha podido reservar2");
                },
            });

            function reciboPDF() {
                var doc = new jsPDF();
                doc.text(20, 20, 'Hello world!');
                doc.save('reserva.pdf');
            }
        });
     
    </script>
    

    <?php include "footer.php"; ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="srcs/apartamentos.js"></script>
    <script src="srcs/index.js"></script>
</body>

</html>
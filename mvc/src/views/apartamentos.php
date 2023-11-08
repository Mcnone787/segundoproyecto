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
    <style>
        .house {
            display: block;
            margin: auto;
            width: 16em;
            height: auto;
        }

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
            <div class="form-inline row" style="
    margin-top: 50px;
    background: #8ec7eb59;
    padding: 20px;
    border-radius:27px;
 ">
                <div class="col-12 col-lg-5">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:100%;border-radius:20px;" name="titulo" id="titulo">
                </div>
                <div class="col-12 col-lg-4">
                    <div class="btn-group dropend " style="left:50%;">

                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Mas opciones
                        </button>
                        <ul class="dropdown-menu">
                            <div class=" " style="display:flex;">
                                <input type="text" id="from" name="from" placeholder="From">
                                <input type="text" id="to" name="to" placeholder="to">
                            </div>
                            <input type="number" name="numhabita" min="1" id="numhabita" placeholder="Num. de habitaciones">
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
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
                    <div class="col apartamento_" id="<?php echo   $apartamentoID; ?>">
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
                                        <div class="col p-3 m-3 rounded-4 bg-white imgReservaBox">
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
                                                    <button class="btn btn-primary btn-lg" type="submit" id="reserva">Reservar</button>
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
                                    <div class="col p-3">
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
                                    <div class="col p-3">
                                        <h4>Servicios</h4>
                                        <div class="d-flex justify-content-center">
                                            <div class="col-2 justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z" />
                                                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                                                </svg>
                                            </div>
                                            <div class="col-2 justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 512 512">
                                                    <path d="M132.7 4.7l-64 64c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9H208c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-64-64c-6.2-6.2-16.4-6.2-22.6 0zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H64zm96 96a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM80 400c0-26.5 21.5-48 48-48h64c26.5 0 48 21.5 48 48v16c0 17.7-14.3 32-32 32H112c-17.7 0-32-14.3-32-32V400zm192 0c0-26.5 21.5-48 48-48h64c26.5 0 48 21.5 48 48v16c0 17.7-14.3 32-32 32H304c-17.7 0-32-14.3-32-32V400zm32-128a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM356.7 91.3c6.2 6.2 16.4 6.2 22.6 0l64-64c4.6-4.6 5.9-11.5 3.5-17.4S438.5 0 432 0H304c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l64 64z" />
                                                </svg>
                                            </div>
                                            <div class="col-2 justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 640 512">
                                                    <path d="M624 416h-16c-26.04 0-45.8-8.42-56.09-17.9-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C461.8 407.58 442.04 416 416 416s-45.8-8.42-56.09-17.9c-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C269.8 407.58 250.04 416 224 416s-45.8-8.42-56.09-17.9c-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C77.8 407.58 58.04 416 32 416H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h16c38.62 0 72.72-12.19 96-31.84 23.28 19.66 57.38 31.84 96 31.84s72.72-12.19 96-31.84c23.28 19.66 57.38 31.84 96 31.84s72.72-12.19 96-31.84c23.28 19.66 57.38 31.84 96 31.84h16c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zm-400-32v-96h192v96c19.12 0 30.86-6.16 34.39-9.42 9.17-8.46 19.2-14.34 29.61-18.07V128c0-17.64 14.36-32 32-32s32 14.36 32 32v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16c0-52.94-43.06-96-96-96s-96 43.06-96 96v96H224v-96c0-17.64 14.36-32 32-32s32 14.36 32 32v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16c0-52.94-43.06-96-96-96s-96 43.06-96 96v228.5c10.41 3.73 20.44 9.62 29.61 18.07 3.53 3.27 15.27 9.43 34.39 9.43z" />
                                                </svg>
                                            </div>
                                            <div class="col-2 justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            dateFormat: "yy-mm-dd"
        });
        $("#to").datepicker({
            dateFormat: "yy-mm-dd"
        });

        $(function() {
            var dateFormat = "mm/dd/yy",
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
        let fecha = new Date()
        let ano = fecha.getFullYear()
        let temporada_baja_defaultini = new Date(ano + "-01-01");
        let temporada_baja_defaultfin = new Date(ano + "-06-30");
        let temporada_alta_defaultini = new Date(ano + "-07-01");
        let temporada_alta_defaultfin = new Date(ano + "-12-31");
        let fechaini
        let fechafin
        let precioTotal
        prueba()
        jQuery("#buscarbtn").click(() => {
            let fechaini_ = jQuery("#from").val();
            let fechafin_ = jQuery("#to").val();
            fechaini = fechaini_
            fechafin = fechafin_
            let titulo = jQuery("#titulo").val();
            let numhabita = jQuery("#numhabita").val();
            formfeiniglobal = new Date(fechaini)
            formfefinglobal = new Date(fechafin)
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
                    let apartamentos = JSON.parse(datos);
                    console.log(apartamentos)
                    datos2 = apartamentos

                        jQuery("#cosas").html("");
                        apartamentos[0].forEach((element) => {
                            let nombre = element.ApartamentosID
                            let src = ""
                            if (apartamentos[1].src.hasOwnProperty(nombre)) {
                                src = apartamentos[1].src[nombre].src_imagen[0]

                        } else {
                            src = "imgs/logo/logo.png"
                        }
                        jQuery("#cosas").append(`
                        <div class="col apartamento_" id="${element.ApartamentosID}">
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
                            console.log(apartamento)

                            if (apartamento[1] != null) {
                                galeriaimagenes.push(apartamento[1].src_imagen)
                            }
                            console.log(galeriaimagenes)
                        }, // data recive un objeto con la informacion que se enviara al servidor
                        //success es una funcion que se utiliza si el servi¡dor retorna informacion
                        //  datos.forEach(element => {
                        //     console.log(element.Titulo)
                        //  });
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
                                // console.log(apartamento_)


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
                    console.log(formfeini + "fecha anterior")
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

                    console.log(galeriaimagenes)
                    jQuery("#buttons_carr").html("")
                    jQuery("#slider_modal_img").html("")
                    if (galeriaimagenes.length >= 1) {
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


                        })
                    } else {
                        console.log("entra")
                        jQuery("#slider_modal_img").append(
                            `
                            <div class="carousel-item active ">
                                        <img src=../imgs/logo/logo.png class="d-block w-100 rounded-4" alt="...">
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
                        alert("No se ha podido reservar")
                    }
                },
                error: function(datos) {
                    alert("No se ha podido reservar");
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="srcs/apartamentos.js"></script>
    <script src="srcs/index.js"></script>
</body>

</html>
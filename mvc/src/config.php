<?php

$config=[
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "apartamentos",
        "host" => "localhost"
    ],
];
include "../src/models/actionsbd.php";
include "../src/models/userM.php";
include "../src/models/apartamentos.php";
include "../src/models/servicios.php";
include "../src/models/servicios-apartamentos.php";
include "../src/models/temporada.php";
include "../src/models/temporada_apartamenos.php";
include "../src/models/reservas.php";



<?php

/**************************
 *
 * M07 - Projecte 2
 * Professor: Dani Prados
 *
 * Exemple de com utilitzar l'objecte PDO.
***************************/

error_reporting(E_ERROR | E_WARNING | E_PARSE);

//include "config.php";

$examples = array();

$dsn = 'mysql:dbname=tasks;host=localhost';
$user = 'demo-daw';
$password = '1234';
try {
    $sql = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}

// print_r($sql);

// die();

// Exemple de consulta
$tasks = array();
$query = "select id, task from tasks where deleted=0;";
foreach ($sql->query($query, PDO::FETCH_ASSOC) as $task) {
    $tasks[] = $task["id"] . ", " . $task["task"];
}

$examples[] = array(
    "titol" => "Consulta bàsica ",
    "codi" => $query,
    "text" => implode("<br>\n", $tasks)
);

// Exemple d'insert
$task = "Tasca d'exemple";
$stm = $sql->prepare('insert into tasks (task,deleted) values (:task, 0);');
$result = $stm->execute([':task' => $task]);


// Exemple de consulta
$query = "select id, task from tasks where deleted=0;";
$tasks2 = array();
foreach ($sql->query($query, PDO::FETCH_ASSOC) as $task) {
    $tasks2[] = $task["id"] . ", " . $task["tasca"];
}

$examples[] = array(
    "titol" => "Consulta bàsica  després de fer un insert",
    "codi" => $query,
    "text" => implode("<br>\n", $tasks2),
);

// Exemple de consulta
$task = "Tasca d'exemple";
$deleted = 0;
$query = "select id, task from tasks where task = :task and deleted=:deleted;";
$stm = $sql->prepare($query);
$stm->execute([
    ':task' => $task,
    ':deleted' => $deleted,
]);

$tasks3 = array();
while ($task = $stm->fetch(PDO::FETCH_ASSOC)) {
    $tasks3[] = $task["id"] . ", " . $task["tasca"];
}

$examples[] = array(
    "titol" => "Exemple de consulta parametritzada",
    "codi" => $query,
    "text" => implode("<br>\n", $tasks3),
);

// Exemple de consulta
$task = "Tasca d'exemple";
$query = "delete from tasks where task = :task and deleted=0;";
$stm = $sql->prepare($query);
$stm->execute([':task' => $task]);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Exemple de dates</title>
  </head>
  <body>

    <div class="container">
      <div class="row"><div class="col"><h1>Exemple de dates</h1></div></div>
      <div class="row">
        <div class="col-9 fons-botons bg-warning p-3">
            <?php
            foreach ($examples as $actual) {
                ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$actual["titol"];?></h5>
                   
                    <p class="card-text"><code><?=nl2br($actual["codi"]);?></code></p>
                    <h6 class="card-subtitle mb-2 text-muted">Sortida</h6>
                    <p class="card-text"><?=$actual["text"];?></p>
                </div>
            </div>
            <?php } ?>
        
        </div>
        <div class="col fons-calendari bg-secondary p-3 text-light">Exemple de dates.</div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
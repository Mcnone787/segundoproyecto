<?php

/**************************
 *
 * M07 - UF1
 * Professor: Dani Prados
 *
 * Exemple de fitxer init per inicialitzar la base dades des de
 * la línia de comandes.
***************************/

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$dsn = 'mysql:dbname=apartamentos;host=localhost';
$usuari = 'root';
$clau = '';
try {
    $sql = new PDO($dsn, $usuari, $clau);
} catch (PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}

// Buidem la taula
$tasques = array();
echo "Buidant la taula - ";
$query = "truncate table tasques;";
$sql->exec($query);
echo "[ok]\n";

// // Inserim valors
// $tasques = array(
//     array("tasca" => "Tasca 1", "borrat" => 0),
//     array("tasca" => "Tasca 2", "borrat" => 0),
//     array("tasca" => "Tasca 3", "borrat" => 1),
// );


// foreach ($tasques as $actual) {
//     echo "Inserint la tasca: \"{$actual['tasca']}\" ";
//     $stm = $sql->prepare('insert into tasques (tasca,borrat) values (:tasca, :borrat);');
//     $result = $stm->execute([':tasca' => $actual["tasca"], ':borrat' => $actual["borrat"]]);
//     echo "[ok]\n";
// }



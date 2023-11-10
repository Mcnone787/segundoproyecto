<?php

namespace Daw;

class Apartamentos
{

    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    // public function getAll(){
    //     $tasks = array();
    //     $query = "select id, user, pass from users;";
    //     foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
    //         $tasks[] = $task;
    //     }

    //     return $tasks;
    // }dd


    public function getAll($userId)
    {

        $stm = $this->sql->prepare("select * from apartamentos where GestorId = :user_id;");
        $stm->execute([':user_id' => $userId]);

        $tasks = array();

        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }

        return $tasks;
    }
    // select apartamentos.*from apartamentos where apartamentos.ApartamentosID not in (select reservas.ApartamentosID from reservas where '2023-10-26'>=reservas.DiaEntrada  AND  '2023-10-27'<=reservas.DiaSalida);

    public function getapartamentosdisoponibles($diaini, $diafin, $numhabita, $Titulo)
    {

        $condiciondias = "apartamentos.ApartamentosID not in (select reservas.ApartamentosID from reservas where :diaini>=reservas.DiaEntrada  AND  :diafin<=reservas.DiaSalida or (
        (:diaini>=reservas.DiaEntrada or :diaini=reservas.DiaSalida or :diafin<=reservas.DiaSalida or :diafin>=reservas.DiaSalida) and :diafin>=reservas.DiaEntrada and :diaini<reservas.DiaSalida ))
        and
        apartamentos.ApartamentosID not in (select estado.ApartamentosID from estado where :diaini>=estado.fechaini  AND  :diafin<=estado.fechafin or (
            (:diaini>=estado.fechaini or :diaini=estado.fechafin or :diafin<=estado.fechafin or :diafin>=estado.fechafin) and :diafin>=estado.fechaini and :diaini<estado.fechafin ))
        ";
        $condicionnumhabita = "apartamentos.num_habita=:numhabita";
        $condiciontitulo = "apartamentos.Titulo like :Titulo";
        if ($Titulo == "") {
            $condiciontitulo = "";
        }
        if ($diaini == "" || $diafin == "") {
            $condiciondias = "";
        }
        if ($numhabita == "") {
            $numhabita = 1;
            $condicionnumhabita = "apartamentos.num_habita>=:numhabita";
        }
       
        if ($diaini != "" && $diafin!="") {
            $condicionnumhabita = " and " . $condicionnumhabita;
        }
        if ($Titulo != "") {
            $condicionnumhabita = $condicionnumhabita . " and ";
        }

        $stm = $this->sql->prepare("select apartamentos.* from apartamentos where " . $condiciondias . " " . $condicionnumhabita . "  " . $condiciontitulo . ";");

        if ($condiciondias == "" && $condiciontitulo == "") {
            $stm->execute([':numhabita' => $numhabita]);
        } else if ($condiciondias != "" && $condiciontitulo != "") {
            $stm->execute([':diaini' => $diaini, ':diafin' => $diafin, ':numhabita' => $numhabita, ":Titulo" => "%" . $Titulo . "%"]);
        } else if ($condiciondias != "") {

            $stm->execute([':diaini' => $diaini, ':diafin' => $diafin, ':numhabita' => $numhabita]);
        } else if ($condiciontitulo != "") {

            $stm->execute([':numhabita' => $numhabita, ":Titulo" => "%" . $Titulo . "%"]);
        }

        $tasks = array();

        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }

        return $tasks;
    }
    public function EliminarApartamento($id)
    {

        $stm = $this->sql->prepare("delete from apartamentos where ApartamentosId = :id;");

        $stm->execute([':id' => $id]);
    }
    public function getApartamentos()
    {
        $apartamentos = array();
        $query = "SELECT * FROM apartamentos";
        $stm = $this->sql->prepare($query);
        $stm->execute();

        while ($apartamento = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apartamentos[] = $apartamento;
        }
        return $apartamentos;
    }

    public function getapartamento($id)
    {
        $stm = $this->sql->prepare('select * from apartamentos where ApartamentosID=:id;');
        $stm->execute([':id' => $id]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if (is_array($result)) {
            return $result;
        } else {
            return false;
        }
    }
    public function setupdateapartamento(
        $id,
        $Titulo,
        $CP,
        $Laltitud,
        $Longitud,
        $descripcion,
        $m2,
        $precioalt,
        $preciobaj,
        $numhabita
    ) {



        $stm = $this->sql->prepare('UPDATE apartamentos SET  Titulo = :Titulo, CP = :CP, Laltidud = :Laltidud, 
        Longitud=:Longitud, Descripcion=:Descripcion,m2=:m2,num_habita=:num_habita,precioALT=:precioALT,PrecioBAJ=:PrecioBAJ
        WHERE ApartamentosID = :id');

        $stm->execute([
            ':Titulo' => $Titulo, ':CP' => $CP, ':Laltidud' => $Laltitud, ':Longitud' => $Longitud, ':Descripcion' => $descripcion, ':m2' => $m2,
            ':num_habita' => $numhabita, ':precioALT' => $precioalt, ':PrecioBAJ' => $preciobaj, ':id' => $id
        ]);
    }

    public function setaddapartamento(
        $id,
        $Titulo,
        $CP,
        $Laltitud,
        $Longitud,
        $descripcion,
        $m2,
        $precioalt,
        $preciobaj,
        $numhabita
    ) {

        $stm = $this->sql->prepare('INSERT INTO apartamentos (Titulo,CP,Laltidud,Longitud,Descripcion,m2,num_habita,precioALT,PrecioBAJ,GestorId) values (:Titulo,:CP,:Laltidud,:Longitud,:Descripcion,:m2,:num_habita,:precioALT,:PrecioBAJ,:GestorId);');
        $stm->execute([':Titulo' => $Titulo, ':CP' => $CP, ':Laltidud' => $Laltitud, ':Longitud' =>  $Longitud, ':Descripcion' => $descripcion, ':m2' =>  $m2, ':num_habita' => $numhabita, ':precioALT' => $precioalt, ':PrecioBAJ' => $preciobaj, ':GestorId' => $id]);
    }
    public function ultimoapartamento()
    {

        $stm = $this->sql->prepare('select * from apartamentos order by ApartamentosID desc limit 1;');
        $stm->execute();
        $apartamento = $stm->fetch(\PDO::FETCH_ASSOC);

        return $apartamento;
    }
    
}


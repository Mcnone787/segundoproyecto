<?php

namespace Daw;

class servicios
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


    public function getApartamentos()
    {
        $apartamentos = array();
        $query = "SELECT * FROM servicios";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    
        while ($apartamento = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apartamentos[] = $apartamento;
        }
        return $apartamentos;
    }
   
    public function deleteservicio($idservico)
    {
        $stm = $this->sql->prepare("DELETE FROM servicios WHERE  idservicios = :idservico;");
        $stm->execute([':idservico' => $idservico]);
    }
    public function createservice($servicio)
    {
        $stm = $this->sql->prepare('INSERT INTO servicios (servicio) values (:servicio);');
        $stm->execute([':servicio' => $servicio]);
    }
}
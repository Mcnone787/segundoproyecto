<?php

namespace Daw;

class Estados
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;

    }

    public function getAllEstados()
    {
        $tasks = array();
        $query = "select * from estado;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
            $tasks[] = $task;
        }

        return $tasks;
    }

    public function getEstado($id)
    {
        $stm = $this->sql->prepare("select * from estado where ApartamentoID=:id;");
        $stm->execute([':id' => $id]);
        $task = $stm->fetch(\PDO::FETCH_ASSOC);
        return $task;
    }

    public function addEstado()
    {
        
    }

    public function editEstado($estado, $id)
    {
        
    }

    public function deleteEstado($id)
    {
       
    }

}

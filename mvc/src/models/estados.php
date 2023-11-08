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

    public function addEstado($ini,$fin,$idaparta,$iduser){
        $stm = $this->sql->prepare("INSERT INTO estado (fechaini,fechafin,ApartamentosID,IDUsuario)VALUES (:ini, :fin,:idaparta,:iduser);");
        $stm->execute([':ini' => $ini, ':fin' => $fin,":idaparta"=>$idaparta,":iduser"=>$iduser]);
    }
    public function getestadogestor($iduser){
      
        $estados = array();
        $query = "SELECT * FROM estado where IDUsuario=:iduser";
        $stm = $this->sql->prepare($query);
        $stm->execute([':iduser'=>$iduser]);
    
        while ($estado = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $estados[] = $estado;
        }
        return $estados;
    }

    public function editEstado($estado, $id)
    {
        
    }

    public function deleteEstado($id)
    {
       
    }

}

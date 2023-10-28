<?php

namespace Daw;

class temporada_servicios
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


  
    public function getAllApartamentos($id){
        
        $stm = $this->sql->prepare("select t.* from apartamentos_temporada at ,apartamentos a,temporada t where at.ApartamentosID=a.ApartamentosID and at.temporadaid=t.idtemporada and a.ApartamentosID=:id; ");   
        $stm->execute([':id' => $id]);

        $tasks = array();
        
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }

        return $tasks;
    }
    public function add_servicios($id_apar,$idservi)
    {
        $stm = $this->sql->prepare('INSERT INTO apartamentos_servicios (ApartamentosID,servicioid)values (:ApartamentoID,:servicioid);');
        $stm->execute([':ApartamentoID' => $id_apar, ':servicioid' => $idservi]);
    }
    public function rm_servicios_apartamento($id_apar,$idservi)
    {
    
        $stm = $this->sql->prepare('delete from apartamentos_servicios where ApartamentosID=:ApartamentosID and servicioid=:servicioid');
        $stm->execute([':ApartamentosID' => $id_apar, ':servicioid' => $idservi]);

    }
 
}
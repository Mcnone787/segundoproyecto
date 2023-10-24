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


    public function getAll($userId){
        
        $stm = $this->sql->prepare("select * from apartamentos where GestorId = :user_id;");
        $stm->execute([':user_id' => $userId]);
   
        $tasks = array();
        
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        
        return $tasks;
    }

    public function EliminarApartamento($id){
        
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

    public function getapartamento($id){
      

        $stm = $this->sql->prepare('select * from apartamentos where ApartamentosID=:id;');
        $stm->execute([':id' => $id]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result)){
            return $result;
        } else {
            return false;
        }
    }
}
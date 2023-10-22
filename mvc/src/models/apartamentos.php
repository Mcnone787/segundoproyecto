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

  
}
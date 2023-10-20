<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($user, $pass, $db, $host){

        $dsn = "mysql:dbname={$db};host={$host}";
        try {
            $this->sql = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function getAll(){
        $tasks = array();
        $query = "select id, user, pass from users;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
            $tasks[] = $task;
        }

        return $tasks;
    }

  


    public function login($user, $pass){
        $stm = $this->sql->prepare('select IDUsuario, Nombre from usuarios where Nombre=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        print_r($result);
        if(is_array($result) && $result["pass"] == $pass){
            
            return $result;
        } else {
            return false;
        }
    }



}
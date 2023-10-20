<?php

namespace Daw;

class Users
{

    public $sql;

    public function __construct($user, $pass, $db, $host)
    {

        $dsn = "mysql:dbname={$db};host={$host}";
        try {
            $this->sql = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    // public function getAll(){
    //     $tasks = array();
    //     $query = "select id, user, pass from users;";
    //     foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
    //         $tasks[] = $task;
    //     }

    //     return $tasks;
    // }dd



    public function login($user, $pass){
        $stm = $this->sql->prepare('select IDUsuario, usuario, contrasena from users where email=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["pass"] == $pass){
            return $result;
        } else {
            return false;
        }
    }

    public function register($nombre, $apellido, $debitcard, $email, $contraseña){
        $stm = $this->sql->prepare('insert into usuarios (IDUsuario,Nombre,Apellidos,Tarjeta_Credito,Telefono,contraseña,Rol,email) values (:IDUsuario,:Nombre, :Apellidos, :Tarjeta_Credito, :email, :Telefono,:contraseña,:Rol);');
        
        $stm->execute([':IDUsuario'=>9999,':Nombre' => "dwad", ':Apellidos' => "dawd", ':Tarjeta_Credito' => 123123, ':Telefono' => 123123123, ':contraseña' => 1,":Rol" => "dad","email"=>"user"]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result)){
            return $result;
        } else {
            return false;
        }
    }


}
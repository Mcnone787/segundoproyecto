<?php

namespace Daw;

class Users
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



    public function login($user, $pass){
        $stm = $this->sql->prepare('select IDUsuario, Nombre, contrasena,Rol from usuarios where email=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["contrasena"] == $pass){
            return $result;
        } else {
            return false;
        }
    }

    public function register($nombre, $apellido, $debitcard, $email, $contraseña)
    {
        $stm = $this->sql->prepare('INSERT INTO usuarios (Nombre, Apellidos, Tarjeta_Credito, contrasena, Rol, email) values (:Nombre, :Apellidos, :Tarjeta_Credito, :contrasena, :Rol, :email);');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellido, ':Tarjeta_Credito' => $debitcard, ':contrasena' => $contraseña, ':Rol' => 'user', ':email' => $email]);
    }


}
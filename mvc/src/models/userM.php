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
    // }



    public function login($user, $pass)
    {
        $stm = $this->sql->prepare('select id, user, pass from users where user=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if (is_array($result) && $result["pass"] == $pass) {
            return $result;
        } else {
            return false;
        }
    }

    public function register($nombre, $apellido, $debitcard, $email, $contraseña)
    {
        $stm = $this->sql->prepare('INSERT INTO usuarios (Nombre, Apellidos, Tarjeta_Credito, Telefono, contrasena, Rol, email) values (:Nombre, :Apellidos, :Tarjeta_Credito, :Telefono, :contrasena, :Rol, :email);');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellido, ':Tarjeta_Credito' => $debitcard,  ':Telefono' => 000000000, ':contrasena' => $contraseña, ':Rol' => 'user', ':email' => $email]);
    }

}

<?php

namespace Daw;

class Users
{

    public $sql;

    public function __construct($sql)
    {

        $this->sql = $sql;

    }
    public function login($user, $pass){
        $stm = $this->sql->prepare('select IDUsuario, Nombre, contrasena, Rol from usuarios where email=:user;');
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

    public function getPersonalData($userID)
    {
        $stm = $this->sql->prepare('select * from usuarios where IDUsuario=:id;');
        $stm ->execute([':id' => $userID]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            return false;
        }
    }
    public function updateProfile($nombre, $apellido, $debitcard, $email, $contraseña,$telefono,$userID)
    {
        $stm = $this->sql->prepare('UPDATE usuarios SET Nombre = :Nombre, Apellidos = :Apellidos, Tarjeta_Credito=:Tarjeta_Credito, telefono=:telefono,contrasena=:contrasena, email=:email WHERE IDUsuario = :id');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellido, ':Tarjeta_Credito' => $debitcard, ':contrasena' => $contraseña, ':email' => $email, ':telefono' => $telefono ,':id' => $userID]);
    }

    public function getUsers()
    {
        $stm = $this->sql->prepare('select * from usuarios;');
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            return false;
        }
    }

    public function editUser($nombre,$apellido,$debitcard,$contrasena,$email,$telefono,$userID)
    {
        $stm = $this->sql->prepare('UPDATE usuarios SET Nombre = :Nombre, Apellidos = :Apellidos, Tarjeta_Credito=:Tarjeta_Credito, telefono=:telefono,contrasena=:contrasena, email=:email WHERE IDUsuario = :id');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellido, ':Tarjeta_Credito' => $debitcard, ':contrasena' => $contrasena, ':email' => $email, ':telefono' => $telefono]);
    }

    public function deleteUser($userID)
    {
        $stm = $this->sql->prepare('DELETE FROM usuarios WHERE IDUsuario = :id');
        $stm->execute([':id' => $userID]);

    }

    public function addUser($nombre,$apellido,$debitcard,$contrasena,$email,$telefono)
    {
        $stm = $this->sql->prepare('INSERT INTO usuarios (Nombre, Apellidos, Tarjeta_Credito, contrasena, Rol, email, telefono) values (:Nombre, :Apellidos, :Tarjeta_Credito, :contrasena, :Rol, :email, :telefono);');
        $stm -> xexecute([':nombre' => $nombre, ':Apellidos' => $apellido, ':Tarjeta_Credito' => $debitcard, ':contrasena' => $contrasena, ':email' => $email, ':telefono' => $telefono]);
    }
}
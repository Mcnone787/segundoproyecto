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

    public function register($nombre, $apellido, $debitcard, $email, $contraseña, $telefono)
    {
        $stm = $this->sql->prepare('INSERT INTO usuarios (Nombre, Apellidos, Tarjeta_Credito, contrasena, Rol, email, Telefono) values (:Nombre, :Apellidos, :Tarjeta_Credito, :contrasena, :Rol, :email, :Telefono);');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellido, ':Tarjeta_Credito' => $debitcard, ':contrasena' => $contraseña, ':Rol' => 'user', ':email' => $email, ':Telefono' => $telefono]);
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
        $stm = $this->sql->prepare('select * from usuarios');
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            return false;
        }
    }
    public function validationEmail($email)
    {
        $stm = $this->sql->prepare('SELECT email FROM usuarios WHERE email = :email;');
        $stm->execute([':email' => $email]);
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        if(is_Array($result) && count($result)>0){
            return true;
        } else {
            return false;
        }
    }
    public function validationPass($pass)
    {
        $stm = $this->sql->prepare('SELECT contrasena FROM usuarios WHERE contrasena = :pass;');
        $stm->execute([':pass' => $pass]);
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        if(is_Array($result)){
            return true;
        } else {
            return false;
        }
    }

    public function editUser($nombre, $apellidos, $contrasena, $email, $rol, $id)
    {
        $stm = $this->sql->prepare('UPDATE usuarios SET Nombre = :Nombre, Apellidos = :Apellidos, Contrasena = :Contrasena, email = :email, Rol = :rol WHERE IDUsuario = :id');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellidos, ':Contrasena' => $contrasena, ':email' => $email, ':id' => $id ,':rol' => $rol]);
    }

    public function deleteUser($userID)
    {
        $stm = $this->sql->prepare('DELETE FROM usuarios WHERE IDUsuario = :id');
        $stm->execute([':id' => $userID]);

    }

    public function setUser($nombre, $apellido, $contrasena, $email, $rol)
    {
        $stm = $this->sql->prepare('INSERT INTO usuarios (Nombre, Apellidos, contrasena, Rol, email) values (:Nombre, :Apellidos, :contrasena, :Rol, :email);');
        $stm->execute([':Nombre' => $nombre, ':Apellidos' => $apellido, ':contrasena' => $contrasena, ':Rol' => $rol, ':email' => $email]);
    }
}
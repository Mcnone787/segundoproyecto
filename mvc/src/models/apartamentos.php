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
    public function setupdateapartamento($id,$Titulo,
    $CP,
    $Laltitud ,
    $Longitud,
    $descripcion ,
    $m2,
    $precioalt,
    $preciobaj){
      

       
        $stm = $this->sql->prepare('UPDATE apartamentos SET  Titulo = :Titulo, CP = :CP, Laltidud = :Laltidud, 
        Longitud=:Longitud, Descripcion=:Descripcion,m2=:m2,precioALT=:precioALT,PrecioBAJ=:PrecioBAJ
        WHERE ApartamentosID = :id');
        $stm->execute([':Titulo' => $Titulo,':CP' => $CP, ':Laltidud' => $Laltitud, ':Longitud' => $Longitud, ':Descripcion' => $descripcion, ':m2' => $m2
        ,':precioALT' => $precioalt,':PrecioBAJ' => $preciobaj,':id'=>$id]);

    }
    public function setaddapartamento($id,$Titulo,
    $CP,
    $Laltitud ,
    $Longitud,
    $descripcion ,
    $m2,
    $precioalt,
    $preciobaj){
      

       
        $stm = $this->sql->prepare('INSERT INTO apartamentos (Titulo,CP,Laltidud,Longitud,Descripcion,m2,num_habita,precioALT,PrecioBAJ,GestorId) values (:Titulo,:CP,:Laltidud,:Longitud,:Descripcion,:m2,:num_habita,:precioALT,:PrecioBAJ,:GestorId);');
        $stm->execute([':Titulo' => $Titulo,':CP' => $CP, ':Laltidud' => $Laltitud, ':Longitud' =>  $Longitud, ':Descripcion' => $descripcion, ':m2' =>  $m2,':num_habita'=>3,':precioALT' => $precioalt,':PrecioBAJ' => $preciobaj,':GestorId'=>$id]);
    }
}
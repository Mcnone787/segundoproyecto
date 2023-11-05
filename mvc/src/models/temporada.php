<?php

namespace Daw;

class temporada
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


    public function addtemporada($id_gestor,$fechaini, $fechasalida, $temporadaNombre)
    {   

        $stm = $this->sql->prepare('INSERT INTO temporada (fechaini,fechasalida,temporadaNombre,GestorId) values (:fechasalida, :fechasalida, :temporadaNombre,:GestorId);');
        $stm->execute([':fechaini' => $fechaini, ':fechasalida' => $fechasalida, ':temporadaNombre' => $temporadaNombre,':GestorId'=>$id_gestor]);
    }
    public function deletetemporada($id){
      
        $stm = $this->sql->prepare("delete from temporada where idtemporada = :id;");
        
        $stm->execute([':id' => $id]);
       
    }


    public function getTemporadas($id_gestor)
    {
        $temporadas = array();
        $query = "SELECT * FROM temporada where GestorId=:id";
        $stm = $this->sql->prepare($query);
        $stm->execute(['id'=>$id_gestor]);
    
        while ($temporada = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $temporadas[] = $temporada;
        }
        return $temporadas;
    }

    
  
 
}
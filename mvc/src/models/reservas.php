<?php

namespace Daw;

class Reservas
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function getAllReservas()
    {
        $stm = $this->sql->prepare("SELECT * FROM reservas;");
        $stm->execute();

        $reservas = array();

        while ($reserva = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $reservas[] = $reserva;
        }
        return $reservas;
    }

    public function getReservas($userId)
    {
        $stm = $this->sql->prepare("SELECT * FROM reservas WHERE ClienteId = :user_id;)");
        $stm->execute([':user_id' => $userId]);

        $reservas = array();

        while ($reserva = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $reservas[] = $reserva;
        }
        return $reservas;
    }
    public function getReservasById($reservaID)
    {
        $stm = $this->sql->prepare("SELECT * FROM reservas WHERE ReservaID = :reservas_id;)");
        $stm->execute([':reservas_id' => $reservaID]);
        
        $reservas = array();

        while ($reserva = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $reservas[] = $reserva;
        }
        return $reservas;
    }
    public function getReservaDetalle($reservaID)
    {
        $stm = $this->sql->prepare("SELECT usuarios.* FROM reservas, usuarios where reservas.ClienteId = usuarios.IDUsuario and ReservaID = :reservas_id;");
        $stm->execute([':reservas_id' => $reservaID]);
        $reservas = array();

        while ($reserva = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $reservas[] = $reserva;
        }
        return $reservas;
    }
    public function reservas_apartamento_usuario($idreserva)
    {
      
        $stm = $this->sql->prepare('select * from reservas,apartamentos where apartamentos.ApartamentosID=reservas.ApartamentosID and  reservas.reservaID=:idreserva;');
        $stm->execute([':idreserva' => $idreserva]);
         $reservas = array();

        while ($reserva = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $reservas[] = $reserva;
        }
        return $reservas;
    }
   
    public function setReserva ($userId, $apartamentoId, $diaEntrada, $diaSalida, $precio)
    {
        $stm = $this->sql->prepare("INSERT INTO reservas (ClienteId, ApartamentosID, DiaEntrada, DiaSalida, Precio) VALUES (:user_id, :apartamento_id, :dia_entrada, :dia_salida, :precio);");
        $stm->execute([':user_id' => $userId, ':apartamento_id' => $apartamentoId, ':dia_entrada' => $diaEntrada, ':dia_salida' => $diaSalida, ':precio' => $precio]);
    }

    public function deleteReserva($reservaId)
    {
        $stm = $this->sql->prepare("DELETE FROM reservas WHERE  ReservaID = :reserva_id;");
        $stm->execute([':reserva_id' => $reservaId]);
    }

    public function updateReserva($userId, $apartamentoId, $diaEntrada, $diaSalida)
    {
        $stm = $this->sql->prepare("UPDATE reservas SET ApartamentosID = :apartamento_id, DiaEntrada = :dia_entrada, DiaSalida = :dia_salida WHERE ClienteId = :user_id;");
        $stm->execute([':user_id' => $userId, ':apartamento_id' => $apartamentoId, ':dia_entrada' => $diaEntrada, ':dia_salida' => $diaSalida]);
    }
}
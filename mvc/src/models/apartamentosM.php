<?php

namespace Daw;
class Apartamentos
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
}

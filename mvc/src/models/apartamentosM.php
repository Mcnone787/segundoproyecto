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
        $query = $this->sql->prepare("SELECT * FROM apartamentos");
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $apartamento) {
            $apartamentos[] = $apartamento;
        }
        return $apartamentos;
    }
}

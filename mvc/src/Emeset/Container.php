<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Container: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Container
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config array paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
        $this->sql = $this->db()->getConnection();
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }
    public function db(){
        return new \Daw\Db(
            $this->config["db"]["user"],
            $this->config["db"]["pass"],
            $this->config["db"]["db"], 
            $this->config["db"]["host"]
        );
    }
    // public function tasks()
    // {
    //     return new \BDM\actionbd(
    //         $this->config["db"]["user"],
    //         $this->config["db"]["pass"],
    //         $this->config["db"]["db"], 
    //         $this->config["db"]["host"]
    //     );
    // }

    public function users()
    {
        return new \Daw\Users(
            $this->sql
        );
    }
    public function apartamentos()
    {
        return new \Daw\Apartamentos(
            $this->sql
        );
    }
    public function servicios()
    {
        return new \Daw\servicios(
            $this->sql
        );
    }
    public function servicios_apartamentos()
    {
        return new \Daw\servicios_apartamentos(
            $this->sql
        );
    }
    public function temporada()
    {
        return new \Daw\temporada(
            $this->sql
        );
    }
    public function temporada_servicios()
    {
        return new \Daw\temporada_apartamenos(
            $this->sql
        );
    }
    public function reservas()
    {
        return new \Daw\reservas(
            $this->sql
        );
    }
    
 
}
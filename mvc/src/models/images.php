<?php

/**
 * Exemple per a M07.
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Model les imatges.
 *
**/

namespace Daw;

/**
 * Imatges
*/
class Images
{

    public $images = [
        ["title" => "Via lactea", "url" => "via-lactea.jpg"],
        ["title" => "Figueres", "url" => "figueres.jpg"],
        ["title" => "Calella", "url" => "calella.jpg"],
        ["title" => "Nova York", "url" => "ny.jpg"],
        ["title" => "Fraser Island", "url" => "platja.jpg"],
        ["title" => "Lake Moraine", "url" => "llac.jpg"]
    ];

    /**
     * get et retorna la imatge amb l'id
     *
     * @param int $id
     * @return array imatge amb ["titol", "url"]
     */
    public function get($id)
    {
        return $this->images[$id];
    }

    /**
     * llistat de les images
     *
     * @return array d'images amb ["titol", "url"]
     */
    public function all()
    {
        return $this->images;
    }
}

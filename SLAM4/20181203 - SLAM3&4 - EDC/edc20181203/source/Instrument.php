<?php
namespace Music;


class Instrument{
    private $id;
    private $intitule;  // intitulé de l’instrument 

    public function __construct($unId,$unIntitule){    // constructeur
        $this->id=$unId;
        $this->intitule=$unIntitule;
    }

    public function getIntitule(){   // retourne l'intitulé de l'instrument
        return $this->intitule;
    }
}

?>

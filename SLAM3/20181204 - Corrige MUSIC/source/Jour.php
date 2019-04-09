<?php
namespace Music;
class Jour{
    private $id;
    private $libelle;  // libellé du jour, par exemple Lundi, ou Mardi etc

     public function __construct($unId, $unLibelle){    // constructeur
        $this->id=$unId;
        $this->libelle=$unLibelle;
    }

    public function getId(){
        return $this->id;
    }

     public function getLibelle(){
        return $this->libelle;
    }
}


?>

<?php
namespace Music;
class CoursIndividuel extends Cours{
    private $lInstrument; //instrument concerné par le cours individuel

    public function __construct($unId,$unAgeMini,$unInstrument){    // constructeur
        parent::__construct($unId,$unAgeMini);
        $this->lInstrument=$unInstrument;
    }
     public function getLInstrument(){
         return $this->lInstrument ;
    }

    public function getLibelle(){
        // retourne le libellé du cours individuel qui est en fait l’intitulé  de l’instrument
        // à compléter
        return $this->lInstrument->getIntitule();
    }
}


?>

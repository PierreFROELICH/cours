<?php
namespace Music;
class CoursCollectif extends Cours{
    private $libelle;  // libellé du cours collectif
    private $ageMaxi;
    private $nbPlacesMaxi;

   // constructeur
    public function __construct($unId,$unAgeMini,$unLibelle,$unAgeMaxi,$unNbPlacesMaxi){
        parent::__construct($unId,$unAgeMini);
        $this->libelle=$unLibelle;
        $this->ageMaxi=$unAgeMaxi;
        $this->nbPlacesMaxi=$unNbPlacesMaxi;
    }

   public function getLibelle(){
   // retourne le libellé du cours collectif
   // à compléter
   
   }

   public function getAgeMaxi(){
	return $this->ageMaxi;
   }

   public function getNbPlacesMaxi(){
	return $this->nbPlacesMaxi;
   }
}







?>

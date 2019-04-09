<?php
namespace Music;
class Planning{
   public $lesJours;  // collection des jours de la semaine où a lieu au moins un cours
   public $lesCours;  // collection des cours

   public function __construct(){    //constructeur
    // à compléter
    		
    }

    public function coursJour(\Music\Jour $unJour){
    // retourne une collection d’objets Cours contenant les cours du jour $unJour
    // à compléter

    }

    public function coursSemaine(){
	$lePlanningComplet=array(); 
	foreach($this->lesJours as $leJour){
		$lePlanningComplet[$leJour->getLibelle()] =$this->coursJour($leJour);
	}
	return $lePlanningComplet;
    }
}
?>

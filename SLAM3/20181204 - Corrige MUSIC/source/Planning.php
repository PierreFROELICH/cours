<?php
namespace Music;
class Planning{
   public $lesJours;  // collection des jours de la semaine où a lieu au moins un cours
   private $lesCours;  // collection des cours

   public function __construct(){    //constructeur
    // à compléter
    $this->lesJours = array();        
    $this->lesCours = array();  
    $this->lesJours[] = new \Music\Jour(1,'Lundi');      
    $this->lesJours[] = new \Music\Jour(2,'Mardi');      
    $this->lesJours[] = new \Music\Jour(3,'Mercredi');      
    $this->lesJours[] = new \Music\Jour(4,'Jeudi');      
    $this->lesJours[] = new \Music\Jour(5,'Vendredi');      

    }

    public function coursJour(\Music\Jour $unJour){
    // retourne une collection d’objets Cours contenant les cours du jour $unJour
    // à compléter
    
    $lesCoursJour = array();
    foreach($this->lesCours as $cour)
        {
            
            if($cour->aLieuLeJour($unJour))
            {
                $lesCoursJour[] = $cour;
            }
        }
        return $lesCoursJour;
            }

    public function setLesCours($desCours){
        $this->lesCours =$desCours ;
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

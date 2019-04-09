<?php
namespace Music;
abstract class Cours{
    protected $id;
    protected $ageMini;
    protected $lesJours;  // collection des jours où a lieu le cours

    public function __construct($unId,$unAgeMini){   // constructeur
        $this->id=$unId;
        $this->ageMini=$unAgeMini;
        $this->lesJours=array();
    }
    
    public function getLesJours(){
        return $this->lesJours;
    }

    public function ajouteJour(Jour $unJour) {
        
        $this->lesJours[] = $unJour ;
    }

     public function aLieuLeJour(Jour $unJour){   
    //renvoie vrai si le cours a lieu le jour passé en paramètre
    // à compléter
    $results = false;
    foreach ($this->lesJours as $jour)
    {
        if($jour == $unJour)
        {
            $results = true;
        }
        
    }
    return $results;
              
     }	

}




?>

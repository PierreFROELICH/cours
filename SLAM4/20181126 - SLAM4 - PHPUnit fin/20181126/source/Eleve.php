<?php 
namespace Encsio ;


class Eleve {
private $matieres = array() ;
private $notes = array() ; 

public function __construct($lesMatieres, $lesNotes ){
    $this->matieres = $lesMatieres ;
    $this->notes = $lesNotes  ;

}

public function getMatieres(){
    return $this->matieres ;
}

public function getNotes(){
    return $this->notes ;
}


public function moyenneEleve() {

    $nbMatieres = count($this->matieres) ;

    for ($i=0; $i<$nbMatieres ;$i++)
    {
        $total += $this->notes[i];
    }

        return $total / $i ;
    }


}





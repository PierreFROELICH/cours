<?php
class Audiences {
// Dictionnaire contenant le nombre de connexions
// par établissement et par catégorie d'usages
private $lesConnexions ; 

// Dictionnaire contenant le nom des applications
// activées par établissement et par type d'utilisateur
private $lesApplications ; 

public function __construct(){

}

public function getLesConnexions() {
return $this->lesConnexions;
}

public function getLesApplications() {
return $this->lesApplications;
}

public function getNbEtablissements(){ 
return  $this->getLesConnexions()->count();
// retourne le nombre d’établissements
// contenus dans le dictionnaire
// méthode à coder sur votre copie

}

}
?>
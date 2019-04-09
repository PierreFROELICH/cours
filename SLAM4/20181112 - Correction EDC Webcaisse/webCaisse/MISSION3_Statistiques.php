<?php

class Conso {
private $nom ;
private $prenom ;
private $mail ;
private $tel ;
private $lesVentes = array() ;

public function __construct($unNom, $unPrenom, $unmail, $untel) {
    $this->nom = $unNom ;
    $this->prenom = $unPrenom ;
    $this->mail = $unmail ;
    $this->tel = $untel ;
  }

protected function getNom(){
    return $this->nom ;
}

protected function setNom($unNom){
    $this->nom = $unNom ;
}

protected function getPrenom(){
    return $this->prenom ;
}

protected function setPrenom($unPrenom){
    $this->prenom = $unPrenom ;
}


protected function getMail(){
    return $this->mail ;
}

protected function setMail($unMail){
    $this->mail = $unmail ;
}

protected function getTel(){
    return $this->tel ;
}

protected function setTel($unTel){
    $this->tel = $unTel ;
}

public function estFidele() {
    return false;
}

public function addUneVente($uneVente) {
    $this->lesVentes[] = $uneVente;
    
}

public function getVentes() {
    return $this->lesVentes ;
}

public function getNbVentes() {
    return count($this->lesVentes);
}


public function __tostring () {
    return "Le nom est ".$this->getNom()."<BR>et le prénom est ".$this->getPrenom()."<BR>"."son mails est ".$this->getMail().
    " et son tel ".$this->getTel()." et le nombre de points de fidelite est: 0";
   
}


}

class ConsoFidele extends Conso {

private $dateNaissance ;
private $pointsFidelite=0 ;
private $dateInscription ;

public function __construct ($unNom, $unPrenom, $unmail, $untel, $dateNaiss, $dateInsc){
    parent::__construct($unNom, $unPrenom, $unmail, $untel);
    $this->dateNaissance = $dateNaiss ;
    $this->dateInscription = $dateInsc ;
}

public function estFidele() {
    return true;
}

public function addFidelite($typeFidelite, $montant)  {
	// typeFidelite contient le type de programme de fidélisation choisi (1, 2 ou 3)
	// montant contient la valeur du montant d’achat réalisé
	switch ($typeFidelite) {
        case 1 : 
            $this->pointsFidelite ++ ; 
			break;
        case 2 : 
            $this->pointsFidelite += $montant;
			break;
        case 3 : 
            if ($montant >=100 && $montant <=200) {
            $this->pointsFidelite += 10;
            }
			elseif ($montant >200 && $montant <=500){
            $this->pointsFidelite += 20;
            }
			elseif ($montant > 500) {
            $this->pointsFidelite += 50;
            }
			 break;
	}
}

public function getPointsFidelite() {
    return $this->pointsFidelite ;
}


public function __tostring () {
    return "Le nom est ".parent::getNom()."<BR>et le prénom est ".parent::getPrenom()."<BR>"."son mails est ".parent::getMail().
    " et son tel ".parent::getTel()." et le nombre de points de fidelite est: ".$this->getPointsFidelite();
   
}

}

class Vente {

private $dateVente ;
private $leConso ;
private $montant ;

public function __construct ($uneDateVente, $unConso, $unMontant){
    $this->dateVente = $uneDateVente ;
    $this->leConso = $unConso ;
    $this->montant = $unMontant ;

}

public function getMontantVente() {
    return $this->montant ;
}

public function getLeConso() {
    return $this->leConso ;
}

}

class VenteEcommerce extends Vente {

private $adresseLivraison ;
private $optionLivraison ;

public function __construct()
{} 
    
// A COMPLETER SUR VOTRE COPIE


}

class VenteMagasin extends Vente {

private $matriculeVendeur ;
public function __construct() {} 
// A COMPLETER SUR VOTRE COPIE
}

class Statistique {

// méthode statVente à commenter

public function statVente($lesVentesDuJour) {
		$nbVenteFidele=0;
		foreach($lesVentesDuJour as $uneVente) {
			$conso = $uneVente->getLeConso();
			if ($conso->estFidele())
				$nbVenteFidele ++;
		}
		return $nbVenteFidele*100/count($lesVentesDuJour);
	}

// méthode compareLieuVente  

public function compareLieuVente($lesConsosFidele) {
	$totalEcom=0; //cumul des montants des ventes ecommerce
	$totalMag=0;  // cumul des montants des ventes en magasin
//parcours de la liste des consommateurs fidèles
	foreach($lesConsosFidele as $unConsoFidele) {
        // A COMPLETER 
        foreach($unConsoFidele->getVentes() as $uneVente) {
            if ($uneVente instanceof VenteEcommerce) {
                $totalEcom ++ ;
            }
            else {
                $totalMag ++ ;

            }
            $totalMag ++ ;
        }

	}
	return $totalMag/$totalEcom ; //calcul de l’indice et retour du résultat
} 
}



?>


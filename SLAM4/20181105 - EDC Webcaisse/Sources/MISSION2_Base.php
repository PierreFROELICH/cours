<?php

abstract class PDORepository{
        const USERNAME="";
        const PASSWORD="test";
        const SERVER="SQLSRV1";
        const DB="TEST";

        private function getConnection(){
            $username = self::USERNAME;
            $password = self::PASSWORD;
            $server = self::SERVER;
            $db = self::DB;
            $connection = new PDO("sqlsrv:server=$server,1433;Database=$db", $username, $password);
            return $connection;
        }
        protected function queryList($sql, $fetch_mode,$nom_classe){
            $connection = $this->getConnection();
            $stmt = $connection->prepare($sql);
            if ($nom_classe === NULL)
            {
                $stmt->setFetchMode($fetch_mode);
            }
            else
            {
                $stmt->setFetchMode($fetch_mode,$nom_classe);
            }
            $stmt->execute();
            return $stmt;
        }
    }


class Conso {
private $nom ;
private $prenom ;
private $mail ;
private $tel ;

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

class GRC extends PDORepository{
    private $lesConsos = array() ;      
    public function listeConsoAFideliser(){
    //Création de la requête
    $requeteSql ="select distinct C.nom, C.prenom, C.tel, C.mail"
			. " from WEBCAISSE.Conso C "
			. "INNER join WEBCAISSE.Vente V on V.idConso = C.id"
            . " where C.id not in (select id from WEBCAISSE.ConsoFidele) "
            . " AND DATEDIFF(DAY, V.dateVente ,CONVERT(date, GETDATE())) < 30";
                    
    //Exécution de la requête
    $statement = $this->queryList($requeteSql,PDO::FETCH_ASSOC,NULL) ;

    //Pour chaque enregistrement résultat de la requête
    while ($consoAFideliser = $statement->fetch()){
    //Création d’un objet de la classe Conso avec les données 
    $leConso = new Conso($consoAFideliser['nom'],$consoAFideliser['prenom'],$consoAFideliser['tel'],$consoAFideliser['mail']) ;
    //ajout du Consommateur à la liste des Consommateurs
    $lesConsos[] = $leConso ;}
	// fermeture de la connexion à la BD
    $statement->closeCursor();
    return $lesConsos ;
        }
    }


?>


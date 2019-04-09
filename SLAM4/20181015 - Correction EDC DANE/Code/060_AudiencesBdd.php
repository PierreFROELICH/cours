<?php
require 'RESSOURCE_RepositoryConnexion.php';
//include('050_Audiences.php') ;

class AudiencesBdd extends Audiences {
public function __construct() {
// Connexion à la base de données et chargement des données dans les dictionnaires

$dbCnx = new DbCnx() ;
$dbInstance = $dbCnx->getCnx() ;
$sql = 'SELECT DISTINCT rne FROM DANE.Etablissement';
$res = $dbInstance->prepare($sql);
$res->execute();
$dataRne = $res->fetchAll(PDO::FETCH_NUM);
//print_r($dataRne) ;
$res->closeCursor();

 $connexions = array() ;

  foreach($dataRne as $row => $lesEnregistrements){
    $connexions[$lesEnregistrements[0]] = 
        array("DEV",
        "DEV" ,
        1 ,
        1,
        1,
        1,
        1
        ) ;
  }

$this->lesConnexions =  new ArrayObject($connexions);

//print_r($this->lesConnexions) ;

}
public function updateConnexions( $newConnexions ) {
// Mise à jour des informations à partir du dictionnaire $newConnexions
}
public function updateApplications( $newApplications ) {
// Mise à jour des informations à partir du dictionnaire $newApplications
}
public function insertEtablissement( $newEtablissement ) {
// Effectue l'insertion dans la base de données à partir de la chaîne
// de caractères $newEtablissement. Ne fait rien si $newEtablissement
// est une chaîne vide ou une chaîne ne respectant pas le format ci-après.
// $newEtablissement doit être une chaîne de caractères composée
// du code rne, du type et du nom de l’établissement séparés par un point-virgule.
// Par exemple : "990001Z;CLG;Collège Nouveau"


/*** On met l'enregistrement dans un tableau */
$ligneEtablissement=explode(";",$newEtablissement) ;

/** On récypère chaque partie: rne, Libellé et Type */
$rne = $ligneEtablissement[0] ;
$lib =  $ligneEtablissement[1] ;
$typeEtab = $ligneEtablissement[2] ;

$dbCnx = new DbCnx() ;
$dbInstance = $dbCnx->getCnx() ;


/*** Insertion avec paramètres nommés */
/*** Bonus à coder  */
/*** préparation requête  */
/*** Bind puis exécution */



$statement->execute();

$statement = null ;
$dbCnx = null;

}
}



?>
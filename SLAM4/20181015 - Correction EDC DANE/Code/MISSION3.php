<?php
require 'RESSOURCE_RepositoryConnexion.php';

class Audiences {
// Dictionnaire contenant le nombre de connexions
// par établissement et par catégorie d'usages
protected $lesConnexions ; 

// Dictionnaire contenant le nom des applications
// activées par établissement et par type d'utilisateur
protected $lesApplications ; 

public function __construct(){

}

public function getLesConnexions() {
return $this->lesConnexions;
}

public function getLesApplications() {
return $this->lesApplications;
}

public function getNbEtablissements(){ 
    // retourne le nombre d’établissements
    // contenus dans le dictionnaire
    // méthode à coder sur votre copie
return $this->getLesConnexions()->count();

}
}


class AudiencesCsv extends Audiences {
// Nom du fichier CSV contenant les informations
// sur les nombres de connexions
private $fileConnexions; 

// Nom du fichier CSV contenant les informations
// sur les applications activées
private $fileApplications; 

public function __construct( $fileCnx, $fileApp ) {
    $this->fileConnexions = $fileCnx;
    $this->fileApplications = $fileApp;
    // Chargement des fichiers CSV dans les dictionnaires…
    // print_r($this->parseFichier($fileCnx)) ;
    $this->lesConnexions =  new ArrayObject($this->parseFichier($fileCnx)) ;
    // echo "Nombre items: ".$this->lesConnexions->count();
    //print_r($this->lesConnexions) ;
    }

private function parseFichier($fichierALire){

if(!file_exists($fichierALire)) {
   // si le fichier à lire $fichierALire cible n'existe pas
   echo "Verifiez l'existence du fichier" ;
} 
elseif($handle = fopen($fichierALire, 'r')) {
   $header = null;
   $data = [];
   while(is_array($row = fgetcsv($handle, null, ';'))) {
      if(is_null($header)) $header = $row;
      else $data[] = array_combine($header, $row);
   }
   fclose($handle);
  
  $connexions = array() ;


  foreach($data as $row => $lesEnregistrements){
      // print_r($lesEnregistrements) ;

    $connexions[$lesEnregistrements['RNE']] = 
        array($lesEnregistrements['TYPE'] ,
        $lesEnregistrements['Libelle'] ,
        $lesEnregistrements['101'] ,
        $lesEnregistrements['102'],
        $lesEnregistrements['103'],
        $lesEnregistrements['108'],
        $lesEnregistrements['110']
        ) ;

}
return $connexions;


} else {
   // échec à l'ouverture
      echo "Impossible à lire" ;

}
}
}

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
    $statement = $dbInstance->prepare("INSERT INTO DANE.Etablissement (rne, libelle, type) VALUES(:etab, :lib, :typ)" ) ;
    
    $statement->bindParam(':etab', $rne, PDO::PARAM_STR) ;
    $statement->bindParam(':lib', $lib, PDO::PARAM_STR) ;
    $statement->bindParam(':typ', $typeEtab, PDO::PARAM_STR) ;
    
    
    $statement->execute();
    
    $statement = null ;
    $dbCnx = null;
    
    }
    }

    class Synchronisation {
        private $lAudienceCsv; // un objet AudiencesCsv
        private $lAudienceBdd; // un objet AudiencesBdd
        public function __construct($lfileCnx, $lfileApp) {
        $this-> lAudienceCsv = new AudiencesCsv($lfileCnx, $lfileApp);
        $this-> lAudienceBdd = new AudiencesBdd();
        }
        private function syncConnexions() {
        $cnx = $this->lAudienceCsv->getLesConnexions();
        $this->lAudienceBdd->updateConnexions($cnx);
        }
        private function syncApplications() {
        $app = $this->lAudienceCsv->getLesApplications();
        $this->lAudienceBdd->updateApplications($app);
        }
        public function syncAll() {
        $this->syncConnexions();
        $this->syncApplications();
        }
        public function syncEtablisements(){
        // teste si les 2 sources de données ont le même nombre d’établissements
        // si ce n’est pas le cas met à jour la base de données en appelant la méthode
        // insertEtablissement de la classe AudiencesBdd pour chaque nouvel établissement
        // Méthode à coder sur votre copie
        if ($this->lAudienceCsv->getLesConnexions()->count() > 
        $this->lAudienceBdd->getLesConnexions()->count() ) 
        {
            foreach ($this->lAudienceCsv->getLesConnexions() as $clef => $valeur)
            {
                echo "$clef <BR>" ;
        
                if (! $this->lAudienceBdd->getLesConnexions()->offsetExists($clef) ){
                    $etabAinserer = $clef.";".$valeur[1].";".$valeur[0] ;
                    $this->lAudienceBdd->insertEtablissement($etabAinserer) ;
        
                }
        
            }
        
        }
        
        
            }
        }

?>
<?php
//include('050_Audiences.php') ;
include('055_AudiencesCSV.php') ;
include('060_AudiencesBdd.php') ;

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



    }
}


?>
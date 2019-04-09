<?php
require 'RESSOURCE_RepositoryConnexion.php';
class ReportEtab {
	
	private $rne ;
	private $dateDebut ;
	private $dateFin ;
	public function __construct($rne,$dateDebut,$dateFin) {
	$this->rne=$rne ;
	$this->dateDebut=$dateDebut ;
	$this->dateFin=$dateFin ;

	}	


public function jsonRepartUsages() {
$sql = 'SELECT libelle AS usage, SUM(nbCnx) AS nb_cnx'.
' FROM DANE.HistoUsageEtablissement INNER JOIN DANE.CategorieUsage '.
' ON id = idCategorieUsage'.
' WHERE rneEtablissement = :rne'.
' AND dateObservation BETWEEN :dateDebut AND :dateFin'.
' GROUP BY libelle';
// $res = DbCnx::getCnx()->prepare($sql);
$dbCnx = new DbCnx() ;
$dbInstance = $dbCnx->getCnx() ;
$res = $dbInstance->prepare($sql);

$res->bindValue(':rne', $this->rne, PDO::PARAM_STR);
$res->bindValue(':dateDebut', $this->dateDebut, PDO::PARAM_STR);
$res->bindValue(':dateFin',$this->dateFin, PDO::PARAM_STR);
$res->execute();
$lines = $res->fetchAll(PDO::FETCH_ASSOC);
$res->closeCursor();
// return $lines;
return json_encode($lines,JSON_NUMERIC_CHECK);
}
}
?>
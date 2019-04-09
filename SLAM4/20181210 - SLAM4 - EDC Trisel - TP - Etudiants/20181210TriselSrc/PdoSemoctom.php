<?php
class PdoSemoctom {
	/** Retourne les adresses d'un usager
	* @param integer $id  identifiant d'un usager
	* @return tableau associatif contenant les adresses */
	
	private $monPdo ;
	
	public static function getPdoSemoctom(){
	$dsn = "sqlsrv:Server=SQLSRV2,1433;Database=TEST";
	$monPdo = new PDO($dsn, "SQLTROBERT", "TEST");
	$monPdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	return $monPdo;
	}
	
	public function getAdressesUsager($id) {
		$req = "select id, adresse from trisel.habitation where idUsager = '$id'";
		// $rs = PdoSemoctom::$monPdo->query($req);
		// echo "$req" ;
		$rs = PdoSemoctom::getPdoSemoctom()->query($req);
		$adresses = $rs->fetchAll();
		return $adresses;
	}

	/** Retourne les factures d'une maison
	* @param integer $idMaison identifiant d'une maison
	* @return tableau associatif contenant les factures */
	
	public function getFacturesMaison($idMaison) {
		// reste à coder
		$req = "select anMois, nomFichier from trisel.facture 
			where idHabitation = '$idMaison' order by 1 desc";
		$rs = PdoSemoctom::getPdoSemoctom()->query($req);
		$factures = $rs->fetchAll();
		return $factures;

	}
}
?>

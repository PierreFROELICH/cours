<?php	
	session_start();
	require("tpl/smarty.class.php"); 
	require("PdoSemoctom.php");
	
	if (isset($_POST['idUsager'])) {
	$id = $_POST['idUsager'] ;
	$_SESSION['idUsager'] = $id ;
	}
	
	// $pdo = PdoSemoctom::getPdoSemoctom();
	$pdo = new PdoSemoctom() ;
	$pdo->getPdoSemoctom();
	
	// On inclut la classe Smarty

	$vue = new Smarty();
	// $_REQUEST contient tous les paramètres GET et POST
	$action = $_REQUEST['action']; 
	switch($action){
		case 'affiMaisons': {
			$idUsager = $_SESSION['idUsager'];
			$adresses = $pdo->getAdressesUsager($idUsager);
		// affecte le tableau $adresses au tableau Smarty lesMaisons
			$vue->assign('lesMaisons', $adresses);
		// affiche le contenu du template "listeMaisons.tpl"
			$vue->display('listeMaisons.tpl');
			break;
		}
		case 'affiFactures': {
			// reste à coder
			$idMaison = $_REQUEST['laMaison'];
			$factures = $pdo->getFacturesMaison($idMaison);
			$vue->assign('lesFactures', $factures);

			$vue->display('listeFactures.tpl');
			break;
		}
	}
?>

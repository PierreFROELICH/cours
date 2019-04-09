<?php
require "MISSION3_Statistiques.php" ;

$timoConso = new ConsoFidele("Robert","Timothee","robert.btssio@gmail.com", "0615151515","1971-06-15","2018-01-05") ;
$geradlineConso = new ConsoFidele("Durand","Geraldine","geraldine.durand@gmail.com", "0620253035","1977-05-04","2018-05-05") ;
$mrtoutlemondeConso = new Conso("Dupond","Gerard","gerard.dupond@gmail.com", "0635353535") ;


$venteTim1 = new VenteEcommerce("2018-10-31", $timoConso, 150 ,"MaisonsAlfort", "Colissimo") ;
$venteTim2 = new VenteEcommerce("2018-11-02", $timoConso, 80 ,"MaisonsAlfort", "Relais colis") ;
$venteTim3 = new VenteEcommerce("2018-11-03", $timoConso, 45 ,"MaisonsAlfort", "Poste") ;

$venteGer1 = new VenteMagasin("2018-11-02", $geradlineConso, 125 ,"SuperVendeur74") ;


$ventelambda1 = new VenteMagasin("2018-11-02", $mrtoutlemondeConso, 65 ,"SuperVendeur94") ;


$timoConso->addUneVente($venteTim1) ;
$timoConso->addUneVente($venteTim2) ;
$timoConso->addUneVente($venteTim3) ;

$geradlineConso->addUneVente($venteGer1) ;

$mrtoutlemondeConso->addUneVente($ventelambda1) ;


echo "Le nombre de ventes pour Timo est: ".$timoConso->getNbVentes()."<BR>";
echo "Le nombre de ventes pour Géraldine est: ".$geradlineConso->getNbVentes()."<BR>";

$lesVentesDuJour = array() ;
$lesVentesDuJour[] = $venteTim2 ;
$lesVentesDuJour[] = $venteGer1 ;
$lesVentesDuJour[] = $ventelambda1 ;

$lesConsosFidele = array() ;
$lesConsosFidele[] = $timoConso ;
$lesConsosFidele[] = $geradlineConso ;


$mesStats = new Statistique() ;
echo "La statistique à commenter est: ".$mesStats->statVente($lesVentesDuJour)."<BR>" ;

echo "Une fois complétée la méthode compareLieuVente donne: ".$mesStats->compareLieuVente($lesConsosFidele)."<BR>" ;

echo "Liste des ventes Sup à 50";
$listeVentes = $timoConso->getVentesSupMt(50) ;
print_r($listeVentes ) ;

?>
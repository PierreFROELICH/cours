<?php

/*
$monAudience = new AudiencesCsv('C:/laragon/www/dane/Connexions.csv',NULL) ;
$nbetab = $monAudience->getNbEtablissements();
echo "<BR>Le nomre d'établissements est ".$nbetab;
*/

$nouveauEtab = new AudiencesBdd() ;

/*
$nouveauEtab->insertEtablissement("ABCD1234;Lycee des champions;LYC") ;
$nouveauEtab->insertEtablissement("ABDE1234;Lycee des champions;LYC") ;
*/

$uneSynchro = new Synchronisation('C:/laragon/www/dane/Connexions_NEW.csv',NULL) ;
$uneSynchro -> syncEtablisements() ;


<?php
require "../vendor/autoload.php";

$batterie = new \Music\Instrument(1,'Batterie') ;
$piano = new \Music\Instrument(2,'Piano') ;
$guitare = new \Music\Instrument(3,'Guitare') ;

$atelierJazz = new \Music\CoursCollectif(1,10,'Atelier Jazzy', 100,10);

$coursBatterie = new \Music\CoursIndividuel(1,8,$batterie) ;
$coursPiano = new \Music\CoursIndividuel(2,8,$piano) ;
$coursGuitare = new \Music\CoursIndividuel(3,14,$guitare) ;

$coursBatterie->ajouteJour(new \Music\Jour(1,'Lundi'));
$coursBatterie->ajouteJour(new \Music\Jour(3,'Mercredi'));
$coursBatterie->ajouteJour(new \Music\Jour(5,'Vendredi'));

$coursPiano->ajouteJour(new \Music\Jour(1,'Lundi'));
$coursPiano->ajouteJour(new \Music\Jour(2,'Mardi'));
$coursPiano->ajouteJour(new \Music\Jour(4,'Jeudi'));

$coursGuitare->ajouteJour(new \Music\Jour(1,'Lundi'));
$coursGuitare->ajouteJour(new \Music\Jour(3,'Mercredi'));
$coursGuitare->ajouteJour(new \Music\Jour(4,'Jeudi'));
$coursGuitare->ajouteJour(new \Music\Jour(5,'Vendredi'));


$monPlanning=new \Music\Planning() ;
$monPlanning->lesCours = array($coursBatterie,$coursPiano,$coursGuitare) ;


$mesCoursJour = $monPlanning->coursJour(new \Music\Jour(1,'Lundi')) ;
print_r($mesCoursJour) ;
echo "<BR>" ;

$mesCoursJour = $monPlanning->coursJour(new \Music\Jour(2,'Mardi')) ;
print_r($mesCoursJour) ;
echo "<BR>" ;


?>

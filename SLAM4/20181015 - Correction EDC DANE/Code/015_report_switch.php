<?php
require_once '020_ReportEtab.php';
$action = $_GET['action'];
$rne = $_GET['rne'];
//echo $rne ;
$dateDebut = $_GET['dateDebut'];
$dateFin = $_GET['dateFin'];
$report = new ReportEtab($rne, $dateDebut, $dateFin);
switch ($action) {
case 'EtabEvolCnx': echo $report->jsonEvolCnx();break;
case 'EtabRepartUsages': echo $report->jsonRepartUsages();break;
}
?>
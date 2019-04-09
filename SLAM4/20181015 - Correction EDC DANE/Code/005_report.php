<HTML>
<HEAD>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>	
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="js/010_report.js" ></script>


</HEAD>

<BODY>
<div data-role="collapsible" data-theme="c" data-content-theme="d" data-corners="false" data-collapsed-icon="arrow-d" >
<h3>Vue d'ensemble des visites</h3>
<div id="graphiques">
<div id="graph_cnx_etab" style="max-width: 700px"></div>
<div id="graph_cnx_usages" style="max-width: 700px"></div>
<div id="graph_cnx_usages_horsVS" style="max-width: 700px"></div>
</div>
</div>

<?php
// $rne = "0750707L" ;
$libType = "totoro";
// $dateDebut = "2017-11-30";
// $dateFin = "2017-12-31";

if (isset($_POST['rneFormulaire'])) {
	$rne = $_POST['rneFormulaire'] ;
	// echo $rne ;
	}
	
if (isset($_POST['dateDebutPeriode'])) {
	$dateDebut = $_POST['dateDebutPeriode'] ;
	// echo $dateDebut ;
	}

if (isset($_POST['dateFinPeriode'])) {
	$dateFin = $_POST['dateFinPeriode'] ;
	// echo $dateFin ;
	}


// http://localhost/dane/report_switch.php?action=EtabRepartUsages&rne='0750707L'&dateDebut='2017-11-30'&dateFin='2017-12-31'

?>

<script type="text/javascript">
$(document).ready(function () {
rne = '<?php echo $rne; ?>';
//libType = <?php echo $libType; ?>;
dateDebut = '<?php echo $dateDebut; ?>';
dateFin = '<?php echo $dateFin; ?>';

cnx_usages(rne, dateDebut, dateFin);


});
</script>
</BODY>
</HTML>
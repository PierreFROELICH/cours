<HTML>
<HEAD>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
  <script>

$(function() {
    var dateDebutObservation = $('#dateDebutPeriode').datepicker({ dateFormat: 'yy-mm-dd' }).val();
  });
  </script>


    <script>
  $(function() {
    var lastdate = $('#dateFinPeriode').datepicker({ dateFormat: 'yy-mm-dd' }).val();
  });
  </script>


<body>
<h1>Votre etablissement:</h1>

</body>



<?php
require 'RESSOURCE_RepositoryConnexion.php';
$sql = 'SELECT Distinct rne '.' FROM DANE.Etablissement';
// $res = DbCnx::getCnx()->prepare($sql);
$dbCnx = new DbCnx() ;
$dbInstance = $dbCnx->getCnx() ;
$res = $dbInstance->prepare($sql);

$res->execute();
$dataRne = $res->fetchAll(PDO::FETCH_ASSOC);
$res->closeCursor();

?>

	<form method = "POST" action="005_report.php">

	<select name="rneFormulaire" id="rneFormulaire">
<?php foreach ($dataRne as $row): ?>
    <option><?=$row["rne"]?></option>
<?php endforeach ?>
</select>
<BR>

<p>Selectionnez la date de debut d observation: <input name="dateDebutPeriode" type="text" id="dateDebutPeriode"></p>

<p>Selectionnez la date de fin d observation: <input name="dateFinPeriode" type="text" id="dateFinPeriode"></p>

	
		<input type="submit" value="Valider">
	</form>

</HTML>

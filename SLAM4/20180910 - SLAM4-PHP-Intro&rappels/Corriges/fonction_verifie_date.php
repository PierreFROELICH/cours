 <!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Analyse dates</title>
</head>
<body>
<p>Fonction de verif de date: <BR>
    <?php 

function verif_date($jour,$mois,$annee) {
echo "$jour/$mois/$annee => ", 
      var_dump(checkdate($mois,$jour,$annee)),'<br />';    
}
 
    verif_date(26,8,1966) ;
    
?>
</body>
</html>
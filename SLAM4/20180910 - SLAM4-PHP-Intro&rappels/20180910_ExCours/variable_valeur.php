 <!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Analyse variables</title>
</head>
<body>
<p>Passage par valeur ou par référence:
    <?php
$note_francois = 12 ;
$note_julie = $note_francois ;
    echo "François a eu: $note_francois <BR>" ;
    echo "Julie a eu: $note_julie <BR>" ;
    
/*** Contestation des notes ****/
$note_francois = 18 ;
    echo "Après contestation, les notes sont: <BR>" ;
    echo "François a eu: $note_francois <BR>" ;
    echo "Julie a eu: $note_julie <BR>" ;
    
    
?>
</body>
</html>
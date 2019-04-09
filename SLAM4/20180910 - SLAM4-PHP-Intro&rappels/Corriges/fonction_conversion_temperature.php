 <!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Test fonction</title>
</head>
<body>
<p>Fonction de conversion de degres: <BR>
    <?php
function convertFtoC($temperature) {
$celsius = ($temperature - 32)* (5/9);
$result = $temperature. ' Fahrenheit est égale à ' .$celsius. ' Celsius.';
return $result;
}
/**
* convertCtoF
* Convert from Celsius to Fahrenheit
* @param unknown_type $temperature
*/
function convertCtoF($temperature) {
$fahren = $temperature * (9/5) + 32;
$result = $temperature.' Celsius est égal '.$fahren. ' Fahrenheit.';
return $result;
}
$celsius = 32 ;
$fahrenheit = convertCtoF($celsius) ;
echo $fahrenheit;
?>
</body>
</html>
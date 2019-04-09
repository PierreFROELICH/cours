 <!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Test fonction</title>
</head>
<body>
<p>Fonction à plusieurs paramètres variables: <BR>
    <?php
function analyse_arguments(...$mesArguments) {
echo 'Il y a en tout ',count($mesArguments), ' arguments passées à la fonction: ' ;
echo implode(', ',$mesArguments) ;
}
    
    analyse_arguments('riri','fifi','loulou',15,6,9,2) ;
    
?>
</body>
</html>
<?php
// Initialisation fichier et stockage dans un tableau


function affiche_prenoms($nombreLettres,$premiereLettre)
{

// Stockage des prénoms de 7 lettres commençant par C dans un tableau
    $prenoms = file("prenoms.txt", FILE_IGNORE_NEW_LINES);
$choix = array();
for ($i = 0; $i < count($prenoms); $i++)
	{
		if (strlen($prenoms[$i]) == $nombreLettres && substr($prenoms[$i], 0, 1) == "$premiereLettre") array_push($choix, $prenoms[$i]);
	}
// Affichage des prénoms de 6 lettres commençant par C
?>
<p class="titre3" align="center">Vous recherchez un prénom ?<br />
Et bien je vous propose ceux-ci, à vous de choisir :<br />
<?php
for ($i = 0; $i < count($choix); $i++)
	{
		echo '<input type="button" value="'.$choix[$i].'" class="titre3bold" />';
	}
}

affiche_prenoms(5,'d');



?>
</p>
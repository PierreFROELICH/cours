<?php
/* Affichage du message pur */
	echo ('On reprend de 0 après on accélère');
?>
<br/>
<?php 
/* Affichage du message avec une consatante */
	define('msg','On reprend de 0 après on accélère');
	echo msg;
?>
<br/>
<?php 
/* Affichage du message avec une variable */
	$msg = 'On reprend de 0 après on accélère';
	echo $msg;
?>
<br/>
<hr/>

<?php 
	$noteMajor = array(17,19,18,20);
	$i = 1;

	foreach($noteMajor as $note)
	{
		echo('La note n° '. $i .' est de: '. $note .'<br/>');
		$i++;
	}
?>
<br>
<hr>

<?php 
/* Toutes les capitales des 45 pays d'Europe */
	$capitales = array(['Albanie','Tirana'],['Allemagne','Berlin'],['Andorre','Andorre-la-Vieille'],['Autriche','Vienne'],['Belgique','Bruxelles'],['Bielorussie','Minsk'],['Bosnie-Herzegovine','Sarajevo'],['Bulgarie','Sofia'],['Chypre','Nicosie'],['Croatie','Zagreb'],['Danemark','Copenhague'],['Espagne','Madrid'],['Estonie','Tallinn'],['Finlande','Helsinki'],['France','Paris'],['Grece','Athenes'],['Hongrie','Budapest'],['Irlande','Dublin'],['Islande','Reykjavik'],['Italie','Rome'],['Kosovo','Pristina'],['Lettonie','Riga'],['Liechtenstein','Vaduz'],['Lituanie','Vilnius'],['Luxembourg','Luxembourg'],['Macedoine','Skopje'],['Malte','La Valette'],['Moldavie','Chisinau'],['Monaco','Monaco'],['Montenegro','Podgorica'],['Norvege','Oslo'],['Pays-Bas','Amsterdam'],['Pologne','Varsovie'],['Portugal','Lisbonne'],['Republique tcheque','Prague'],['Roumanie','Bucarest'],['Royaume-Uni','Londres'],['Russie','Moscou'],['Serbie','Belgarde'],['Slovaquie','Bratislava'],['Slovenie','Ljubljana'],['Suisse','Berne'],['Suede','Stockholm'],['Ukraine','Kiev'],['Vatican','Vatican']);

	foreach($capitales as list($valueA, $valueB))
	{
		echo("La capitale de $valueA est $valueB <br>");
	}
?>
<hr>
<br>


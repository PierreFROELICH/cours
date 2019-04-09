<?php

require "MISSION2_Base.php" ;

$grc = new GRC()	;
// $grc->listeConsoAFideliser() ;
foreach ($grc->listeConsoAFideliser() as $key => $value)
{
    echo $key ."<BR>";
    echo $value ."<BR>";
}


/*
$timoto = new ConsoFidele("Robert", "Timothée","robert.btssio@gmail.com","0622441214",NULL,NULL) ;
echo "$timoto <BR>" ;
echo "Il est fidele ?".$timoto->estFidele();
*/


?>
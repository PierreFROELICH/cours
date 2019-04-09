<?php
include('050_Audiences.php') ;
class AudiencesCsv extends Audiences {
// Nom du fichier CSV contenant les informations
// sur les nombres de connexions
private $fileConnexions; 

// Nom du fichier CSV contenant les informations
// sur les applications activées
private $fileApplications; 

public function __construct( $fileCnx, $fileApp ) {
    $this->fileConnexions = $fileCnx;
    $this->fileApplications = $fileApp;
    // Chargement des fichiers CSV dans les dictionnaires…
    // print_r($this->parseFichier($fileCnx)) ;
    $this->lesConnexions =  new ArrayObject($this->parseFichier($fileCnx)) ;
    // echo "Nombre items: ".$this->lesConnexions->count();
    //print_r($this->lesConnexions) ;
    }

private function parseFichier($fichierALire){

if(!file_exists($fichierALire)) {
   // si le fichier à lire $fichierALire cible n'existe pas
   echo "Verifiez l'existence du fichier" ;
} 
elseif($handle = fopen($fichierALire, 'r')) {
   $header = null;
   $data = [];
   while(is_array($row = fgetcsv($handle, null, ';'))) {
      if(is_null($header)) $header = $row;
      else $data[] = array_combine($header, $row);
   }
   fclose($handle);
  
  $connexions = array() ;


  foreach($data as $row => $lesEnregistrements){
      // print_r($lesEnregistrements) ;

    $connexions[$lesEnregistrements['RNE']] = 
        array($lesEnregistrements['TYPE'] ,
        $lesEnregistrements['Libelle'] ,
        $lesEnregistrements['101'] ,
        $lesEnregistrements['102'],
        $lesEnregistrements['103'],
        $lesEnregistrements['108'],
        $lesEnregistrements['110']
        ) ;

}
return $connexions;


} else {
   // échec à l'ouverture
      echo "Impossible à lire" ;

}
}
}



?>
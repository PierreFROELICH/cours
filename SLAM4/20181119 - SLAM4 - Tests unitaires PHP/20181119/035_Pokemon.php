<?php
namespace Pokemon ;

class PokemonApi{
protected $apiUrl;

public function __construct($apiUrl){
    $this->apiUrl = $apiUrl;
}

public function getCaracteristiquesPokemon($idPokemon){
    $aContext = array(
        'http' => array(
            'proxy' => 'tcp://10.0.210.3:3128', 
            'request_fulluri' => True,
            ),
        );
    $cxContext = stream_context_create($aContext);
    
    // Now all file stream functions can use this context.
    
    $response = file_get_contents($this->apiUrl . "$idPokemon", False, $cxContext);
    //$response=file_get_contents($this->apiUrl . "$idPokemon");
    return json_decode($response, true);
}

public function getNombreCapacitesParPokemon($idPokemon){
    $response = $this->getCaracteristiquesPokemon($idPokemon) ;

    if (isset($response['abilities'])) {
        return count($response['abilities']) ;
    }
}

// A COMPLETER: comptage sur STATISTIQUES POKEMON

public function getNombreStatistiquesParPokemon($idPokemon){
    $response = $this->getCaracteristiquesPokemon($idPokemon) ;

    if (isset($response['stats'])) {
        return count($response['stats']) ;
    }
}


/** 
$stream = stream_context_create(Array("http" => Array("method"  => "GET", 
                                                      "timeout" => 20, 
                                                      "header"  => "User-agent: Myagent", 
                                                      "proxy"   => "tcp://my-proxy.localnet:3128", 
                                                      'request_fulluri' => True 
                                ))); 

if ( $fp = fopen("http://example.com", 'r', false, $stream) ) { 
    print "well done"; 
} 
*/


}
?>



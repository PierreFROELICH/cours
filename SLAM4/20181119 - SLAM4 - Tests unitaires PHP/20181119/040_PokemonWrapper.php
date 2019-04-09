<?php
namespace Pokemon ;

class PokemonWrapper{
protected $_api;

public function __construct($api){
    $this->_api = $api;
}

public function getCaracteristiquesPokemon($idPokemon){
    return $this->_api->getCaracteristiquesPokemon($idPokemon);
}

public function getNombreCapacitesParPokemon($idPokemon){
    $response = $this->_api->getCaracteristiquesPokemon($idPokemon) ;

    if (isset($response['abilities'])) {
        return count($response['abilities']) ;
    }
    return false;
}

public function getStatistiquesPokemon($idPokemon){
    $response = $this->_api->getCaracteristiquesPokemon($idPokemon) ;

    if (isset($response['stats'])) {
        return count($response['stats']) ;
    }
    return false;
}

}

class PokemonApi{
protected $apiUrl;

public function __construct($apiUrl){
    $this->apiUrl = $apiUrl;
}

public function getCaracteristiquesPokemon($idPokemon){
    $response=file_get_contents($this->apiUrl . "$idPokemon");
    return json_decode($response, true);
}


}

?>



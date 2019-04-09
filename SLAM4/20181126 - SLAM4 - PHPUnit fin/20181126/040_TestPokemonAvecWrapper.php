<?php 
require "040_PokemonWrapper.php";
use PHPUnit\Framework\TestCase;

class TestPokemonsWrapper extends Testcase{

public function testCalculNombreCapacitesOK(){
    $apiReponse= <<<YOUPICESTLAFIN
{
    "abilities": [
{
  "ability": {
   "name": "drought",
   "url": "https://pokeapi.co/api/v2/ability/70/"
  },
  "is_hidden": true,
  "slot": 3
 },
 {
  "ability": {
   "name": "flash-fire",
   "url": "https://pokeapi.co/api/v2/ability/18/"
  },
  "is_hidden": false,
  "slot": 1
 }
]}
YOUPICESTLAFIN;

    $api = $this->getMockBuilder('\Pokemon\PokemonApi')->disableOriginalConstructor()->setMethods(array('getCaracteristiquesPokemon'))->getMock();
    $api->expects($this->once())->method('getCaracteristiquesPokemon')->will($this->returnValue(json_decode($apiReponse,true)));

    $apiWrapper = new \Pokemon\PokemonWrapper($api);

    $testReponse = $apiWrapper->getNombreCapacitesParPokemon(23);
   

    $this->assertThat($testReponse,$this->logicalAnd(
            $this->isType("integer"),
            $this->greaterThan(1),
            $this->lessThan(5)
                        ),
        "Pas le bon nombre de capacités");
    }

}

?>
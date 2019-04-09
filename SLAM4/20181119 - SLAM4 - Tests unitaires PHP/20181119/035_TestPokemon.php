<?php 
require "035_Pokemon.php";
use PHPUnit\Framework\TestCase;

class TestPokemons extends Testcase{

public function testNbCapacitesParPokemon(){
    $apirUrl = "https://pokeapi-215911.firebaseapp.com/api/v2/pokemon/" ;
    $unPokemon = new \Pokemon\PokemonApi($apirUrl) ;

    //$nbAttendu = 3 ;
    $nbPokemons = $unPokemon->getNombreCapacitesParPokemon(23) ;

    $this->assertThat($nbPokemons,$this->logicalAnd(
            $this->isType("integer"),
            $this->greaterThan(1),
            $this->lessThan(5)
                        ),
        "Pas le bon nombre de capacités");

}

// A COMPLETER: test sur nombre de statistiques par Pokemon

public function testNbStatsParPokemon(){
        $apirUrl = "https://pokeapi-215911.firebaseapp.com/api/v2/pokemon/" ;
        $unPokemon = new \Pokemon\PokemonApi($apirUrl) ;
        
        //$nbAttendu = 3 ;
        $nbStatsPokemons = $unPokemon->getNombreStatistiquesParPokemon(32) ;
    
        $this->assertEquals(6,$nbStatsPokemons,"Pas le bon nombre de stats");
    
    }


}



?>
<?php
use PHPUnit\Framework\TestCase;
require "020_MISSION2_Base.php" ;

class TestPointsFidelite extends TestCase {

public function testAddFideliteTampon() {
 $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");
 
$consoTest->addFidelite(1, 50);
$this->assertEquals(1,$consoTest->getPointsFidelite(),"erreur calcul 1er tampon");
        
$consoTest->addFidelite(1, 20);
$this->assertEquals(2,$consoTest->getPointsFidelite(),"erreur calcul 2ème tampon");

}


public function testAddFideliteMontant() {

    $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");
    $consoTest->addFidelite(2, 150);	
    $this->assertEquals(150,$consoTest->getPointsFidelite(),"erreur calcul 1er achat");
 
    $consoTest->addFidelite(2, 250);
    $this->assertEquals(400,$consoTest->getPointsFidelite(),"erreur calcul 2ème  achat");

    
}

public function testInitConso() {
    
    $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");
    
    // A COMPLETER 
    $this->assertEquals(0,$consoTest->getPointsFidelite(),"Initialisation pas bonne");

}
	

    public function testAddMontant() {
        $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");
    
        // A COMPLETER CI DESSOUS
        $consoTest->addFidelite(3, 50);	
        $this->assertEquals(0,$consoTest->getPointsFidelite(),"Pas assez cher cette depense");
    
        $consoTest->addFidelite(3, 150);	
        $this->assertEquals(10,$consoTest->getPointsFidelite(),"Mauvais calcul 2ème tranche");
    
        $consoTest->addFidelite(3, 250);	
        $this->assertEquals(30,$consoTest->getPointsFidelite(),"Mauvais calcul 3ème tranche");
    
        $consoTest->addFidelite(3, 550);	
        $this->assertEquals(80,$consoTest->getPointsFidelite(),"Mauvais calcul 4ème tranche");



        }



}





?>
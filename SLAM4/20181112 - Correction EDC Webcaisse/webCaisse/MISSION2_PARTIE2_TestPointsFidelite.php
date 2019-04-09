<?php

require "MISSION2_Base.php" ;

class TestPointsFidelite {

public function testAddFideliteTampon() {
 $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");
 $consoTest->addFidelite(1, 50);

 echo "Le nombre de points de fidélité doit être égal à 1 ici: <BR>" ;
 echo "Le nombre attribué par la méthode addFidelite programme 1 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";

$consoTest->addFidelite(1, 20);
echo "Le nombre de points de fidélité doit être égal à 2 ici: <BR>" ;
echo "Le nombre attribué par la méthode addFidelite programme 1 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";      

}

public function testAddFideliteMontant() {

    $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");
    $consoTest->addFidelite(2, 150);	
    
    echo "Le nombre de points de fidélité doit être égal au montant cumulé d'achat, c'est à dire 150 ici: <BR>" ;
    echo "Le nombre attribué par la méthode addFidelite programme 2 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";

    $consoTest->addFidelite(2, 250);
    echo "Le nombre de points de fidélité doit être égal au montant cumulé d'achat, c'est à dire 150+250 = 400 ici: <BR>" ;
    echo "Le nombre attribué par la méthode addFidelite programme 2 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";
    
}

    public function testInitConso() {
    
    $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");

    $this->assertEquals($consoTest, '0');
    
    
}
	
public function testAddMontant() {
    $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");

    
    // À compléter 


	}
}

$test = new TestPointsFidelite ;
echo "Resultat de la methode de test du programme de fidélité par tampon: testAddFideliteTampon est :<BR>" ;
echo $test->testAddFideliteTampon();

echo "Resultat de la methode de test du programme de fidélité par montant achat: testAddFideliteMontant est :<BR>" ;
echo $test->testAddFideliteMontant();

    // À compléter 




?>
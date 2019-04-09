<?php

require "Base.php" ;

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

    // À compléter sur votre copie
    // ENLEVER LES 3 LIGNES SUIVANTES
    if ($consoTest->getPointsFidelite() ==0)
    {
        echo "Bien initialisé à 0 <BR><BR>" ;
    }
}
	
public function testAddMontant() {
    $consoTest = new ConsoFidele("Lifo", "Paul","lifo.paul@gmail.com", "0600000000","1961-01-03","2017-01-05");

    
    $consoTest->addFidelite(3, 50);
    echo "Le nombre de points de fidélité doit être égal à 0, puisque le montant d'achat est compris entre 50 et 100: <BR>" ;
    echo "Le nombre attribué par la méthode addFidelite programme 3 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";

    $consoTest->addFidelite(3, 150);
    echo "Le nombre de points de fidélité doit être égal à 10, puisque le montant d'achat est compris entre 100 et 200: <BR>" ;
    echo "Le nombre attribué par la méthode addFidelite programme 3 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";
   
    $consoTest->addFidelite(3, 250);
    echo "Le nombre de points de fidélité doit être égal à 30 (20 + 10), puisque le montant d'achat est compris entre 200 et 500: <BR>" ;
    echo "Le nombre attribué par la méthode addFidelite programme 3 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";

    $consoTest->addFidelite(3, 550);
    echo "Le nombre de points de fidélité doit être égal à 80 (50 + 30), puisque le montant d'achat est supérieur à 500: <BR>" ;
    echo "Le nombre attribué par la méthode addFidelite programme 3 est: " .$consoTest->getPointsFidelite() ."<BR><BR>";


	}
}

$test = new TestPointsFidelite ;
echo "Resultat de la methode de test du programme de fidélité par tampon: testAddFideliteTampon est :<BR>" ;
echo $test->testAddFideliteTampon();

echo "Resultat de la methode de test du programme de fidélité par montant achat: testAddFideliteMontant est :<BR>" ;
echo $test->testAddFideliteMontant();

// A ENLEVER CI DESSOUS
echo "Resultat de la methode verification intialisation :<BR>" ;
echo $test->testInitConso() ;

echo "Resultat de la methode de test du programme de fidélité par points: testAddMontant est :<BR>" ;
echo $test->testAddMontant();


?>
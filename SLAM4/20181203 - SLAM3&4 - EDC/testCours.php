<?php
use PHPUnit\Framework\TestCase;
class CourTest extends TestCase
{
    private $unCours;

    public function setUp()
    {
        $batterie = new \Music\Instrument(1,'Batterie') ;
        $this->unCours = new \Music\CoursIndividuel(1,8,$batterie) ;
    }

    public function tearDown() {
        $this->unCours = null;
    }


public function testajouteJour()
{

$this->unCours->ajouteJour(new \Music\Jour(1,'Lundi'));
$this->assertEquals(1, count($this->unCours->getLesJours()),"cours mal initialisé");
$this->unCours->ajouteJour(new \Music\Jour(3,'Mercredi'));
$this->assertEquals(2, count($this->unCours->getLesJours()),"cours mal initialisé");
$this->unCours->ajouteJour(new \Music\Jour(5,'Vendredi'));
$this->assertEquals(3, count($this->unCours->getLesJours()),"cours mal initialisé");

$this->assertInternalType('array',$this->unCours->getLesJours(),"les jours n est pas un array");

}

public function testaLieuLeJourLundi()
{
$this->unCours->ajouteJour(new \Music\Jour(1,'Lundi'));
$this->unCours->ajouteJour(new \Music\Jour(3,'Mercredi'));
$this->unCours->ajouteJour(new \Music\Jour(5,'Vendredi'));
$this->assertTrue($this->unCours->aLieuLeJour(new \Music\Jour(1,'Lundi'))) ;
    
}

public function testaLieuLeJourVendredi()
{
$this->unCours->ajouteJour(new \Music\Jour(1,'Lundi'));
$this->unCours->ajouteJour(new \Music\Jour(3,'Mercredi'));
$this->unCours->ajouteJour(new \Music\Jour(5,'Vendredi'));
$this->assertTrue($this->unCours->aLieuLeJour(new \Music\Jour(5,'Vendredi'))) ;
    
}


}


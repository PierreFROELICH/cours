<?php
use PHPUnit\Framework\TestCase;
class CoursTest extends TestCase
{
    private $coursIndividuel;

    public function setUp()
    {
        $guitare = new \Music\Instrument(3,'Guitare') ;
        $this->coursIndividuel = new \Music\CoursIndividuel(3,14,$guitare) ;;
    }

    public function tearDown() {
        $this->coursIndividuel = null;
    }

public function testGetLibelle()
{
    $this->assertEquals('Guitare',$this->coursIndividuel->getLibelle());
}

public function testALieuLeJour(){
    $this->coursIndividuel->ajouteJour(new \Music\Jour(1,'Lundi'));
    $this->assertEquals(1,count($this->coursIndividuel->getLesJours()));
    $this->coursIndividuel->ajouteJour(new \Music\Jour(3,'Mercredi'));
    $this->assertEquals(2,count($this->coursIndividuel->getLesJours()));
    $this->coursIndividuel->ajouteJour(new \Music\Jour(5,'Vendredi'));
    $this->assertEquals(3,count($this->coursIndividuel->getLesJours()));

    $this->assertTrue($this->coursIndividuel->aLieuLeJour(new \Music\Jour(1,'Lundi')));
    $this->assertTrue($this->coursIndividuel->aLieuLeJour(new \Music\Jour(3,'Mercredi')));
    $this->assertFalse($this->coursIndividuel->aLieuLeJour(new \Music\Jour(4,'Jeudi')));

}


}


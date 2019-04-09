<?php
use PHPUnit\Framework\TestCase;
class PlanningTest extends TestCase
{
    private $planningTotoro;
    private $coursBatterie ;
    private $coursPiano ;

    public function setUp()
    {
        $this->planningTotoro = new \Music\Planning();
    }

    public function tearDown() {
        $this->planningTotoro = null;
    }

public function testConstructPlanning()
{
    $this->assertInternalType('array',$this->planningTotoro->lesJours,"les jours n est pas un array");
    $this->assertEquals(5,count($this->planningTotoro->lesJours));
    $this->assertContainsOnlyInstancesOf(\Music\Jour::class,$this->planningTotoro->lesJours);
}

public function testCoursJour(){
    $batterie = new \Music\Instrument(1,'Batterie') ;
    $piano = new \Music\Instrument(2,'Piano') ;

    $this->coursPiano = new \Music\CoursIndividuel(2,8,$piano) ;

    $this->coursBatterie = new \Music\CoursIndividuel(1,8,$batterie) ;

    $this->coursBatterie->ajouteJour(new \Music\Jour(1,'Lundi'));
    $this->coursBatterie->ajouteJour(new \Music\Jour(3,'Mercredi'));
    $this->coursBatterie->ajouteJour(new \Music\Jour(5,'Vendredi'));

    $this->coursPiano->ajouteJour(new \Music\Jour(1,'Lundi'));
    $this->coursPiano->ajouteJour(new \Music\Jour(2,'Mardi'));
    $this->coursPiano->ajouteJour(new \Music\Jour(4,'Jeudi'));
    $this->coursPiano->ajouteJour(new \Music\Jour(5,'Vendredi'));

    $this->assertEquals(3,count($this->coursBatterie->getLesJours()));
    $this->assertEquals(4,count($this->coursPiano->getLesJours()));

    $this->planningTotoro->setLesCours(array($this->coursBatterie,$this->coursPiano)) ;

    $this->assertInternalType('array',$this->planningTotoro->coursJour(new \Music\Jour(1,'Lundi')));
    $this->assertInternalType('array',$this->planningTotoro->coursJour(new \Music\Jour(2,'Mardi')));

    $this->assertEquals(2,count($this->planningTotoro->coursJour(new \Music\Jour(1,'Lundi'))));


}



}


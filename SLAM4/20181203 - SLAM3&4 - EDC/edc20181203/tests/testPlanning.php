<?php
use PHPUnit\Framework\TestCase;
class PlanningTest extends TestCase
{
    private $planning;

    public function setUp()
    {
        $this->planning = new \Music\Planning();
    }

    public function tearDown() {
        $this->planning = null;
    }

public function testConstructPlanning()
{
    $this->assertInternalType('array',$this->planning->lesJours,"les jours n est pas un array");
    
}




}


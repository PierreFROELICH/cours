<?php
use PHPUnit\Framework\TestCase;

class CalculTest extends TestCase {
    public function testCarre(){
        $this->assertEquals(49,\Encsio\Calcul::nombreCarre(7));
    }
}
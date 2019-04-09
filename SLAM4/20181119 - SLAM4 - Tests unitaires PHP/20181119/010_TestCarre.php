<?php
use PHPUnit\Framework\TestCase;
require "Calcul.php" ;

class CarreTest extends TestCase
{
    public function testCarre()
    {
        $this->assertEquals(15, Calcul::carre(4),"Nombres pas égaux") ;
    }
}
?>
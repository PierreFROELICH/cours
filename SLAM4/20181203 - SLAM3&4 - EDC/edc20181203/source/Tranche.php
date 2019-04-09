<?php
class Tranche {

// Declaration des attributs:
private $id_tranche;
private $quotientMin ;
private $quotientMax ;
    


    
public function getId_tranche()
{
	return $this->id_tranche ;
}

public function setId_tranche($id)
{
	$this->id_tranche =$id;
}

public function getQuotientMin()
{
	return $this->quotientMin ;
}

public function setQuotientMin($quotient)
{
	$this->quotientMin =$quotient;
}
    
public function getQuotientMax()
{
	return $this->quotientMax ;
}

public function setQuotientMax($quotient)
{
	$this->quotientMax =$quotient;
}

function afficheTout() {
echo "Identifiant est: ".$this->getId_tranche()."<BR>";
echo "La tranche min: ".$this->getQuotientMin()."<BR>";
echo "La tranche max est: ".$this->getQuotientMax()."<BR>";
}


} // Fin de Tranche class.
?>
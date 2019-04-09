package bretagne;

import static org.junit.Assert.*;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class TestDemandeAbsence {
	
	DemandeAbsence uneDemande ;

	@Before
	public void setUp() throws Exception {
		
		Salarie mrRobert = new Salarie("Robert ENC","Robert", "Timo") ;
		DateFr debAbsence = new DateFr(25,2,2019) ;
		DateFr finAbsence = new DateFr(27,2,2019);

		Absence lundiJeViensPasJaiPiscine = new Absence(debAbsence,finAbsence,"Piscine",mrRobert) ;
		uneDemande = new DemandeAbsence(lundiJeViensPasJaiPiscine) ;

		
	}

	@After
	public void tearDown() throws Exception {
	}

	@Test
	public void testAccepter() {
		
		uneDemande.accepter() ;
		assertEquals("L etat de la demande est KO","ACC",uneDemande.getLeEtatDemande());
	
	}

}

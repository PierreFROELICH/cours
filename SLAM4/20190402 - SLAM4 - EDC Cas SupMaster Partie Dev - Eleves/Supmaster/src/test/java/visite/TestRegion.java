package visite;

import static org.junit.Assert.*;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class TestRegion {
	
	private Region uneRegion ;

	@Before
	public void setUp() throws Exception {
		Etablissement unEtablissement = new Etablissement("Paris","Inconnu","Robert") ;
		/**** Cr�ation d'une r�gion pour le Test, associ�e � l'�tablissement (Paris) ***/
	    uneRegion = new Region(1,"Ile de France", unEtablissement) ;
	    /*** Cr�ation d'une 1�re organisation ****/
	    Organisation uneOrga = new Organisation("SUADEO","inconnue",uneRegion) ;  
	    /*** Ajout d'une visite pour cette 1�re organisation ****/    
	    Visite uneVisite = new Visite( "2018-10-11");
	    // Ligne ci dessous ne marche pas, devrait marcher ?
	    //uneOrga.ajoutVisite(uneVisite);
	    uneRegion.ajoutOrganisation(uneOrga);
	    Organisation deuxOrga = new Organisation("MUNIVIE","inconnue",uneRegion) ;
	    uneRegion.ajoutOrganisation(deuxOrga);
	    Organisation troisOrga = new Organisation("Umanis","inconnue",uneRegion) ;
	    uneRegion.ajoutOrganisation(troisOrga);	
	}

	@After
	public void tearDown() throws Exception {
	}

	@Test
	public void test() {
		//fail("Not yet implemented");
	}

}

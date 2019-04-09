package bretagne;

import static org.junit.Assert.*;

import java.util.List;

import org.hamcrest.collection.IsCollectionWithSize;
import org.hamcrest.collection.IsEmptyCollection;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class TestManager {

	Manager theBigPatron ;
	
	@Before
	public void setUp() throws Exception {

		// On crée le boss, il s'appelle Ulysse
		theBigPatron = new Manager("CEKILEBOSS","Robert", "Ulysse") ;
		
		
		// On crée 2 salariés, Mr et Mme Robert
		Salarie mrRobert = new Salarie("Robert ENC","Robert", "Timo") ;
		Salarie mmeRobert = new Salarie("Robert","Robert","Pupuce") ;
		
		
		// On crée 3 absences, dont 2 avec une demande en attente, pour Mr Robert
		// Mme, Robert n'a pas d'absence
		DateFr debAbsence = new DateFr(25,2,2019) ;
		DateFr finAbsence = new DateFr(27,2,2019);
		Absence lundiJeViensPasJaiPiscine = new Absence(debAbsence,finAbsence,"Piscine",mrRobert) ;
		lundiJeViensPasJaiPiscine.setLeEtat("ATT");
		mrRobert.ajoutUneAbsence(lundiJeViensPasJaiPiscine);
		DemandeAbsence uneDemande = new DemandeAbsence(lundiJeViensPasJaiPiscine) ;

		DateFr deb2Absence = new DateFr(18,2,2019) ;
		DateFr fin2Absence = new DateFr(22,2,2019);
		Absence leMardiCestRavioli = new Absence(deb2Absence,fin2Absence,"Piscine",mrRobert) ;
		leMardiCestRavioli.setLeEtat("ACC");
		mrRobert.ajoutUneAbsence(leMardiCestRavioli) ;	

		
		DateFr deb3Absence = new DateFr(23,2,2019) ;
		DateFr fin3Absence = new DateFr(23,2,2019);
		Absence leMercrediCesLesEnfants = new Absence(deb3Absence,fin3Absence,"Enfants",mrRobert) ;
		leMercrediCesLesEnfants.setLeEtat("ATT");
		mrRobert.ajoutUneAbsence(leMercrediCesLesEnfants) ;	
	    DemandeAbsence troisDemande = new DemandeAbsence(leMercrediCesLesEnfants) ;
	    
	    // Le boss gère ses 2 salariés, Mr et Mme Robert
	    
	    theBigPatron.ajoutSalarieAManager(mrRobert);
		theBigPatron.ajoutSalarieAManager(mmeRobert);
		
	}

	@After
	public void tearDown() throws Exception {
	}

	@Test
	public void testDecideConges() {
				

		
		/*** Code à ajouter pour tester la méthode decideConges() de la classe manager ***/
		
		
		
		
	}

}

package bretagne;

import static org.junit.Assert.*;

import java.util.ArrayList;
import java.util.List;

import org.hamcrest.collection.IsEmptyCollection;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import static org.hamcrest.CoreMatchers.*;
import static org.hamcrest.MatcherAssert.assertThat;
import static org.hamcrest.collection.IsIterableContainingInAnyOrder.containsInAnyOrder;



public class TestSalarie {
	
	Salarie mrRobert  ;


	@Before
	public void setUp() throws Exception {
		
		mrRobert = new Salarie("Robert ENC","Robert", "Timo") ;

	}

	@After
	public void tearDown() throws Exception {
	}

	@Test
	public void testAjoutUneAbsence() {
		
		// je vais créer une nouvelle absence. peut être y a t'il un modèle ailleurs ?
	
			
		// je vais ajouter cette absence à Mr Robert
			
		
		// je vais tester que la collection d'absences de Mr robert contient l'absence ajoutée
			

		
	}
}

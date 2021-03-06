package aeroplan;

import static org.junit.Assert.*;

import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.TimeZone;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class EDCTest {

	private Mouvement mvtTest;	
	@Before
	public void setUp() throws Exception {
		Date dateD = null;
		Date dateA = null;
		Avion avion = new Avion("FGFKA", "A319");
		Aeroport aeroD = new Aeroport("LFBD", "BOD", "Bordeaux-M�rignac", "44-50N", "000-42W");
		Aeroport aeroA = new Aeroport("LFLL", "LYS", "Lyon-Saint-Exup�ry", "45-44N","005-05E");
		
		DateFormat dfm = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
		dfm.setTimeZone(TimeZone.getTimeZone("Europe/Paris"));
		try {
		dateD = dfm.parse("2013-07-17 18:30:00");
		dateA = dfm.parse("2013-07-17 19:45:00");
		}
		catch (ParseException e) {
			e.printStackTrace();
			}
				
		 mvtTest = new Mouvement(1221, "RLG", "7410", dateD, dateA, 75, avion, aeroD, aeroA);
	}

	@After
	public void tearDown() throws Exception {
	}
	
	@Test
	public void testAjouteRetardInitial() {
		TypeRetard leType = new TypeRetard(1, "AV", "Occupation des pistes");
		Retard unRetard = new Retard(1,"pluie au d�collage", leType, 50);
		
		mvtTest.ajouteRetard(unRetard);
		assertEquals("1er retard non ajout�", 1, mvtTest.getLesRetards().size());
	
		Retard premRetard = mvtTest.getLesRetards().get(0);
		assertEquals("1er retard non accessible", unRetard, premRetard);
	}
	
	

	@Test
	public void testAjouteRetardSuivant() {
		TypeRetard leType1 = new TypeRetard(1, "AV", "Occupation des pistes");
		TypeRetard leType2 = new TypeRetard(2, "EV", "Situation climatique");
		Retard unRetard = new Retard(1,"pluie au d�collage", leType1, 50);
		Retard autreRetard = new Retard(2,"Vent d�favorable", leType2, 20);
		
		mvtTest.ajouteRetard(unRetard);
		mvtTest.ajouteRetard(autreRetard);
		assertEquals("Retard suivant non ajout�", 2, mvtTest.getLesRetards().size());
	
		Retard retardSuiv = mvtTest.getLesRetards().get(1);
		assertEquals("Retard suivant non accessible", autreRetard, retardSuiv);
	}
	
	@Test
	public void testTotalRetard() {
		TypeRetard leType1 = new TypeRetard(1, "AV", "Occupation des pistes");
		TypeRetard leType2 = new TypeRetard(2, "EV", "Situation climatique");
		Retard unRetard = new Retard(1,"pluie au d�collage", leType1, 50);
		Retard autreRetard = new Retard(2,"Vent d�favorable", leType2, 70);
		
		assertEquals("initialisation incorrect", 0, mvtTest.retardTotal());
		mvtTest.ajouteRetard(unRetard);
		assertEquals("initialisation incorrect", 50, mvtTest.retardTotal());
		mvtTest.ajouteRetard(autreRetard);
		assertEquals("retard total erreur", 120, mvtTest.retardTotal());
		
		
		
		
		
	}
	

}

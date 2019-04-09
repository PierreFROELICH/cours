package aeroplan;

import static org.junit.Assert.*;

import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.TimeZone;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class TripTest {
	
	private ArrayList<Mouvement> lesMouvements;
	private Mouvement mvtTest ;

	@Before
	public void setUp() throws Exception {
		
		Date dateD = null;
		Date dateA = null;
		Avion avion = new Avion("FGFKA", "A319");
		Aeroport aeroD = new Aeroport("LFBD", "BOD", "Bordeaux-Mérignac", "44-50N", "000-42W");
		Aeroport aeroA = new Aeroport("LFLL", "LYS", "Lyon-Saint-Exupéry", "45-44N","005-05E");
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

		lesMouvements = new ArrayList<Mouvement>();
		lesMouvements.add(mvtTest) ;
	}

	@After
	public void tearDown() throws Exception {
	}

	@Test
	public void testTripReport() {
		TypeRetard leType = new TypeRetard(1, "AV", "Occupation des pistes");
		Retard unRetard = new Retard(1,"pluie au décollage", leType, 50,true);
		mvtTest.ajouteRetard(unRetard);
		TypeRetard leType2 = new TypeRetard(2, "EV", "Situation climatique");
		Retard autreRetard = new Retard(2,"Vent défavorable", leType2, 20,false);
		mvtTest.ajouteRetard(autreRetard);
		
		TypeRetard arrivee = new TypeRetard(3, "AP", "Piste pas prête");
		Retard troisiemeRetard = new Retard(3,"orage grelons", arrivee, 110,true);		
		mvtTest.ajouteRetard(troisiemeRetard);

		
		TripReport trip = new TripReport() ;
		trip.setMvtTest(mvtTest);
		trip.setLesMouvements(lesMouvements);
		assertEquals("Probleme cumul retard",50,trip.cumulRetard("LFBD"));
		assertEquals("Probleme cumul retard",110,trip.cumulRetard("LFLL"));
		
	}

}

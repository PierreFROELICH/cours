package aeroplan;
import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.TimeZone;

public class TripReport {
	
	private ArrayList<Mouvement> lesMouvements;
	private Mouvement mvtTest ;
	
	public ArrayList<Mouvement> getLesMouvements() {
		return lesMouvements;
	}


	public void setLesMouvements(ArrayList<Mouvement> lesMouvements) {
		this.lesMouvements = lesMouvements;
	}


	public Mouvement getMvtTest() {
		return mvtTest;
	}


	public void setMvtTest(Mouvement mvtTest) {
		this.mvtTest = mvtTest;
	}


	public void setup()
	{
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
	
	
	public void testRetards(){
		TypeRetard leType = new TypeRetard(1, "AV", "Occupation des pistes");
		Retard unRetard = new Retard(1,"pluie au décollage", leType, 50,true);
		
		mvtTest.ajouteRetard(unRetard);
		
		//TypeRetard leType1 = new TypeRetard(1, "AV", "Occupation des pistes");
		TypeRetard leType2 = new TypeRetard(2, "EV", "Situation climatique");
		//Retard un2Retard = new Retard(1,"pluie au décollage", leType1, 50);
		Retard autreRetard = new Retard(2,"Vent défavorable", leType2, 20);
		
		//mvtTest.ajouteRetard(un2Retard);
		mvtTest.ajouteRetard(autreRetard);


	}
	
	public int cumulRetard(String codeOaci)
	{
		int totalRetardAeroport = 0 ;

		for (Mouvement mouvementEntreAeroports:lesMouvements)
		{
			String typeRetard = null;

			if (mouvementEntreAeroports.getAeroportDepart().getOaci().equals(codeOaci))
			{
				typeRetard = "AV" ;
			}
			
			else 
			{
				if (mouvementEntreAeroports.getAeroportArrivee().getOaci().equals(codeOaci))
				{
					typeRetard = "AP" ;

				}

			}
				
			if (typeRetard != null)
			{
				totalRetardAeroport += mouvementEntreAeroports.dureeRetardResponsable(typeRetard) ;

			}
			
		}
		
		return totalRetardAeroport ;
	}
	
	
	
	

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		
		TripReport trip = new TripReport() ;
		trip.setup();
		trip.testRetards();
		
		
		int retard = trip.cumulRetard("LFBD") ;
		System.out.println("Le retard est de: "+retard);
		

	}

}

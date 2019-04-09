package aeroplan;
import java.util.ArrayList;
import java.util.Date;

public class Mouvement {
	private int id;
	private String codeVol;
	private String numeroVol;
	private Date dateHeureDepart;	//date et heure de depart prévues
	private Date dateHeureArrivee;	//date et heure d'arrivée prévues
	private int dureeVol ;	  // la durée du vol est exprimée en minutes
	private Avion avionUtilise;
	private Aeroport aeroportDepart;
	private Aeroport aeroportArrivee;
	private ArrayList<Retard> lesRetards;

	public ArrayList<Retard> getLesRetards() {
		return lesRetards;
	}

	public void setLesRetards(ArrayList<Retard> lesRetards) {
		this.lesRetards = lesRetards;
	}

	// constructeur qui valorise les attributs privés et instancie la collection lesRetards
	public Mouvement(int id, String codeVol, String numeroVol,
			Date dateHeureDepart, Date dateHeureArrivee,
			int dureeVol, Avion avionUtilise, Aeroport aeroportDepart,
			Aeroport aeroportArrivee) {
		this.id = id ;
		this.codeVol = codeVol;
		this.numeroVol = numeroVol ;
		this.dateHeureDepart = dateHeureDepart ;
		this.dateHeureArrivee = dateHeureArrivee;
		this.dureeVol = dureeVol ;
		this.avionUtilise = avionUtilise ;
		this.aeroportDepart = aeroportDepart ;
		this.aeroportArrivee = aeroportArrivee ;
		this.lesRetards = new ArrayList<Retard>();
}

	// retourne l’aéroport de départ
	public Aeroport getAeroportDepart() { return aeroportDepart; }

	// retourne l’aéroport d’arrivée
	public Aeroport getAeroportArrivee() { return aeroportArrivee; }

	// Ajoute un retard au Mouvement
	public void ajouteRetard(Retard r) { lesRetards.add(r); }

	// Calcule le retard total du mouvement
	public int retardTotal() {
		int res = 0;
		for(Retard r : lesRetards) {
			res += r.getDuree();
		}
		return res;
	}
	
	public int dureeRelle()
	{
		return 0 ;
	}

	public int dureeRetardResponsable(String codeSituation)
	{
		return 0 ; 
	}

}

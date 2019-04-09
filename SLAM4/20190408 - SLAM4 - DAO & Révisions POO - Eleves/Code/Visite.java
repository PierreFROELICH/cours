package visite;
public class Visite {
	
	private String dateVisite;
	private String prospecteur;
	
	// Constructeur qui initialise les deux attributs avec les deux paramètres
	public Visite(String pDateVisite, String pProspecteur) {
		this.dateVisite = pDateVisite ;
		this.prospecteur = pProspecteur ;
	}
	
	//constructeur qui initialise uniquement la date
	
	public Visite(String pDateVisite) {		
		this.dateVisite = pDateVisite ;	
		}  
	
	
	// renseigne l’attribut prospecteur
	
	public void setProspecteur(String pProspecteur) {	
		this.prospecteur = pProspecteur ;
		} 

}

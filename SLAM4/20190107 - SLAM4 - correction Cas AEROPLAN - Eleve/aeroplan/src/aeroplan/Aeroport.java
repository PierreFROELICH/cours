package aeroplan;
public class Aeroport {
	private String oaci;	//le code oaci identifie l’aéroport en tant que terrain d'aviation
	private String aita; //le code aita identifie l'aéroport en tant qu'aéroport commercial
	private String nom;
	private String latitude;
	private String longitude;
	
	// constructeur qui valorise les attributs privés
	public Aeroport(String oaci, String aita, String nom, String latitude, 
			String longitude) {
		this.oaci = oaci ;
		this.aita = aita ;
		this.nom = nom ;
		this.latitude = latitude ;
		this.longitude = longitude;
	
	}
	
	// retourne le code oaci
	public String getOaci() {
		return oaci ;
		}
}

package aeroplan;
public class Aeroport {
	private String oaci;	//le code oaci identifie l�a�roport en tant que terrain d'aviation
	private String aita; //le code aita identifie l'a�roport en tant qu'a�roport commercial
	private String nom;
	private String latitude;
	private String longitude;
	
	// constructeur qui valorise les attributs priv�s
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

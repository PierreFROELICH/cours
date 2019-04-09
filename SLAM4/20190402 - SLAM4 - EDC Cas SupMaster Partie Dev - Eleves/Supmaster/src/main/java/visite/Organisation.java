package visite;
import java.util.ArrayList;
public class Organisation {
	private String nom;
	private String adresse;
	private ArrayList<Visite> lesVisites;
	private Region laRegion;

	
	
	public Organisation(String pNom, String pAdresse, Region pRegion) {
		this.nom = pNom ;
		this.adresse = pAdresse ;
		this.laRegion = pRegion ;
}
	
public String getNom() {return nom;	}
	public String getAdresse() {return adresse;	}
	public ArrayList<Visite> getLesVisites() {	return lesVisites;	}
	public Region getLaRegion() {	return laRegion;	}
	


	public void ajoutVisite(Visite pLaVisite) {
		lesVisites.add(pLaVisite) ;	
		}


	
	@Override
	public String toString() {
		return "Organisation [nom=" + nom + ", adresse=" + adresse + ", lesVisites=" + lesVisites + ", laRegion="
				+ laRegion + "]";
	}
	
	
	
}

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
		lesVisites = new ArrayList<Visite>() ;
}
	
	public Organisation()
	{
		
	}
	
	
public void setNom(String nom) {
		this.nom = nom;
	}

	public void setAdresse(String adresse) {
		this.adresse = adresse;
	}

	public void setLesVisites(ArrayList<Visite> lesVisites) {
		this.lesVisites = lesVisites;
	}

	public void setLaRegion(Region laRegion) {
		this.laRegion = laRegion;
	}

public String getNom() {return nom;	}
	public String getAdresse() {return adresse;	}
	public ArrayList<Visite> getLesVisites() {	return lesVisites;	}
	public Region getLaRegion() {	return laRegion;	}
	
	/**
	public void ajoutVisite(Visite pLaVisite) {
	lesVisites.add(pLaVisite) ;	}
	***/

	public void ajoutVisite(Visite pVisite)
{
	String vLeNom ;
	// On récupère le nom du prospecteur
	vLeNom = this.laRegion.getLeEtablissement().getProspecteur() ;
	// On met à jour l’attribut Nom de l’objet pUneVisite
	pVisite.setProspecteur(vLeNom) ;
	// On ajoute la visite dans la collection des visites de l’organisation
	this.lesVisites.add(pVisite) ;
}

	
	@Override
	public String toString() {
		return "Organisation [nom=" + nom + ", adresse=" + adresse + ", lesVisites=" + lesVisites + ", laRegion="
				+ laRegion + "]";
	}
	
	
	
}

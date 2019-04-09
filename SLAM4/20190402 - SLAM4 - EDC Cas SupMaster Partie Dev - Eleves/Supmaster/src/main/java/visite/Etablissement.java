package visite;
import java.util.ArrayList;
public class Etablissement {
	private String code;
	private String adresse;
	private String prospecteur;
	private ArrayList<Region> lesRegions; // zone géographique couverte par l’établissement
	public Etablissement(String pCode, String pAdr, String pProspect) 
	{
		this.code = pCode;
		this.adresse = pAdr;
		this.prospecteur = pProspect ;
	}
	public String getCode() {		return code;	}
	public String getAdresse() {		return adresse;	}
	public String getProspecteur() {		return prospecteur;	}
	public ArrayList<Region> getLesRegions() {		return lesRegions;	}
}

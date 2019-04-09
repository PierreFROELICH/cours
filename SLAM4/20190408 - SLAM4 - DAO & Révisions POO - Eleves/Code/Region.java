package visite;
import java.util.ArrayList;
public class Region {
	private int numero;
	private String nom;


	// Etablissement de Supmaster couvrant la région
	private Etablissement leEtablissement;	

	// Collection des organisations prospectées ou susceptibles de l’être dans la région.
	private ArrayList <Organisation> lesOrganisations;
	
	
	public Region(int pNum, String pNom, Etablissement pEtablissement) 
	{
		this.numero = pNum ;
		this.nom = pNom ;
		this.leEtablissement = pEtablissement;
		this.lesOrganisations = new ArrayList<Organisation>();
	}
	public int getNumero() {
		return numero;
	}
	public String getNom() {
		return nom;
	}
	public Etablissement getLeEtablissement() {
		return leEtablissement;
	}
	public ArrayList<Organisation> getLesOrganisations() {
		return lesOrganisations;
	}
	public void ajoutOrganisation(Organisation pOrganisation) 
	{
	lesOrganisations.add(pOrganisation) ;
	}
	
	public float tauxVisite() 
	{
		int nbVisitees = 0 ;
	for (Organisation uneOrga : lesOrganisations) 
	{
			if (uneOrga.getLesVisites().size() > 0)
			{
				nbVisitees = nbVisitees + 1 ;
			}
	}
		return (float)nbVisitees / lesOrganisations.size() ;
	}

	
	
}

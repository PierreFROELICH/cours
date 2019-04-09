package bretagne;


import java.util.ArrayList;
import java.util.List;

public class Salarie {
    private String leMatricule;
    private String leNom;
    private String lePrenom;
    private List<Absence> listeAbsences = new ArrayList<Absence>();

    
    public Salarie(String unMatricule, String unNom, String unPrenom)
    {
    	this.leMatricule = unMatricule ;
    	this.leNom = unNom ;
    	this.lePrenom = unPrenom ;    	
    }
    
    
    public List<Absence> getListeAbsences() {
		return listeAbsences;
	}


	public void setListeAbsences(List<Absence> listeAbsences) {
		this.listeAbsences = listeAbsences;
	}


	public String getLeMatricule() {
		return leMatricule;
	}


	public void setLeMatricule(String leMatricule) {
		this.leMatricule = leMatricule;
	}


	public String getLeNom() {
		return leNom;
	}


	public void setLeNom(String leNom) {
		this.leNom = leNom;
	}


	public String getLePrenom() {
		return lePrenom;
	}


	public void setLePrenom(String lePrenom) {
		this.lePrenom = lePrenom;
	}
	
	public void ajoutUneAbsence(Absence absenceAAjouter) {
		// Ajoute une absence � la collection lesAbsences
		
	}
	

// Retourne la collection des absences en attente de traitement par le responsable (leEtat=ATT)

    
    public List<Absence> getAbsencesEnAttente() {
        // Code � impl�menter
    	
    	
    	// Return � changer !
    	return new ArrayList<Absence>();
    }

}


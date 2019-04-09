package aeroplan;

public class Retard {
	private int id ;
	private String commentaire;
	private TypeRetard type;
	private int duree;	//Durée du retard exprimée en minutes
	private boolean impliqueAeroport ;
	
	// constructeur qui valorise les attributs privés
	public Retard(int id, String commentaire, TypeRetard type, int duree) {
		this.id = id;
		this.commentaire = commentaire;
		this.type = type ;
		this.duree = duree;
		}
	
		
	public boolean getImpliqueAeroport() {
		

	}



	public Retard(int id, String commentaire, TypeRetard type, int duree, boolean impliqueAeroport) {
		super();
		this.id = id;
		this.commentaire = commentaire;
		this.type = type;
		this.duree = duree;
		this.impliqueAeroport = impliqueAeroport;
	}


	// retourne le type de retard
	public TypeRetard getType() {
		return type ;
	}

	// retourne la durée du retard
	public int getDuree() {
	return duree ;
	}

}
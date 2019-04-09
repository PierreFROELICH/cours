package aeroplan;

public class Avion {
	private String id ;
	private String modele ;
	private String numeroSerie ;
	private String codeInterne ;
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}
	public String getModele() {
		return modele;
	}
	public void setModele(String modele) {
		this.modele = modele;
	}
	public String getNumeroSerie() {
		return numeroSerie;
	}
	public void setNumeroSerie(String numeroSerie) {
		this.numeroSerie = numeroSerie;
	}
	public String getCodeInterne() {
		return codeInterne;
	}
	public void setCodeInterne(String codeInterne) {
		this.codeInterne = codeInterne;
	}
	public Avion(String id, String modele, String numeroSerie, String codeInterne) {
		super();
		this.id = id;
		this.modele = modele;
		this.numeroSerie = numeroSerie;
		this.codeInterne = codeInterne;
	}
	public Avion(String id, String modele) {
		super();
		this.id = id;
		this.modele = modele;
	}


}

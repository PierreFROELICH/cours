package aeroplan;

public class TypeRetard {
		private int id;
		private String codeSituation;  // AV :avant vol, EV : en vol, AP : après vol
		private String libelle;
		
		// constructeur qui valorise les attributs privés
		public TypeRetard(int id, String codeSituation, String libelle) {
			this.id = id ;
			this.codeSituation = codeSituation ;
			this.libelle = libelle ;
		
		}

		// retourne le code de la situation
		public String getCodeSituation() {
			return codeSituation;
		}


}

package MonPackage;

public class UtiliseCompteTer {

	public static void main(String[] args) {
		// Déclaration des variables isolées
		  double MtDec, SoldeS, DecouvertS ; 
		  int NumS;
		  String NomS;
		//Déclaration d'un compte 
       Compte CptDurand;
      // Instanciation du compte
       NomS = Saisie.lire_String("Quel est le nom du client ?");
       NumS = Saisie.lire_int("Quel est le numéro du compte  ?");
       SoldeS = Saisie.lire_double("Quel est le solde du compte  ?");	
       DecouvertS = Saisie.lire_double("Quel est le montant du découvert autorisé du compte  ?");
	   CptDurand = new Compte ( NomS, NumS, SoldeS, DecouvertS);
       // Manipulation du compte
       MtDec = CptDurand . getDecouvert();
		 System.out.println("Votre découvert autorisé est de "+MtDec+"  €");
       
	}

}

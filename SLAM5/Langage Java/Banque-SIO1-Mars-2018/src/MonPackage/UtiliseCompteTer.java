package MonPackage;

public class UtiliseCompteTer {

	public static void main(String[] args) {
		// D�claration des variables isol�es
		  double MtDec, SoldeS, DecouvertS ; 
		  int NumS;
		  String NomS;
		//D�claration d'un compte 
       Compte CptDurand;
      // Instanciation du compte
       NomS = Saisie.lire_String("Quel est le nom du client ?");
       NumS = Saisie.lire_int("Quel est le num�ro du compte  ?");
       SoldeS = Saisie.lire_double("Quel est le solde du compte  ?");	
       DecouvertS = Saisie.lire_double("Quel est le montant du d�couvert autoris� du compte  ?");
	   CptDurand = new Compte ( NomS, NumS, SoldeS, DecouvertS);
       // Manipulation du compte
       MtDec = CptDurand . getDecouvert();
		 System.out.println("Votre d�couvert autoris� est de "+MtDec+"  �");
       
	}

}

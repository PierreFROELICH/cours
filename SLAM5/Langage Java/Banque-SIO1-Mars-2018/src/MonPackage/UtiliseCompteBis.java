package MonPackage;

public class UtiliseCompteBis {

	public static void main(String[] args)
	{   // D�claration des variables isol�es
		  double MtDec; 
		  String NomS;
		  int NumS;
		//D�claration d'un compte 
         Compte CptDurand;
        // Instanciation du compte
         CptDurand = new Compte();
         // Manipulation du compte
        CptDurand.Consulte();
        CptDurand.Retirer(500);
        CptDurand.Consulte();
        MtDec = CptDurand . getDecouvert();
		System.out.println("Votre d�couvert autoris� est de "+MtDec+"  �");
		CptDurand.Deposer(5000);
		 CptDurand.Consulte();
		 
		//D�claration d'un compte 
         Compte CptRayane;
        // Instanciation du compte
         NomS = Saisie.lire_String("Quel est le nom du client ?");
         NumS = Saisie.lire_int("Quel est le num�ro du compte  ?");
         CptRayane = new Compte(NomS,NumS);
         // Manipulation du compte
         CptRayane. Consulte();
         
         
         
         
         
         
         
         
         
         
         
	}

}

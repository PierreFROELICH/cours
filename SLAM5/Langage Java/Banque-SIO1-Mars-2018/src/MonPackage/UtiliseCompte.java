package MonPackage;

public class UtiliseCompte {

	public static void main(String[] args)
	
	{  
		// D�claration des variables isol�es
		   double MtDec;
		
		// D�claration un objet de type Compte 
		  Compte CptDupond;
		  
        // Cr�er le compte CptDupond
		  CptDupond =  new  Compte();
		  
		  /* Initialisation des attributs du compte CptDupond
		  CptDupond.Init("Dupond", 1234, 450);
		  
		 // Agir sur l'objet CptDupond
		  
		  CptDupond. Consulte();
		  CptDupond.Deposer(500);
		  CptDupond. Consulte();
		  CptDupond.Retirer(120);
		  CptDupond. Consulte();
		  
		  
		  // D�claration un objet de type Compte 
		  Compte Cptmartin;
        // Cr�er le compte CptDupond
		  Cptmartin =  new  Compte();
		  
		  // Initialisation des attributs du compte CptDupond
		  Cptmartin.Init("Martin", 4567, 150);
		  
		  Cptmartin.Deposer(500);
		  Cptmartin.Consulte();
		  Cptmartin.Retirer(1000);
		  Cptmartin.Consulte();
		  
		  CptDupond.Consulte();*/
		  
		  
		 /* Cr�ation de l'onjet Malher
		    Compte CptMalher;
		   // Instanciation de l'objet Malher
		  CptMalher = new Compte () ;
		  
		  // Affecter les valeurs � CPtMalher
		  CptMalher.Init("Malher",586,100,-150);
			// Agir sur le compte de Malher
				  
		  CptMalher.Consulte();
		  CptMalher.Retirer(200);
		  CptMalher.Consulte();
		  CptMalher.Retirer(300);
		  CptMalher.Consulte();
		  CptMalher.Retirer(1300);
		  CptMalher.Consulte();
		  CptMalher.Deposer(10000);
		  CptMalher.Consulte();
		  CptMalher.Retirer(1300);
		  CptMalher.Consulte();
		  CptMalher.Retirer(20000);
		  CptMalher.Consulte();
		 // System.out.println("Votre d�couvert autoris� est de "+CptMalher.Decouvert+"  �");*/
		
		  
		  // Cr�ation du compte Durand
		    Compte CptDurand ;
		    CptDurand = new Compte () ;
		    CptDurand.Init("Durand", 1024, 450, -2500);
		    CptDurand.Consulte();
		    MtDec = CptDurand . getDecouvert();
		    System.out.println("Votre d�couvert autoris� est de "+MtDec+"  �");
		     CptDurand.setDecouvert(0);
		     MtDec = CptDurand . getDecouvert();
			    System.out.println("Votre d�couvert autoris� est de "+MtDec+"  �");
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
	}
	
	

}

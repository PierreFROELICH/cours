package MonPackage;

public class Compte_Courant extends Compte
{
	/ Déclaration des attributs
	 private  double decouvert;
	 
// déclaration du constructeur
	  public Compte_Courant (int no, String nm, double s, double d)
	  {
		  super(no,nm,s);
		  decouvert = d ;
	  }
 // déclaration des autres méthodes
		  public void Consulte ()
			 {
				 System.out.println(" votre découvert autorisé est de"  + decouvert + "€" );
			 }		    
		 
		  public void  Retirer( double SommeBis)	
			 {
				  if( (Solde-SommeBis) <decouvert )
				  {
					  System.out.println(" Opération refusée");
				  }
			
				  else  Solde = Solde - SommeBis;
				  
			 }
}

package MonPackage;

public class Compte_Courant extends Compte
{
	/ D�claration des attributs
	 private  double decouvert;
	 
// d�claration du constructeur
	  public Compte_Courant (int no, String nm, double s, double d)
	  {
		  super(no,nm,s);
		  decouvert = d ;
	  }
 // d�claration des autres m�thodes
		  public void Consulte ()
			 {
				 System.out.println(" votre d�couvert autoris� est de"  + decouvert + "�" );
			 }		    
		 
		  public void  Retirer( double SommeBis)	
			 {
				  if( (Solde-SommeBis) <decouvert )
				  {
					  System.out.println(" Op�ration refus�e");
				  }
			
				  else  Solde = Solde - SommeBis;
				  
			 }
}

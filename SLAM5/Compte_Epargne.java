package MonPackage;

public class Compte_Epargne extends Compte
{
  // D�claration des attributs
	 private  double taux;
	 
 // d�claration du constructeur
	  public Compte_Epargne (int no, String nm, double s, double t)
	  {
		  super(no,nm,s);
		  taux = t ;
	  }
  // d�claration des autres m�thodes
		  public void Consulte ()
			 {
				 System.out.println(" votre taux de r�mun�ration est de"  + taux+ "%" );
			 }		    
		 
		  public void mise_a_jour ()
			 {
				taux = taux + (taux * 0.1);
			 }
	  
}


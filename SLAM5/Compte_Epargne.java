package MonPackage;

public class Compte_Epargne extends Compte
{
  // Déclaration des attributs
	 private  double taux;
	 
 // déclaration du constructeur
	  public Compte_Epargne (int no, String nm, double s, double t)
	  {
		  super(no,nm,s);
		  taux = t ;
	  }
  // déclaration des autres méthodes
		  public void Consulte ()
			 {
				 System.out.println(" votre taux de rémunération est de"  + taux+ "%" );
			 }		    
		 
		  public void mise_a_jour ()
			 {
				taux = taux + (taux * 0.1);
			 }
	  
}


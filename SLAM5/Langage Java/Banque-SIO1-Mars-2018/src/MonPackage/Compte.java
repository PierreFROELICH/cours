package MonPackage;

public class Compte 
{
  // Déclaration des attributs de la classe
	private static  String Nom;
	private static  int Num;
	private  static double Solde;
	private  static  double Decouvert;
	 
	 // Déclaration des méthodes de la classe
	 // Déclaration du constructeur de la classe 
	public Compte ()
	{
		Nom= Saisie.lire_String("Quel est le nom de votre client ?");
		Num=  Saisie.lire_int("Quel est le numéro du compte");
	   Solde = Saisie.lire_double("Quel est le solde intial du compte");
	   Decouvert = Saisie.lire_double("Quel est le montant du découvert autorisé");
	}
	
	// Surcharge du cosntructeur Question 9
	
	public Compte (String NomSaisi, int NumSaisi)
	{
		Nom = NomSaisi;
		Num = NumSaisi;
		Solde = 0;
		Decouvert = 0;
		
	}
	 
	 // Définition des méthodes accesseurs
	 
	  public String getNom()
	  {
		  return Nom;
	  }
	 
	  public int getNum()
	  {
		  return Num;
	  }
	  
	  public double getSolde()
	  {
		  return Solde;
	  }
	  
	  public double getDecouvert()
	  {
		  return Decouvert;
	  }
	  
	   public void setNom(String NomSaisi)
	   {
		   Nom = NomSaisi;
	   }
	  
	  
	   public void setNum (int NumSaisi)
	   {
		   Num = NumSaisi;
	   }
	  
	   public void setSolde (double SoldeSaisi)
	   {
		   Solde = SoldeSaisi;
	   }
	  
	   public void setDecouvert (double DecouvertSaisi)
	   {
		  Decouvert = DecouvertSaisi;
	   }
	  
	  
	    
	 
	 public void Consulte ()
	 {
		 System.out.println(" Votre solde est de " +Solde + " €" );
	 }		 
		 
	 public void  Deposer ( double SommeBis)	
	 {
		 Solde = Solde + SommeBis;
	 }
		 
	 public void  Retirer( double SommeBis)	
	 {
		  if( (Solde-SommeBis) < Decouvert )
		  {
			  System.out.println(" Opération refusée");
		  }
	
		  else 
		  {
			  Solde = Solde - SommeBis;
		  }
	 }	 
		 
 
}  











package MonPackage;

public class Compte 
{
  // D�claration des attributs de la classe
	private static  String Nom;
	private static  int Num;
	private  static double Solde;
	private  static  double Decouvert;
	 
	 // D�claration des m�thodes de la classe
	 // D�claration du constructeur de la classe 
	public Compte ()
	{
		Nom= Saisie.lire_String("Quel est le nom de votre client ?");
		Num=  Saisie.lire_int("Quel est le num�ro du compte");
	   Solde = Saisie.lire_double("Quel est le solde intial du compte");
	   Decouvert = Saisie.lire_double("Quel est le montant du d�couvert autoris�");
	}
	
	// Surcharge du cosntructeur Question 9
	
	public Compte (String NomSaisi, int NumSaisi)
	{
		Nom = NomSaisi;
		Num = NumSaisi;
		Solde = 0;
		Decouvert = 0;
		
	}
	 
	 // D�finition des m�thodes accesseurs
	 
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
		 System.out.println(" Votre solde est de " +Solde + " �" );
	 }		 
		 
	 public void  Deposer ( double SommeBis)	
	 {
		 Solde = Solde + SommeBis;
	 }
		 
	 public void  Retirer( double SommeBis)	
	 {
		  if( (Solde-SommeBis) < Decouvert )
		  {
			  System.out.println(" Op�ration refus�e");
		  }
	
		  else 
		  {
			  Solde = Solde - SommeBis;
		  }
	 }	 
		 
 
}  











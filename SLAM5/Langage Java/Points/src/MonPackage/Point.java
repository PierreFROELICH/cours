package MonPackage;

public class Point 
{
	private int x;
	private int y;
	
	public Point()
	{
		x = Saisie.lire_int("Quelle valeur voulez vous donner a x");
		y = Saisie.lire_int("Quelle valeur voulez vous donner a y");
	}
	  
	public int getx()
	{
		return x;
	}
	
		public int gety()
	{
		return y;
	}
		
	public void setx(int NouveauX)
	{
		x=NouveauX;
	}
	
	public void sety(int NouveauY)
	{
		y=NouveauY;
	}
	
	public void affich()
	{
		System.out.println("La valeur de x est: " + x + " La valeur de y est: " + y);
	}
}

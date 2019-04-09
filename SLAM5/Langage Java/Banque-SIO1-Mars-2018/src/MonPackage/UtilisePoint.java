package MonPackage;


public class UtilisePoint
{
	public static void main(String Args[])
	{
		int n;
		n = Saisie.lire_int("Combiens de points voulez vous manipuler?");
		
		CollectionPoint Coll = new CollectionPoint();
		
		Coll.ajouteobjet(n);
		Coll.affichtout();
		Coll.TestVide();
		//Coll.affichpositif();
		Coll.ModifCoordo();
		Coll.affichtout();
		Coll.AjouteUnPoint();
		Coll.affichtout();
		Coll.ComptePoints();
		Coll.VideCollection();
		//Coll.affichtout();
	}
} 
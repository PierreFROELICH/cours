package MonPackage;

import java.util.*;
import java.util.ArrayList;

public class CollectionPoint
{
	private ArrayList<Point>  CollecPoint;
	private int nbr;
	
	/*Constructeur permettant d'instancier la collection d'objet
	 et d'iniatialiser la variable nbr*/
	public CollectionPoint()
	{
	
     CollecPoint  = new ArrayList<Point>();
		nbr = 0;
		
	}
	/*Methode pour ajouter des objets dans la collection*/
	public void ajouteobjet(int n)
	{
		for(int i=0;i<n;i++)
		{
			Point PP = new Point();
			CollecPoint.add(PP);
		}
	}
	
	public void affichtout()
	{
		System.out.println("Voici les points: ");
		ListIterator it = CollecPoint.listIterator();
		
		while(it.hasNext())
		{
			Object Obj = it.next();
			Point PP = (Point) Obj;
			PP.affich();
		}
		
	}
	
	public void affichpositif()
	{
		int n=0, xbis, ybis;
		
		System.out.println("Voici les point de coordonnees positives: ");
		ListIterator it = CollecPoint.listIterator();
		
		while(it.hasNext())
		{
			Object Obj = it.next();
			Point PP = (Point) Obj;
			xbis = PP.getx();
			ybis = PP.gety();
			if((ybis >0) && (xbis>0))
			{
			PP.affich();
			n = n+1;
			}
		}
		System.out.println("Il y a " + n + " points positifs");
	}
	
	public void ModifCoordo()
	{
		int n=0, xbis, ybis, taille;
		taille = CollecPoint.size();
		 System.out.println("Le nombre d'objets présents dans la collection est "+taille);
		System.out.println();
		System.out.println("Voici les points de coordonnees modifées: ");
       ListIterator it = CollecPoint.listIterator();
		
		while(it.hasNext())
		{
			Object Obj = it.next();
			Point PP = (Point) Obj;
			xbis = (PP.getx())*10;
			ybis =( PP.gety())*10;
			PP.setx(xbis);;
			PP.sety(ybis);
			CollecPoint.set(n, PP);
			n = n+1;
			}
		}
		
		
	public void AjouteUnPoint()
	{

		Point PP = new Point();
		CollecPoint.add(PP);
		}
		
		
	public void ComptePoints()
	{

		int Taille;
		Taille = CollecPoint.size();
		System.out.println("Il y a "+ Taille + " points dans la collection");
		}
		
		
		public void VideCollection()
		{
			int I, Nombre;
			Nombre = CollecPoint.size();
			for (I=0; I< Nombre; I++)
			{
				CollecPoint = null;
			}
		}
		
		public void  TestVide()
		{ 
			boolean Test;
			Test = CollecPoint.isEmpty();
			if(Test==true) System.out.println("Collection vide"); else System.out.println("Collection non  vide"); 
		}
		
			
	 
		
		
		
		
			
			
			
			
	}
		
	
	
	


package MonPackage;

public class Comptage
{

	public static void main(String[] args)
	
	{
		
		int N, I, Save, J, Valeur;
		int Tab[], Compteur[];
		N = Saisie.lire_int("Quelle est la taille du vecteur ?");
		
		Tab = new int[N]; 
		Compteur = new int[N];
		for(I=0;I<N;I++)
		{
			Tab[I] = Saisie.lire_int("Quelle est la valeur de la case ?");
		}
// Tableau avant le tri
		
		
		for(I=0;I<N;I++)
		{
			System.out.print(Tab[I]+"   ") ;
		}	
		
		
//Création du tableau des compteurs	
		for(I=0;I<N;I++)
		{
			Compteur[I] = 0;
		}	
	I =0;	
	while(I < N-1)	
	{
		J = I +1;
		while (J <= N-1)
		{
			
			if( Tab[I] > Tab [J] ) Compteur[I] ++;
			else Compteur[J] ++;
			J++;
		}
		I++;
	}

	
			
// 	Tri du tableau
		Valeur = 0;
		I = 0;
		while ( Valeur < N-1 )
		{
		
			J = I;
			while ( Valeur != Compteur[J])
			{
			   J++;
		     }
			
			Save = Tab[I];
			Tab[I] = Tab[J];
			Tab[J] = Save ;
			
			Save = Compteur[I];
			Compteur[I] = Compteur[J];
			Compteur[J] = Save ;
			Valeur ++;
			I++;
		}
			
		
		// Tableau après le tri
		
		System.out.println();
		System.out.println();
		
				for(I=0;I<N;I++)
				{
					System.out.print(Tab[I]+"   ") ;
				}	
						
				
				
				
			}
		
		
}	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		


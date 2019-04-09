package MonPackage;

public class Selection
{

	public static void main(String[] args) 
	{
		int N, I, J, Petit,Position;
		int Tab[];
		 N = Saisie.lire_int("Quelle est la taille du vecteur ?");
		Tab = new int[N]; 
		for(I=0;I<N;I++)
		{
			Tab[I] = Saisie.lire_int("Quelle est la valeur de la case ?");
		}
// Tableau avant le tri
		
		
		for(I=0;I<N;I++)
		{
			System.out.print(Tab[I]+"   ") ;
		}	
		
// 	Tri du tableau
		I = 0;
		while ( I< N-1)
		{
			Petit = Tab[I];
			Position = I;
			J = I +1;
			while(J<=N-1)
			{
				if(Tab[J] < Petit )
				{
					Petit = Tab[J];
					Position = J;		
				}
				J++;
			}
			Tab[Position ] =  Tab[I];
			Tab[I] = Petit;I++;
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



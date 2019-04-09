package MonPackage;

public class Bulle 
{

	public static void main(String[] args)
	{
	
		int N, I, Sauve, NBIS;
		int Tab[];
		N = Saisie.lire_int("Quelle est la taille du vecteur ?");
		NBIS=N;
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
		
		while ( N > 1)
		{
			I = 0;
			while(I < N-1) 
			{
				if(Tab[I] > Tab[I+1] )
				{
					Sauve = Tab[I];	
					Tab[I] = Tab[I+1];	
					Tab[I+1] = Sauve;
							
				}
				I++;
			}
			N--;
		}
		
		// Tableau après le tri
		
		System.out.println();
		System.out.println();
		
				for(I=0;I<NBIS;I++)
				{
					System.out.print(Tab[I]+"   ") ;
				}	
						
				
				
				
			}
		
		
		
		
		
		
	



		
		
		
		
		
		
		
	}



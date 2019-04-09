package MonPackage;

public class Transposition {
	public static void main(String[] args)
	{
		int i,n,j,sav;
		int tab[];
		n = Saisie.lire_int("Quelle est la taille du vecteur ?");
		
		tab = new int[n];
		for(i=0;i<n;i++)
		{
			tab[i] = Saisie.lire_int("Quelle est la valeur de la case ?");
		}
		// Tableau avant le tri
				for(i=0;i<n;i++)
				{
					System.out.print(tab[i]+"   ") ;
				}	
		//traitement
		i=0;
		while (i<n-1)
		{
			if (tab[i]>tab[i+1]) {
				sav= tab[i];
				tab[i]=tab[i+1];
				tab[i+1]=sav;
			// retour arrière pour vérifier l'ordre initial
			 j=i-1;
				 while (j >=0){
				  if (tab[j] >tab[j+1]) 
				  {
					sav = tab[j];
					tab[j] =tab[j+1];
					tab[j+1] = sav;
				  }
				  j=j-1;
				  }
				 }
			i=i +1;
			}
		System.out.println();
		System.out.println();
		
		
				for(i=0;i<n;i++)
				{
					System.out.print(tab[i]+"   ") ;
				}	
	}
	
	}


		
	


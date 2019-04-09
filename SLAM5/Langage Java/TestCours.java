package Package;


import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class TestCours {

	public static void main(String[] args) throws IOException 
	{
		 int i;
		// Création du fichier Texte Alphabet
		
		 FileWriter Essai = new FileWriter("Alphabet.txt");
		 for (i = 65; i<91; i++ )
		 {
			 Essai.write((char) i);
		 }
		
		  Essai.close();
		  
		  // Lire le fichier Alphabet.txt
		   int Lect;
		  FileReader Text = new FileReader( "Alphabet.txt");
		    do
		    {
		    	Lect = Text.read();
		    	if(Lect != -1) System.out.print((char)(Lect));
		    }
		    	
		    while( Lect !=-1);
		    Text.close(); 
		    }
		    	
		
	}



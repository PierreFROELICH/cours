package MonPackage;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class CopierSansBlanc {
	public void copier(String source, String destination) throws IOException {
		char[] buffer = new char[512];
		BufferedReader reader = new BufferedReader(
				new FileReader(source));
		BufferedWriter writer = new BufferedWriter(
				new FileWriter(destination));
		try {
			int clu;
			while ((clu = reader.read(buffer)) != -1) {
				for(int i=0; i<clu; i++) {
					if(Character.isWhitespace(buffer[i]))
						buffer[i] = '_';
				}
				writer.write(buffer, 0, clu);
			}
		}
		finally {
			reader.close();
			writer.close();
		}
	}
	public static void main(String[] args) throws IOException {
		CopierSansBlanc csb = new CopierSansBlanc();
		csb.copier("A.txt", "B.txt");
	}

}

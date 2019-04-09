package bretagne;

import java.util.ArrayList;
import java.util.List;

public class Manager extends Salarie implements Management {

	private List<Salarie> listeSalaries;
	
	
	
	public Manager(String unMatricule, String unNom, String unPrenom, List<Salarie> listeSalaries) {
		super(unMatricule, unNom, unPrenom);
		this.listeSalaries = listeSalaries;
	}

	public Manager(String unMatricule, String unNom, String unPrenom) {
		super(unMatricule, unNom, unPrenom);
		this.listeSalaries = new ArrayList<>();
	}


	public List<Salarie> getListeSalaries() {
		return listeSalaries;
	}

	public void setListeSalaries(List<Salarie> listeSalaries) {
		this.listeSalaries = listeSalaries;
	}
	
	
	public void ajoutSalarieAManager(Salarie nouveauSalarieAManager) {
		
		// Ajoute un Salarie à la liste de salariés managés par le manager
		
		listeSalaries.add(nouveauSalarieAManager) ;
		
	}
	

	@Override
	public void decideConges(List<Salarie> salaries,String decision, String motif ) {
		// TODO Auto-generated method stub
		
		

	}

}

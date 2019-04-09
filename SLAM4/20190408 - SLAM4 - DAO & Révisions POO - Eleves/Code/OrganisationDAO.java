package visite;

import java.util.List;

public interface OrganisationDAO {
	
	public List<Organisation> trouveToutesOrga() ;
	
	public List<Organisation> chercheOrgaParMotClef(String motClef) ;
	
	public void insert(Organisation uneOrga) ;

}

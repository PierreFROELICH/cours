package visite;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

public class OrganisationDAOImpl implements OrganisationDAO {

	static {
		try {
			   Class.forName("net.sourceforge.jtds.jdbc.Driver");
		} catch (ClassNotFoundException ex) {
		      System.err.println("Probleme Jtds");
		      System.exit(1);
		}
		}
	
	private Connection getConnection() throws SQLException {
		return DriverManager.getConnection(
		        "jdbc:jtds:sqlserver://SQLSRV2:1433;databaseName=TEST;user=test;password=test");
		}

		private void closeConnection(Connection connection) {
		if (connection == null)
		return;
		try {
		connection.close();
		} catch (SQLException ex) {
		}
		}
	
	
	@Override
	public List<Organisation> trouveToutesOrga() {
		// TODO Auto-generated method stub
		
		List<Organisation> listeOrga = new ArrayList<>();
		String sql = "select * from SUPMASTER.ORGANISATION";
		Connection connection = null;
		try {
		connection = getConnection();
		PreparedStatement statement = connection.prepareStatement(sql);
		ResultSet resultSet = statement.executeQuery();
		while (resultSet.next()) {
		Organisation uneOrga = new Organisation();
		uneOrga.setNom(resultSet.getString("NOM_ORGANISATION"));
		uneOrga.setAdresse(resultSet.getString("ADRESSE_ORGANISATION"));		
		listeOrga.add(uneOrga);
		}
		} catch (SQLException ex) {
		ex.printStackTrace();
		} finally {
		closeConnection(connection);
		}
		return listeOrga;
	}

	@Override
	public List<Organisation> chercheOrgaParMotClef(String motClef) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public void insert(Organisation uneOrga) {
		// TODO Auto-generated method stub
		Connection connection = null;
		try {
		connection = getConnection();
		Statement statement = connection.createStatement();
        int i = statement.executeUpdate("INSERT INTO SUPMASTER.ORGANISATION (NOM_ORGANISATION,ADRESSE_ORGANISATION) VALUES('"
                + uneOrga.getNom() + "','" 
                + uneOrga.getAdresse() +  "')" );
		}
	 catch (SQLException ex) {
	ex.printStackTrace();
	} finally {
	closeConnection(connection);
	}
		

	}

}

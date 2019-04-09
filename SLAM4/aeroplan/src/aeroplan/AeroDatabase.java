
package aeroplan;
import java.sql.Connection;

import java.sql.DriverManager;

import java.sql.SQLException;



public class AeroDatabase {
	private Connection dbConnection;
	 //private static String dbURL = "jdbc:sqlserver://MUNIVIE\\MUNIVIE:1433;databaseName=AEROPLAN;user=ADMINSIO;password=ADMINSIO";
	 private static String dbURL = "jdbc:sqlserver://SQLSRV2:1433;databaseName=AEROPLAN;user=SQLTROBERT;password=TEST";

	 
	
	  public void getDBConnection() throws ClassNotFoundException, SQLException {
	
	   Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");
	
	    dbConnection =  DriverManager.getConnection(dbURL); 
	
	  }

	 
	
	  public int executeQuery(String query) throws ClassNotFoundException, SQLException {
	
	    return dbConnection.createStatement().executeUpdate(query);
	
	  }

}

package aeroplan;
import java.awt.Container;
	import java.awt.FlowLayout;
	import java.awt.GridLayout;
	import java.awt.event.ActionEvent;
	import java.awt.event.ActionListener;
	import java.awt.event.WindowAdapter;
	import java.awt.event.WindowEvent;
	import java.sql.Connection;
	import java.sql.DriverManager;
	import java.sql.ResultSet;
	import java.sql.SQLException;
	import java.sql.Statement;
	import java.util.Vector;

	import javax.swing.JButton;
	import javax.swing.JFrame;
	import javax.swing.JList;
	import javax.swing.JPanel;
	import javax.swing.JScrollPane;
	import javax.swing.JTextArea;
	import javax.swing.JTextField;
	
public class MouvementAeroport  extends JFrame{
	
	  private JButton getAeroportDepartButton, getAeroportArriveeButton, insertMouvement,
	  updateMouvement;
	  
	  //private static String dbURL = "jdbc:sqlserver://MUNIVIE\\MUNIVIE:1433;databaseName=AEROPLAN;user=ADMINSIO;password=ADMINSIO";
		 private static String dbURL = "jdbc:sqlserver://SQLSRV2:1433;databaseName=AEROPLAN;user=SQLTROBERT;password=TEST";

	  
	  private JList aeroportDepartList, aeroportArriveeList;
 
	  private JTextField idAvion, numeroVol, distance, nombrePassagers, idAeroportDepart, idAeroportArrivee;

	  private JTextArea errorText;

	  private Connection connection;

	  private Statement statement;

	  private ResultSet rs;

	  public MouvementAeroport() {
	    try {
	    //Class.forName("org.apache.derby.jdbc.EmbeddedDriver").newInstance();
		Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");


	    } catch (Exception e) {
	      System.err.println("Impossible de localiser et de charger le Driver SQL Server");
	      System.exit(1);
	    }
	  }

	  private void loadAeroport() {
	    Vector v = new Vector();
	    try {
	      rs = statement.executeQuery("SELECT * FROM AEROPORT");

	      while (rs.next()) {
	        v.addElement(rs.getString("OACI"));
	      }
	    } catch (SQLException e) {
	      displaySQLErrors(e);
	    }
	    aeroportDepartList.setListData(v);
	    aeroportArriveeList.setListData(v);
	  }

	  private void buildGUI() {
	    Container c = getContentPane();
	    c.setLayout(new FlowLayout());

	    aeroportDepartList = new JList();
	    aeroportArriveeList = new JList();

	    loadAeroport();
	    aeroportDepartList.setVisibleRowCount(4);
	    aeroportArriveeList.setVisibleRowCount(4);
	    
	    JScrollPane aeroportDepartListScrollPane = new JScrollPane(
	    		aeroportDepartList);
	    JScrollPane aeroportArriveeListScrollPane = new JScrollPane(
	    		aeroportArriveeList);


	    //Do Get Account Button
	    getAeroportDepartButton = new JButton("Récupère les aéroports de départ");
	    getAeroportDepartButton.addActionListener(new ActionListener() {
	      public void actionPerformed(ActionEvent e) {
	        try {
	            rs = statement.executeQuery("SELECT * FROM AEROPORT");

	          while (rs.next()) {

	            if (rs.getString("OACI").equals(
	            		aeroportDepartList.getSelectedValue()))
	            {
	            	idAeroportDepart.setText(rs.getString("OACI"));
	            
	                break;
	            }
	            
	          }

	     
	            
	          
	        } catch (SQLException selectException) {
	          displaySQLErrors(selectException);
	        }
	      }
	    });

	    //Do Insert Account Button
	  

	    JPanel first = new JPanel(new GridLayout(5, 1));
	    first.add(aeroportDepartListScrollPane);
	    first.add(aeroportArriveeListScrollPane);
	    first.add(getAeroportDepartButton);
	    
		    
	    errorText = new JTextArea(5, 15);
	    errorText.setEditable(false);



	    JPanel third = new JPanel();
	    third.add(new JScrollPane(errorText));

	    

	    c.add(first);
	    c.add(third);
	    
	   	    setSize(500, 500);
	    setVisible(true);
	  }

	  public void connectToDB() {
	    try {
	      connection = DriverManager.getConnection(dbURL); 
	      
		
	      statement = connection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
	     
	    } catch (SQLException connectException) {
	      System.out.println(connectException.getMessage());
	      System.out.println(connectException.getSQLState());
	      System.out.println(connectException.getErrorCode());
	      System.exit(1);
	    }
	  }

	  private void displaySQLErrors(SQLException e) {
	    errorText.append("SQLException: " + e.getMessage() + "\n");
	    errorText.append("SQLState:     " + e.getSQLState() + "\n");
	    errorText.append("VendorError:  " + e.getErrorCode() + "\n");
	  }

	  private void init() {
	    connectToDB();
	  }

	  public static void main(String[] args) {
		  MouvementAeroport mouvementsAeroports = new MouvementAeroport();

	    mouvementsAeroports.addWindowListener(new WindowAdapter() {
	      public void windowClosing(WindowEvent e) {
	        System.exit(0);
	      }
	    });

	    mouvementsAeroports.init();
	    mouvementsAeroports.buildGUI();
	  }
	}





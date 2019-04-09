package visite;

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
import javax.swing.JLabel;
import javax.swing.JList;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;

public class SauveVisite extends JFrame {
	
	private JButton okVisite;
	
	 private JList regionList, organisationList;
	 private JTextArea errorText;
	 
	 private JLabel regionText, organisationTexte, dateVisite,   nomVisiteur;
	 private JTextField dateInput, nomInput ;

	
	 private static String dbURL = "jdbc:jtds:sqlserver://SQLSRV2:1433;databaseName=TEST;user=test;password=test";
	 private Connection connection;

	 private Statement statement;

	 private ResultSet rs;
	  
	 private void displaySQLErrors(SQLException e) {
		 errorText.append("SQLException: " + e.getMessage() + "\n");
		 errorText.append("SQLState:     " + e.getSQLState() + "\n");
		 errorText.append("VendorError:  " + e.getErrorCode() + "\n");
		  }
	
	 private void loadRegion() {
		    Vector v = new Vector();
		    try {
		      rs = statement.executeQuery("SELECT * FROM SUPMASTER.ETABLISSEMENT");

		      while (rs.next()) {
		        v.addElement(rs.getString("LIB_ETABLISSEMENT"));
		      }
		    } catch (SQLException e) {
		      displaySQLErrors(e);
		    }
		    regionList.setListData(v);
		  }
	 
	 private void loadOrganisation() {
		    Vector v = new Vector();
		    try {
		      rs = statement.executeQuery("SELECT * FROM SUPMASTER.ORGANISATION");

		      while (rs.next()) {
		        v.addElement(rs.getString("NOM_ORGANISATION"));
		      }
		    } catch (SQLException e) {
		      displaySQLErrors(e);
		    }
		    organisationList.setListData(v);
		  }
	 
	  public void connectToDB() {
		    try {
		     // connection = DriverManager.getConnection("jdbc:mysql://192.168.1.25/accounts?user=spider&password=spider");
		      connection = DriverManager.getConnection(dbURL); 
		      
			// con = DriverManager.getConnection("jdbc:sqlserver://MUNIVIE\\MUNIVIE:1433;" +
			//			"databaseName=STAGE;user=ADMINSIO;password=ADMINSIO"); 		
		      

		      statement = connection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
		     
		    } catch (SQLException connectException) {
		      System.out.println(connectException.getMessage());
		      System.out.println(connectException.getSQLState());
		      System.out.println(connectException.getErrorCode());
		      System.exit(1);
		    }
	  }
	 
	private void buildGUI() {
		
		
		okVisite = new JButton("Ajoutez une visite");
		okVisite.addActionListener(new ActionListener() {
	      public void actionPerformed(ActionEvent e) {
	        try {
	          Statement statement = connection.createStatement();
	          int i = statement
	              .executeUpdate("INSERT INTO SUPMASTER.VISITE VALUES('"
	                  + organisationList.getSelectedValue() + "','" 
	                  + regionList.getSelectedValue() + "','" 
	                  + dateInput.getText() + "','"      
	                  + nomInput.getText()            
	                  + "')" );
	               
	          
	          errorText.append("Insertion de " + i + " visite avec succès");
	          
	        } catch (SQLException insertException) {
	          displaySQLErrors(insertException);
	        }
	      }
	    });
		
		
		// TODO Auto-generated method stub
	    Container c = getContentPane();
	    c.setLayout(new FlowLayout());

	    regionList = new JList();
	    loadRegion();
	    regionList.setVisibleRowCount(2);
	    JScrollPane regionListScrollPane = new JScrollPane(
	    		regionList);
	    
	    organisationList = new JList();
	    loadOrganisation();
	    organisationList.setVisibleRowCount(4);
	    JScrollPane organisationListScrollPane = new JScrollPane(
	    		organisationList);
		
	    JPanel first = new JPanel(new GridLayout(0, 2));
	    
	    	    
	    regionText = new JLabel("Région") ;
	    first.add(regionText) ;
	    first.add(regionListScrollPane);
	    
	    organisationTexte = new JLabel("Organisation") ;
	    first.add(organisationTexte);
	    first.add(organisationListScrollPane);
	    
	    dateVisite = new JLabel("Date de la visite") ;
	    dateInput = new JTextField() ;
	    first.add(dateVisite);
	    first.add(dateInput);
	    
	    
	    nomVisiteur = new JLabel("Nom prospecteur") ;
	    nomInput = new JTextField() ;
	    first.add(nomVisiteur);
	    first.add(nomInput);
	    
	    first.add(okVisite);
	    
	    
	    JPanel third = new JPanel();
	    errorText = new JTextArea(5, 30);
	    errorText.setEditable(false);
	    third.add(new JScrollPane(errorText));
	    
	    c.add(first);
	    c.add(third) ;
	    
	    setSize(500, 500);
	    setVisible(true);
	    
	}

	private void init() {
		// TODO Auto-generated method stub
	    connectToDB();

	}
	
	 public SauveVisite() {
		    try {
		    //Class.forName("org.apache.derby.jdbc.EmbeddedDriver").newInstance();
				   Class.forName("net.sourceforge.jtds.jdbc.Driver");


		    } catch (Exception e) {
		      System.err.println("Probleme JTDS");
		      System.exit(1);
		    }
		  }

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		 SauveVisite applicationVisite = new SauveVisite();

		 applicationVisite.addWindowListener(new WindowAdapter() {
		      public void windowClosing(WindowEvent e) {
		        System.exit(0);
		      }
		    });

		 applicationVisite.init();
		 applicationVisite.buildGUI();
		  }

	
	}


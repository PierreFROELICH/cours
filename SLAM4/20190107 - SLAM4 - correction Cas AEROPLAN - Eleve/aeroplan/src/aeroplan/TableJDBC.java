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

public class TableJDBC extends JFrame {

  private JButton getAeroportButton, insertAeroportButton, deleteAeroportButton,
  updateAeroportButton, nextButton, previousButton, lastButton,
      firstButton, gotoButton, freeQueryButton;
  
  //private static String dbURL = "jdbc:sqlserver://MUNIVIE\\MUNIVIE:1433;databaseName=AEROPLAN;user=ADMINSIO;password=ADMINSIO";
	 private static String dbURL = "jdbc:sqlserver://SQLSRV2:1433;databaseName=AEROPLAN;user=SQLTROBERT;password=TEST";


  private JList aeroportList;

 
  
  private JTextField codeOACI, codeAITA, nom,   latitude, longitude, gotoText, freeQueryText;

  private JTextArea errorText;

  private Connection connection;

  private Statement statement;

  private ResultSet rs;

  public TableJDBC() {
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
    aeroportList.setListData(v);
  }

  private void buildGUI() {
    Container c = getContentPane();
    c.setLayout(new FlowLayout());

    aeroportList = new JList();
    loadAeroport();
    aeroportList.setVisibleRowCount(2);
    JScrollPane accountNumberListScrollPane = new JScrollPane(
    		aeroportList);

    gotoText = new JTextField(3);
    freeQueryText = new JTextField(40);

    //Do Get Account Button
    getAeroportButton = new JButton("Récupère les aéroports");
    getAeroportButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
            rs = statement.executeQuery("SELECT * FROM AEROPORT");

          while (rs.next()) {

            if (rs.getString("OACI").equals(
            		aeroportList.getSelectedValue()))
            {
                codeOACI.setText(rs.getString("OACI"));
                codeAITA.setText(rs.getString("AITA"));
                nom.setText(rs.getString("nom"));
                latitude.setText(rs.getString("latitude"));
                longitude.setText(rs.getString("longitude"));
                break;
            }
            
          }

     
            
          
        } catch (SQLException selectException) {
          displaySQLErrors(selectException);
        }
      }
    });

    //Do Insert Account Button
    insertAeroportButton = new JButton("Insérez un nouvel Aéroport");
    insertAeroportButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          Statement statement = connection.createStatement();
          int i = statement
              .executeUpdate("INSERT INTO AEROPORT VALUES('"
                  + codeOACI.getText() + "', " + "'"
                  + codeAITA.getText() + "', " 
                  + nom.getText() + ", "      
                  + latitude.getText() + ", "      
                  + longitude.getText()           
                  + ")" );
               
          
          errorText.append("Insertion de " + i + " aeroports avec succès");
          aeroportList.removeAll();
          loadAeroport();
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

    //Do Delete Account Button
    deleteAeroportButton = new JButton("Supprimez un aéroport");
    deleteAeroportButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          Statement statement = connection.createStatement();
          int i = statement
              .executeUpdate("DELETE FROM AEROPORT WHERE OACI = '"
                  + aeroportList.getSelectedValue() +"'");
          errorText.append("Suppressions " + i + " aeroports avec succès");
          aeroportList.removeAll();
          loadAeroport();
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

    //Do Update Account Button
    updateAeroportButton = new JButton("Mettre à jour un aéroport");
    updateAeroportButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          Statement statement = connection.createStatement();
          int i = statement.executeUpdate("UPDATE AEROPORT "
              + "SET AITA='" + codeAITA.getText() + "', "
              + "nom = '" + nom.getText() + "', " 
              + "latitude = '" + latitude.getText() + "', " 
              + "longitude = '" + longitude.getText() + "'" +    
              "WHERE OACI = '"
              + aeroportList.getSelectedValue()+"'");
          errorText.append("MAJ des aeroports " + i + " lignes avec succès");
          aeroportList.removeAll();
          loadAeroport();
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

    //Do Next Button
    nextButton = new JButton(">");
    nextButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {

          if (!rs.isLast()) {
            rs.next();
            codeOACI.setText(rs.getString("OACI"));
            codeAITA.setText(rs.getString("AITA"));
            nom.setText(rs.getString("nom"));
            latitude.setText(rs.getString("latitude"));
            longitude.setText(rs.getString("longitude"));
          }
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

 
    previousButton = new JButton("<");
    previousButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          if (!rs.isFirst()) {
            rs.previous();
            codeOACI.setText(rs.getString("OACI"));
            codeAITA.setText(rs.getString("AITA"));
            nom.setText(rs.getString("nom"));
            latitude.setText(rs.getString("latitude"));
            longitude.setText(rs.getString("longitude"));  
          }
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

    //Do last Button
    lastButton = new JButton(">|");
    lastButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          rs.last();
          codeOACI.setText(rs.getString("OACI"));
          codeAITA.setText(rs.getString("AITA"));
          nom.setText(rs.getString("nom"));
          latitude.setText(rs.getString("latitude"));
          longitude.setText(rs.getString("longitude"));   
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

    //Do first Button
    firstButton = new JButton("|<");
    firstButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          rs.first();
          codeOACI.setText(rs.getString("OACI"));
          codeAITA.setText(rs.getString("AITA"));
          nom.setText(rs.getString("nom"));
          latitude.setText(rs.getString("latitude"));
          longitude.setText(rs.getString("longitude"));    
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

    //Do gotoButton
    gotoButton = new JButton("Allez à");
    gotoButton.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent e) {
        try {
          rs.absolute(Integer.parseInt(gotoText.getText()));
          codeOACI.setText(rs.getString("OACI"));
          codeAITA.setText(rs.getString("AITA"));
          nom.setText(rs.getString("nom"));
          latitude.setText(rs.getString("latitude"));
          longitude.setText(rs.getString("longitude"));  
        } catch (SQLException insertException) {
          displaySQLErrors(insertException);
        }
      }
    });

  

    JPanel first = new JPanel(new GridLayout(5, 1));
    first.add(accountNumberListScrollPane);
    first.add(getAeroportButton);
    first.add(insertAeroportButton);
    first.add(deleteAeroportButton);
    first.add(updateAeroportButton);

    codeOACI = new JTextField(4);
    codeAITA = new JTextField(3);
    nom = new JTextField(50);
    latitude = new JTextField(15);
    longitude = new JTextField(15);
    
    errorText = new JTextArea(5, 15);
    errorText.setEditable(false);

    JPanel second = new JPanel();
    second.setLayout(new GridLayout(6, 1));
    second.add(codeOACI);
    second.add(codeAITA);
    second.add(nom);
    second.add(latitude);
    second.add(longitude);

    JPanel third = new JPanel();
    third.add(new JScrollPane(errorText));

    JPanel fourth = new JPanel();
    fourth.add(firstButton);
    fourth.add(previousButton);
    fourth.add(nextButton);
    fourth.add(lastButton);
    fourth.add(gotoText);
    fourth.add(gotoButton);

   // JPanel fifth = new JPanel();
   // fifth.add(freeQueryText);

    c.add(first);
    c.add(second);
    c.add(third);
    c.add(fourth);
   //   c.add(fifth);
   // c.add(freeQueryButton);
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
    TableJDBC mouvementsAeroports = new TableJDBC();

    mouvementsAeroports.addWindowListener(new WindowAdapter() {
      public void windowClosing(WindowEvent e) {
        System.exit(0);
      }
    });

    mouvementsAeroports.init();
    mouvementsAeroports.buildGUI();
  }
}


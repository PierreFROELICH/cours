CREATE SCHEMA SUPMASTER;
GO

/* Le libell� d�un cursus correspond � un choix de formation offert par le centre associ� � l�ann�e.
 Exemple : le cursus IM1 correspond � la 1�re ann�e de formation d�Informaticien Manager. 
 T ous les cursus sont disponibles au sein de chaque �tablissement de l�institut. */

CREATE TABLE SUPMASTER.CURSUS 
(ID INT PRIMARY KEY IDENTITY(1,1), 
CODE_CURSUS CHAR(3),
LIBELLE_CURSUS VARCHAR(100)) ;
INSERT INTO SUPMASTER.CURSUS VALUES('IM1','Informaticien Manager 1�re ann�e');
INSERT INTO SUPMASTER.CURSUS VALUES('IM2','Informaticien Manager 2�me ann�e');
INSERT INTO SUPMASTER.CURSUS VALUES('MM1','M�dia Manager 1�re ann�e');
INSERT INTO SUPMASTER.CURSUS VALUES('MM2','M�dia Manager 2�me ann�e');


CREATE TABLE SUPMASTER.ETABLISSEMENT
(ID INT PRIMARY KEY IDENTITY(1,1),
CODE_ETABLISSEMENT VARCHAR(3),
LIB_ETABLISSEMENT VARCHAR(60));

INSERT INTO SUPMASTER.ETABLISSEMENT VALUES('MAR','Marseille');
INSERT INTO SUPMASTER.ETABLISSEMENT VALUES('PAR','Paris');
INSERT INTO SUPMASTER.ETABLISSEMENT VALUES('TOL','Toulouse');


/* La donn�e idEtablissement contient le code de l��tablissement fr�quent� par l��tudiant. Exemple : "mar" pour "Marseille"  */
CREATE TABLE SUPMASTER.ETUDIANT
(ID INT PRIMARY KEY IDENTITY(1,1),
 NOM_ETUDIANT VARCHAR(60),
 PRENOM_ETUDIANT VARCHAR(60),
 ADRESSE_ETUDIANT VARCHAR(100),
 VILLE_ETUDIANT VARCHAR(60), 
 nbContratsEtud INT, 
 idEtablissement INT FOREIGN KEY REFERENCES SUPMASTER.ETABLISSEMENT(ID), 
 idCursus INT FOREIGN KEY REFERENCES SUPMASTER.CURSUS(ID)) 
 ;

 INSERT INTO SUPMASTER.ETUDIANT VALUES('VAILLANT','Monique','12 rue du Bac','Paris',0,2,1);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('COUTURE','Charlie','18 rue de l Universite','Paris',0,2,1);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('GAILLOUX','Marine','27 rue de l Ecole','Paris',0,2,1);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('ROPERT','Martine','32 rue des Maternelles','Paris',0,2,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('CHAUVE','Loic','1 rue du coll�ge','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('CHOUX','Fleur','12 quai aux Fleurs','Marseille',0,1,1);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('ROSE','Epine','14 rue de paris','Marseille',0,1,1);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('MARIE','Anne','14 rue Napoleon','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('TAON','Patrick','32 rue des poissons','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('SUFFIT','Sam','17 rue Taine','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('SIDONIE','Aglae','12 quai de la marine','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('SAMMUT','Leone','8 rue Noe','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('ALATERRE','Marie','14 rue des �toiles','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('TIQUE','Tac','8 rue du jeu de Paume','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('TINGUETTE','Missie','3 rue de l''opera','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('DANSLAMAIN','Paul','12 rue des cygnes','Marseille',0,1,2);
 INSERT INTO SUPMASTER.ETUDIANT VALUES('KOIFER','Jos�pa','7 rue Marboeuf','Marseille',0,1,2);
 

 /* codeApe : code correspondant � un secteur d�activit�, d�fini par l�INSEE */

 CREATE TABLE SUPMASTER.ACTIVITE (
 id INT IDENTITY(1,1) PRIMARY KEY,
 codeAPE CHAR(5) ,
 LIBELLE_APE VARCHAR(100));

 INSERT INTO SUPMASTER.ACTIVITE VALUES('0143Z','�levage de chevaux et d''autres �quid�s');
 INSERT INTO SUPMASTER.ACTIVITE VALUES('1320Z','Tissage');
 INSERT INTO SUPMASTER.ACTIVITE VALUES('4741Z','Commerce de d�tail d''ordinateurs, d''unit�s p�riph�riques et de logiciels en magasin sp�cialis�');
 INSERT INTO SUPMASTER.ACTIVITE VALUES('5610C','Restauration de type rapide');
 INSERT INTO SUPMASTER.ACTIVITE VALUES('5821Z','�dition de jeux �lectroniques');
 INSERT INTO SUPMASTER.ACTIVITE VALUES('5829A','�dition de logiciels syst�me et de r�seau');
 INSERT INTO SUPMASTER.ACTIVITE VALUES('0121Z','Culture de la vigne');

 

 /* La donn�e nbContratsOrg contient le nombre de contrats sign�s par l�organisation */

 CREATE TABLE SUPMASTER.ORGANISATION
 (
 id INT PRIMARY KEY IDENTITY(1,1),
 NOM_ORGANISATION VARCHAR(100),
 ADRESSE_ORGANISATION VARCHAR(200),
 VILLE_ORGANISATION VARCHAR(100),
 NBCONTRATSORG INT,
 IDAPEACTIVITE INT FOREIGN KEY REFERENCES SUPMASTER.ACTIVITE(id)) ;

 INSERT INTO SUPMASTER.ORGANISATION VALUES('SUADEO','14 avenue d''Italie','Paris',4,6);
 INSERT INTO SUPMASTER.ORGANISATION VALUES('Rodeo Circus','2 place du cirque','Martigues',1,1);
 INSERT INTO SUPMASTER.ORGANISATION VALUES('Cannebiere R�paration','12 quai aux armes','Marseille',2,3);
 INSERT INTO SUPMASTER.ORGANISATION VALUES('Provence Nappes','8 rue de la mairie','Toulon',1,2);
 INSERT INTO SUPMASTER.ORGANISATION VALUES('Micromania PACA','10 rue des singes','Marseille',4,5);
 INSERT INTO SUPMASTER.ORGANISATION VALUES('Rapid Pizza Banana','2 rue des angelots','Marseille',2,4);

 
 /* La table Contrat m�morise les informations sur les contrats sign�s par les �tudiants et les organisations. 
 Il y a, pour chacun, une date de signature (attribut dateContrat) et une date de fin (attribut dateFin) 
 qui n�est pas renseign�e pour les contrats en cours*/


 CREATE TABLE SUPMASTER.CONTRAT
 (
 ID INT PRIMARY KEY IDENTITY(1,1) ,
 DATECONTRAT DATE ,
 CARACTERISTIQUES VARCHAR(500),
  DATEFIN DATE ,
  idOrg INT FOREIGN KEY REFERENCES SUPMASTER.ORGANISATION(ID),
  idEtudiant INT FOREIGN KEY REFERENCES SUPMASTER.ETUDIANT(ID) 
  );

  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-20','D�v Logiciel .NET et C# Solution pilotage  - Front end',NULL,1,1);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-12','D�v Logiciel .NET et C# Solution pilotage  - Back end',NULL,1,2);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-08','D�v Logiciel .NET et C# Solution pilotage  - Mod�lisation et donn�es',NULL,1,3);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-25','D�v Logiciel .NET et C# Solution pilotage  - Composants logiciels & Migration J2EE',NULL,1,4);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2016-09-25','D�v Logiciel .NET et C# Solution pilotage  - Composants logiciels & Migration J2EE','2017-07-31',1,4);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-20','Application Web inscription cirque',NULL,2,5);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-12','Suivi ventes et r�paration - R�approvisionnement',NULL,3,6);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-12','Suivi ventes et r�paration - API',NULL,3,7);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-15','Application cliente commande nappes',NULL,4,8);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-16','Application de suivi des commandes',NULL,5,9);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-16','Application de fid�lisation',NULL,5,10);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-16','Application de fid�lisation',NULL,5,11);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-16','Suivi stocks et r�approvisionnement',NULL,5,12);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-10-02','Application de livraison via Web',NULL,6,13);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2016-10-01','Bilan des applicatifs - Maquette Web','2017-07-30',6,13);
  INSERT INTO SUPMASTER.CONTRAT VALUES('2017-10-02','Application Android',NULL,6,14);




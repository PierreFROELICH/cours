-- Question 1 � traiter, et peut �tre 3 ?

CREATE TABLE EMPLOYEUR
(		
   ID_EMPLOYEUR INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
   RAISON_SOCIALE VARCHAR(60)
);

INSERT INTO EMPLOYEUR  VALUES ('SAS');
INSERT INTO EMPLOYEUR  VALUES ('SUADEO');
INSERT INTO EMPLOYEUR  VALUES ('Education Nationale');


-- Question 5 � traiter, peut �tre 6 ???


CREATE TABLE CANDIDAT (
CLEF_CANDIDAT INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
NUMERO_CANDIDAT VARCHAR(50) NOT NULL,
NOM_CANDIDAT VARCHAR(50) NOT NULL ,
PRENOM_CANDIDAT VARCHAR(50) ,
NUMERO_TELEPHONE VARCHAR(14),
DATE_NAISSANCE DATE
 );

INSERT INTO CANDIDAT  VALUES ('NUM_CAN_20180923_001','ROBERT','Timothee','06-23-79-54-28','1989-06-12');
INSERT INTO CANDIDAT  VALUES ('NUM_CAN_20180923_002','DUPOND','Noemie','06-87-79-27-28','1977-04-12');
INSERT INTO CANDIDAT  VALUES ('NUM_CAN_20180923_003','GAUTHIER','Mafalda','06-65-79-27-28','1974-03-22');


-- Question 2 � traiter, peut �tre 3 et 6 ???

CREATE TABLE PERIODE_EMPLOI
(		
   ID_PERIODE INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
   ID_EMPLOYEUR INT NOT NULL FOREIGN KEY REFERENCES EMPLOYEUR(ID_EMPLOYEUR),
   CLEF_CANDIDAT INT NOT NULL FOREIGN KEY REFERENCES CANDIDAT(CLEF_CANDIDAT),
   DATE_EMBAUCHE DATE,
   DATE_DEPART DATE
);

INSERT INTO PERIODE_EMPLOI  VALUES (1,1,'1998-01-01','2001-02-01');
INSERT INTO PERIODE_EMPLOI  VALUES (1,1,'2002-01-01','2003-12-31');
INSERT INTO PERIODE_EMPLOI  VALUES (2,1,'2004-01-01','2014-06-30');
INSERT INTO PERIODE_EMPLOI  VALUES (3,1,'2004-09-01',NULL);

-- Question7 � traiter


CREATE TABLE POSTE (
CLEF_POSTE INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
NUM_AFFICHAGE VARCHAR(50) NOT NULL,
NOM_POSTE VARCHAR(60) ) ;

INSERT INTO POSTE VALUES ('POSTE_201809_IT_CDP_001','Chef de projet Big Data');
INSERT INTO POSTE VALUES ('POSTE_201809_IT_AMOA_001','AMOA Refonte processus comptables');
INSERT INTO POSTE VALUES ('POSTE_201809_IT_DEVFE_001','Developpeur Front End Angular Web vitrine');
INSERT INTO POSTE VALUES ('POSTE_201809_IT_MKT_001','Chef de produit Mobilit� Nvx Usages');


-- Question 8 ici ???
CREATE TABLE CANDIDAT_POSTE (
CLEF_CANDIDAT_POSTE INT IDENTITY(1,1) NOT NULL PRIMARY KEY, 
CLEF_POSTE INT NOT NULL FOREIGN KEY REFERENCES POSTE(CLEF_POSTE),
CLEF_CANDIDAT INT NOT NULL FOREIGN KEY REFERENCES POSTE(CLEF_POSTE)
);

INSERT INTO CANDIDAT_POSTE VALUES (1,1);
INSERT INTO CANDIDAT_POSTE VALUES (2,1);
INSERT INTO CANDIDAT_POSTE VALUES (3,1);
INSERT INTO CANDIDAT_POSTE VALUES (4,2);
INSERT INTO CANDIDAT_POSTE VALUES (2,3);


-- Question 9


CREATE TABLE DIPLOME (
CLEF_DIPLOME INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
NOM_DIPLOME VARCHAR(50) NOT NULL) ;

INSERT INTO DIPLOME  VALUES ('Maitrise Econometrie');
INSERT INTO DIPLOME  VALUES ('Maitrise Informatique appliqu�e');
INSERT INTO DIPLOME  VALUES ('DEA Economie Ressources Humaines');
INSERT INTO DIPLOME  VALUES ('DESS Techniques D�cisions');


-- Question 10
CREATE TABLE EST_DIPLOME (
CLEF_EST_DIPLOME INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
CLEF_DIPLOME INT NOT NULL FOREIGN KEY REFERENCES DIPLOME(CLEF_DIPLOME),
CLEF_CANDIDAT INT NOT NULL FOREIGN KEY REFERENCES CANDIDAT(CLEF_CANDIDAT)
);

INSERT INTO EST_DIPLOME VALUES (1,1);
INSERT INTO EST_DIPLOME VALUES (2,1);
INSERT INTO EST_DIPLOME VALUES (3,1);
INSERT INTO EST_DIPLOME VALUES (4,1);
INSERT INTO EST_DIPLOME VALUES (3,2);



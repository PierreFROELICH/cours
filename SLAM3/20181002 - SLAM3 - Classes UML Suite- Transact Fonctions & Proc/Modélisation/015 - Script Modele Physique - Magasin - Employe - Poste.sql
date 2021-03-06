CREATE TABLE MAGASIN
(		
   CLEF_AGENCE INT IDENTITY(1,1) PRIMARY KEY,
   VILLE VARCHAR(60)
);

INSERT INTO MAGASIN  VALUES ('Paris');
INSERT INTO MAGASIN  VALUES ('Lyon');


CREATE TABLE EMPLOYE
(		
   CLEF_EMPLOYE INT IDENTITY(1,1) PRIMARY KEY,
   CLEF_AGENCE INT FOREIGN KEY REFERENCES MAGASIN(CLEF_AGENCE),
   CLEF_POSTE INT FOREIGN KEY REFERENCES POSTE(CLEF_POSTE),
   NOM_EMPLOYE VARCHAR(60),
   PRENOM_EMPLOYE VARCHAR(60),
   SALAIRE FLOAT
);

INSERT INTO EMPLOYE  VALUES (1,3,'HADDAD', 'George',50000);
INSERT INTO EMPLOYE  VALUES (1,1,'CHEVALIER', 'Monique',60000);
INSERT INTO EMPLOYE  VALUES (1,2,'BECENBOIS','Paul', 35000);
INSERT INTO EMPLOYE  VALUES (2,3,'DELPECH','Francoise', 45000);
INSERT INTO EMPLOYE  VALUES (2,1,'LIN','Caroline', 55000);



CREATE TABLE POSTE
(		
   CLEF_POSTE INT IDENTITY(1,1) PRIMARY KEY,
   NOM_POSTE VARCHAR(60)
   )

INSERT INTO POSTE VALUES ('Gérant') ;
INSERT INTO POSTE VALUES ('Manutentionnaire') ;
INSERT INTO POSTE VALUES ('Vendeur') ;
INSERT INTO POSTE VALUES ('Développeur') ;
INSERT INTO POSTE VALUES ('Vigil') ;
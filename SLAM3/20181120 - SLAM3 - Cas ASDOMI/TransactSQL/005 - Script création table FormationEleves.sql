CREATE SCHEMA PROCS;
GO
CREATE TABLE PROCS.FORMATIONELEVES
(
ID_ELEVE INT IDENTITY(1,1) PRIMARY KEY,
NOM_ELEVE VARCHAR(50) NOT NULL ,
NB_HEURES_COURS_INFO INT ,
CODE_FILIERE VARCHAR(10)
);
GO						
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('CADET', 730 , 'SLAM ENC');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('DURAND', 530 , 'Ecole 42');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('RAKOTO', 650 , 'SLAM LARM');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('YOYO', 700 , 'SLAM ENC');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('HADDAD', 680 , 'SISR ENC');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('DIABATE', 1200 , 'Ecole 42');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('DIABY', 700 , 'SLAM ENC');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('HENRIQUES', 700 , 'SLAM ENC');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('RAINI', 670 , 'SISR ENC');
INSERT INTO PROCS.FORMATIONELEVES  VALUES ('FERREIRA', 730 , 'SLAM ENC');

GO





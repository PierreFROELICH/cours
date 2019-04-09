CREATE SCHEMA FOOT;
GO

CREATE TABLE FOOT.JOUEURS
(
   ID_JOUEUR INT NOT NULL PRIMARY KEY IDENTITY(1,1) ,
   NOM_JOUEUR varchar(40),
   PRENOM_JOUEUR VARCHAR(40),
   AGE INT,
   ID_EQUIPE INT ,
   ID_PAYS INT
)
;
						
						
INSERT INTO FOOT.JOUEURS (NOM_JOUEUR,PRENOM_JOUEUR,AGE,ID_EQUIPE,ID_PAYS) VALUES 
('BUFFON','Gianluigi',40, 1,1),
('SILVA','Thiago',34,1,2),
('MARQUINHOS','',24,1,2),
('DI MARIA','Angel',30,1,3),
('NEYMAR','Junior',26,1,2),
('MBAPPE','Kylian',19,1,4),
('MESSI','Lionel',31,2,3),
('UMTITI','Samuel',24,2,4),
('RAMI','Adil',32,1,4),
('PAYET','Dimitri',31,4,4),
('ROLANDO','Jorge',33,4,7),
('GUSTAVO','Luiz',31,4,2),
('SARR','Bouna',26,4,4),
('RADONJIC','Nemanja',22,4,6),
('VARANE','Raphael',25,3,4),
('MARCELO','',30,3,2),
('BENZEMA','Karim',30,3,4)
;

CREATE TABLE FOOT.EQUIPES
(
   ID_EQUIPE INT NOT NULL PRIMARY KEY ,
   NOM_EQUIPE varchar(40),
   ID_PAYS INT
)
;
						
						
INSERT INTO FOOT.EQUIPES VALUES 
(1,'Paris Saint Germain',4),
(2,'FC Barcelone',5),
(3,'Real Madrid',5),
(4,'Olympique de Marseille',4),
(5,'Etoile rouge de Belgrade',6),
(6,'Olympique Lyonnais',4)
;


CREATE TABLE FOOT.PAYS
(
    ID_PAYS INT,
    NOM_PAYS VARCHAR(30),
    ID_CONTINENT INT
 );
 
 INSERT INTO FOOT.PAYS VALUES 
 (1,'Italie',1),
 (2,'Bresil',2),
 (3,'Argentine',2),
 (4,'France',1),
 (5,'Espagne',1),
 (6,'Serbie',1),
 (7,'Portugal',1)
 ;
 
 CREATE TABLE FOOT.CONTINENT
(
    ID_CONTINENT INT NOT NULL PRIMARY KEY,
    NOM_CONTINENT VARCHAR(30)
 );
 
 INSERT INTO FOOT.CONTINENT VALUES 
 (1,'Europe'),
 (2,'Amerique du Sud')
 ;
 
 CREATE TABLE FOOT.MATCHES
(
    ID_MATCH INT NOT NULL PRIMARY KEY ,
    ID_EQUIPE_LOCAL INT,
    ID_EQUIPE_VISITEUR INT,
    ID_COMPETITION INT ,
    DATE_MATCH DATE,
    SCORE_LOCAL INT,
    SCORE_VISITEUR INT
)
;

INSERT INTO FOOT.MATCHES
VALUES
    (1, 1 , 2, 1, '2019-05-02', 5, 2),
    (2, 2 , 1, 1, '2019-05-16', 3, 4 ),
    (3, 1 , 3, 1, '2019-04-05', 2, 2),
    (4, 3 , 1, 1, '2019-04-19', 1, 3),
    (5, 1 , 4, 2, '2019-03-27', 3, 0),
    (6, 4 , 1, 2, '2019-04-12', 2, 2),
    (7, 2 , 3, 3, '2019-05-11', 1, 1),  
    (8, 3 , 2, 3, '2019-05-18', 2, 1) ,
    (9, 1 , 6, 1, '2019-01-23', 3, 0)   
;

CREATE TABLE FOOT.COMPETITION
(
    ID_COMPETITION INT NOT NULL PRIMARY KEY ,
    LIBELLE_COMPETITION VARCHAR(40) )    ;

INSERT INTO FOOT.COMPETITION VALUES
    (1, 'Ligue des champions'),
    (2, 'Championnat de France'),
    (3, 'Championnat Espagne')
    ;
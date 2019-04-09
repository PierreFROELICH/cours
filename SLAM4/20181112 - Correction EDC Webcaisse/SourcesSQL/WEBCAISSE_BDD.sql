CREATE SCHEMA WEBCAISSE;
GO
CREATE TABLE WEBCAISSE.CONSO
(
ID INT NOT NULL PRIMARY KEY IDENTITY(1,1) ,
NOM VARCHAR(40) ,
PRENOM VARCHAR(40) ,
MAIL VARCHAR(60),
TEL VARCHAR(10)
) ;
INSERT INTO WEBCAISSE.CONSO VALUES
('ROBERT', 'Timoth�e','robert.btssio@gmail.com','0615914718'),
('DUPOND', 'Jean','jean.dupond@gmail.com','0628461514'),
('DUPONT', 'Jean','jean.dupont@gmail.com','0628461516'),
('DURAND', 'Nathalie','nathalie.durand@gmail.com','0614121315'),
('DURANT', 'Fran�ois','nathalie.durant@gmail.com','0623121315'),
('COULIBALY', 'Anabelle','anabelle.coulibaly@gmail.com','0625621315'),
('MACARON', 'Patricia','patricia.macaron@gmail.com','0623659841'),
('TAINE', 'Tania','tania.taine@gmail.com','0665365984'),
('COMANCHE','Claude','claude.comanche@outlook.fr','0754879565')
;

CREATE TABLE WEBCAISSE.CONSOFIDELE
(
ID INT NOT NULL PRIMARY KEY FOREIGN KEY REFERENCES WEBCAISSE.CONSO(ID) ,
DATENAISS DATE ,
NBPOINTS INT ,
DATEINSCRIPTION DATE);

INSERT INTO WEBCAISSE.CONSOFIDELE VALUES
(1,'1971-06-15',140,'2016-01-27') ,
(4,'1995-02-15',60,'2017-02-01') ,
(8,'2000-05-04',20,'2018-05-12') ;

CREATE TABLE WEBCAISSE.VENTE
(
ID INT NOT NULL PRIMARY KEY IDENTITY(1,1) ,
IDCONSO INT NOT NULL FOREIGN KEY REFERENCES WEBCAISSE.CONSO(ID),
DATEVENTE DATE ,
MONTANTVENTE INT );

INSERT INTO WEBCAISSE.VENTE VALUES
(1,'2016-01-27',530),
(1,'2017-05-12',715),
(1,'2017-06-15',320),
(1,'2017-12-14',278),
(2,'2017-05-15',120),
(2,'2017-06-16',30),
(3,'2017-08-21',80),
(4,'2017-02-01',650),
(4,'2017-03-24',60),
(4,'2017-05-12',135),
(5,'2018-02-21',35),
(6,'2018-03-31',42),
(7,'2017-09-22',60),
(7,'2018-10-05',45),
(8,'2018-05-12',174),
(8,'2018-07-22',35),
(8,'2018-09-30',128),
(8,'2018-10-30',20),
(9,'2018-10-27',45)

;

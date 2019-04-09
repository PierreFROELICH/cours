CREATE SCHEMA DANE;
GO
CREATE TABLE DANE.CategorieUsage (id int PRIMARY KEY, libelle VARCHAR(50));

INSERT INTO DANE.CategorieUsage values 
(101, 'Travail collaboratif'),
(102, 'Courrier �lectronique'),
(103, 'Parcours p�dagogique'),
(108, 'Vie scolaire '),
(110, 'Formations')
;

CREATE TABLE DANE.TypeUtilisateur (id int PRIMARY KEY, libelle VARCHAR(50));

INSERT INTO DANE.TypeUtilisateur values 
(1, 'Eleve'),
(2, 'Enseignant'),
(3, 'Parent'),
(4, 'Entreprise'),
(5, 'Administration')

;

CREATE TABLE DANE.ApplicationENT (id int PRIMARY KEY, nom VARCHAR(50), 
dateInstallation DATE, version INT, idCategorieUsage int);

INSERT INTO DANE.ApplicationENT values 
(26, 'WebMail','2008-10-10',2,102),
(27, 'Moodle','2009-07-15',3,101),
(28, 'MOOC','2011-07-15',3,110),
(29, 'viescolaire','2012-11-15',3,108),
(30, 'pronotes','2012-11-15',4,108),
(31, 'Fortigate VPN','2015-09-03',4,101),
(40, 'Cisco Education','2016-09-10',6,103),
(41, 'Microsoft Dreamspark','2016-09-10',4,103),
(42, 'IBM Bluemix','2017-09-05',1,103)

;
/***
DELETE FROM ApplicationENT ;
*/


CREATE TABLE DANE.Etablissement (rne VARCHAR(8) PRIMARY KEY, libelle VARCHAR(50),type VARCHAR(3));

INSERT INTO DANE.Etablissement values 
('9940001A', 'Lyc�e Vanille Bourbon','LYC'),
('9940001B', 'Coll�ge Le Busard','CLG'),
('0750707L', 'Ecole Nationale de Commerce','PRE')
;

CREATE TABLE DANE.AppEtabActivees (idApplicationENT int,  idTypeUtilisateur int,
rneEtablissement VARCHAR(8) );

INSERT INTO DANE.AppEtabActivees VALUES
(26,1,'0750707L'),
(26,2,'0750707L'),
(26,5,'0750707L'),
(29,1,'0750707L'),
(29,2,'0750707L'),
(29,3,'0750707L'),
(29,5,'0750707L'),
(30,1,'0750707L'),
(30,2,'0750707L'),
(30,3,'0750707L'),
(30,5,'0750707L'),
(26,2,'9940001A'),
(27,2,'9940001B'),
(27,1,'9940001B')
;

CREATE TABLE DANE.HistoUsageEtablissement 
(idCategorieUsage int, rneEtablissement VARCHAR(8),dateObservation DATE, nbCnx INT) ;

INSERT INTO  DANE.HistoUsageEtablissement VALUES
(101,'9940001A','2017-05-31',2),
(102,'9940001B','2017-05-31',13),
(101,'0750707L','2017-11-30',18),
(102,'0750707L','2017-11-30',53),
(108,'0750707L','2017-11-30',62),
(110,'0750707L','2017-11-30',9),
(101,'0750707L','2017-12-31',14),
(102,'0750707L','2017-12-31',45),
(108,'0750707L','2017-12-31',58),
(110,'0750707L','2017-12-10',7),
(101,'0750707L','2017-11-24',5),
(102,'0750707L','2017-11-14',13),
(108,'0750707L','2017-11-17',24),
(110,'0750707L','2017-12-05',9),
(101,'0750707L','2017-12-08',21),
(101,'0750707L','2017-12-11',15),
(101,'0750707L','2017-12-14',18),
(110,'0750707L','2017-12-15',7),
(102,'0750707L','2017-12-16',5),
(102,'0750707L','2017-12-17',13),
(108,'0750707L','2017-12-22',15),
(110,'0750707L','2017-12-23',7),
(110,'0750707L','2017-12-24',8),
(110,'0750707L','2017-12-25',3),
(101,'0750707L','2017-12-26',14),
(110,'0750707L','2017-12-27',23),
(101,'9940001A','2018-09-01',2),
(101,'9940001A','2018-09-02',2),
(101,'9940001A','2018-09-03',5),
(101,'9940001A','2018-09-04',7),
(101,'9940001A','2018-09-05',9),
(101,'9940001A','2018-09-06',12),
(101,'9940001A','2018-09-07',9),
(102,'9940001B','2018-09-01',13),
(101,'0750707L','2018-09-01',18),
(102,'0750707L','2018-09-01',53),
(108,'0750707L','2018-09-01',62),
(110,'0750707L','2018-09-01',9),
(101,'0750707L','2018-10-01',14),
(102,'0750707L','2018-10-01',45),
(108,'0750707L','2018-10-01',58),
(110,'0750707L','2018-10-02',7),
(101,'0750707L','2018-10-02',5),
(102,'0750707L','2018-10-02',13),
(108,'0750707L','2018-10-02',24),
(110,'0750707L','2018-10-02',9),
(101,'0750707L','2018-10-03',21),
(101,'0750707L','2018-10-04',15),
(101,'0750707L','2018-10-05',18),
(110,'0750707L','2018-10-03',7),
(102,'0750707L','2018-10-03',5),
(102,'0750707L','2018-10-04',13),
(108,'0750707L','2018-10-04',15),
(110,'0750707L','2018-10-04',7),
(110,'0750707L','2018-10-05',8),
(110,'0750707L','2018-10-05',3),
(101,'0750707L','2018-10-06',14),
(110,'0750707L','2018-10-06',23),
(101,'0750707L','2018-10-07',11),
(110,'0750707L','2018-10-07',23),
(102,'0750707L','2018-10-07',15),
(102,'0750707L','2018-10-09',13),
(108,'0750707L','2018-10-08',15),
(110,'0750707L','2018-10-08',7),
(110,'0750707L','2018-10-09',11),
(110,'0750707L','2018-10-10',9),
(101,'0750707L','2018-10-10',8),
(110,'0750707L','2018-10-11',14)
;

CREATE TABLE DANE.HistoCnxEtablissement (rneEtablissement VARCHAR(8), dateObservation DATE, nbCnx INT) ;
INSERT INTO DANE.HistoCnxEtablissement VALUES
('9940001A','2015-10-08',8),
('9940001A','2015-10-31',28),
('9940001A','2015-11-10',52),
('9940001A','2016-01-10',12),
('9940001A','2016-01-10',17),
('9940001A','2016-02-10',22),
('9940001A','2016-03-11',14),
('9940001A','2017-05-31',15),
('9940001B','2017-06-30',20),
('0750707L','2017-11-01',75),
('0750707L','2017-11-02',87),
('0750707L','2017-11-03',35),
('0750707L','2017-11-04',64),
('0750707L','2017-11-05',48),
('0750707L','2017-11-06',84),
('0750707L','2017-11-07',88),
('0750707L','2017-11-08',72),
('0750707L','2017-11-09',47),
('0750707L','2017-11-10',53),
('0750707L','2017-11-11',75),
('0750707L','2017-11-12',87),
('0750707L','2017-11-13',35),
('0750707L','2017-11-14',64),
('0750707L','2017-11-15',48),
('0750707L','2017-11-16',84),
('0750707L','2017-11-17',88),
('0750707L','2017-11-18',72),
('0750707L','2017-11-19',67),
('0750707L','2017-11-20',53),
('0750707L','2017-11-21',75),
('0750707L','2017-11-22',59),
('0750707L','2017-11-23',48),
('0750707L','2017-11-24',54),
('0750707L','2017-11-25',51),
('0750707L','2017-11-26',74),
('0750707L','2017-11-27',78),
('0750707L','2017-11-28',72),
('0750707L','2017-11-29',62),
('0750707L','2017-11-30',60),
('9940001A','2018-10-08',8),
('9940001A','2018-10-31',28),
('9940001A','2018-11-10',52),
('9940001A','2018-01-10',12),
('9940001A','2018-01-10',17),
('9940001A','2018-02-10',22),
('9940001A','2018-03-11',14),
('9940001A','2018-05-31',15),
('9940001B','2018-06-30',20),
('0750707L','2018-09-01',75),
('0750707L','2018-09-02',87),
('0750707L','2018-09-03',35),
('0750707L','2018-09-04',64),
('0750707L','2018-09-05',48),
('0750707L','2018-09-06',84),
('0750707L','2018-09-07',88),
('0750707L','2018-09-08',72),
('0750707L','2018-09-09',47),
('0750707L','2018-09-10',53),
('0750707L','2018-09-11',75),
('0750707L','2018-09-12',87),
('0750707L','2018-09-13',35),
('0750707L','2018-09-14',64),
('0750707L','2018-09-15',48),
('0750707L','2018-09-16',84),
('0750707L','2018-09-17',88),
('0750707L','2018-09-18',72),
('0750707L','2018-09-19',67),
('0750707L','2018-09-20',53),
('0750707L','2018-09-21',75),
('0750707L','2018-09-22',59),
('0750707L','2018-09-23',48),
('0750707L','2018-09-24',54),
('0750707L','2018-09-25',51),
('0750707L','2018-09-26',74),
('0750707L','2018-09-27',78),
('0750707L','2018-09-28',72),
('0750707L','2018-09-29',62),
('0750707L','2018-09-30',60)

;
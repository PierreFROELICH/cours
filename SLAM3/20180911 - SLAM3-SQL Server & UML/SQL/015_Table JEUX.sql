CREATE TABLE SOFTWARE.REF_LIB_JEUX
(
					

   ID_JEU INT,
   CODE_JEU varchar(5) ,
   LIB_JEU varchar(60)
   )
;

INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (1,'DM1','Demon Souls ');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (2,'DS1','Dark Souls ');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (3,'DS2','Dark Souls 2');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (4,'SC1','Starcraft');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (5,'SC2','Starcraft 2');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (6,'SC2W','Starcraft 2 Wings Of Liberty');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (7,'WC1','Warcraft');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (8,'WC2','Warcraft 3');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (9,'GTA4','Grand Theft Auto IV');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (10,'GTA5','Grand Theft Auto V');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (11,'RDR','Red Dead Redemption');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (12,'DD','Divine Divinity');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (13,'DDOS','Divinity - Original Sin');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (14,'BAY1','Bayonetta 1');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (15,'BAY2','Bayonetta 2');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (16,'SO1','Sonic Generation');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (17,'COD1','Call of Duty');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (18,'COD3','Call of Duty 3');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (19,'BOPS1','Call of Duty - Black Ops');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (20,'BOPS2','Call of Duty - Black Ops 2');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (21,'MWF1','Call of Duty - Modern Warfare 1');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (22,'MWF2','Call of Duty - Modern Warfare 2');
INSERT INTO SOFTWARE.REF_LIB_JEUX VALUES (23,'MWF3','Call of Duty - Modern Warfare 3');


CREATE TABLE SOFTWARE.JEUX
(
					

   ID_JEU INT,
   ID_DEVELOPPEUR INT,
   DATE_SORTIE DATE,
   PRIX_SORTIE NUMERIC(8,2)
)
;
INSERT INTO SOFTWARE.JEUX VALUES (1,1,'2009-02-05',40.0);
INSERT INTO SOFTWARE.JEUX VALUES (2,1,'2011-09-01',50.0);
INSERT INTO SOFTWARE.JEUX VALUES (3,1,'2014-03-01',60.0);
INSERT INTO SOFTWARE.JEUX VALUES (4,2,'1998-01-01',20.0);
INSERT INTO SOFTWARE.JEUX VALUES (5,2,'2010-07-27',40.0);
INSERT INTO SOFTWARE.JEUX VALUES (6,2,'2013-03-12',50.0);
INSERT INTO SOFTWARE.JEUX VALUES (7,2,'1994-01-01',20.0);
INSERT INTO SOFTWARE.JEUX VALUES (8,2,'2012-07-01',40.0);
INSERT INTO SOFTWARE.JEUX VALUES (9,3,'2008-01-01',40.0);
INSERT INTO SOFTWARE.JEUX VALUES (10,3,'2013-10-10',50.0);
INSERT INTO SOFTWARE.JEUX VALUES (11,3,'2010-05-18',45.0);
INSERT INTO SOFTWARE.JEUX VALUES (12,4,'2002-09-20',35.0);
INSERT INTO SOFTWARE.JEUX VALUES (13,4,'2014-04-02',60.0);
INSERT INTO SOFTWARE.JEUX VALUES (14,5,'2010-01-05',55.0);
INSERT INTO SOFTWARE.JEUX VALUES (15,5,'2014-10-01',65.0);
INSERT INTO SOFTWARE.JEUX VALUES (16,6,'2011-11-01',50.0);
INSERT INTO SOFTWARE.JEUX VALUES (17,7,'2003-09-29',45.0);
INSERT INTO SOFTWARE.JEUX VALUES (18,8,'2006-11-07',60.0);
INSERT INTO SOFTWARE.JEUX VALUES (19,8,'2010-11-09',65.0);
INSERT INTO SOFTWARE.JEUX VALUES (20,8,'2012-11-13',65.0);
INSERT INTO SOFTWARE.JEUX VALUES (21,7,'2007-11-06',50.0);
INSERT INTO SOFTWARE.JEUX VALUES (22,7,'2009-11-10',55.0);
INSERT INTO SOFTWARE.JEUX VALUES (23,7,'2011-11-08',60.0);
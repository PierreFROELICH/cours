create schema music;
go
CREATE TABLE music.INSTRUMENTS (id int PRIMARY KEY, intitule VARCHAR(50));

INSERT INTO music.instruments values 
(1, 'Batterie'),
(2, 'Piano'),
(3, 'Guitare'),
(4, 'Basse')
;

CREATE TABLE music.TYPE_COURS (id int PRIMARY KEY, libelle VARCHAR(50));
INSERT INTO music.TYPE_COURS VALUES (1,'individuel'), (2,'Collectif');

CREATE TABLE music.COURS (id int PRIMARY KEY, libelle VARCHAR(50), agemini int, agemaxi int, nbplaces int, id_instrument int,
id_type_cours int,
FOREIGN KEY (id_instrument) REFERENCES music.instruments (id),
FOREIGN KEY (id_type_cours) REFERENCES music.type_cours (id)

);

INSERT INTO music.COURS values 
(1, 'batterie', 8,NULL, NULL,1,1),
(2, 'piano', 8,NULL, NULL,2,1),
(3, 'atelier jazz', 12, NULL, 10, NULL, 2),
(4, 'hard rock', 16, 60, 5, 3, 2) ;

CREATE TABLE music.TRANCHES (id int PRIMARY KEY, quotient_min int);
INSERT INTO music.tranches VALUES
(1,0),(2, 251),(3, 426),(4, 681),(5, 935),(6, 1801);

CREATE TABLE music.COUTER (id_type_cours int,  id_tranche int , montant int,
PRIMARY KEY (id_type_cours,id_tranche)) ;
INSERT INTO music.couter VALUES 
(1, 1, 60.00),(1, 2, 96.00),(1, 3, 126.00),(1, 4, 192.00),(1, 5, 282.00),(1, 6, 330.00),
(2, 1, 30.00),(2, 2, 48.00),(2, 3, 63.00),(2, 4, 96.00),(2, 5, 141.00),(2, 6, 165.00); 


CREATE TABLE music.ELEVES (id INTEGER PRIMARY KEY, nom VARCHAR(50), PRENOM VARCHAR(50), date_naiss date, id_responsable int) ;
INSERT INTO music.ELEVES VALUES
(1,'MURAT','Pierre',NULL, 1) ,
(2,'FRISONS','Roche',NULL, 1) ,
(3,'CALMANT','Anne',NULL, 1) ,
(4,'BEN ABDERRAZIK','Atika',NULL, 2)
;

CREATE TABLE music.inscriptions
(
id INTEGER NOT NULL  ,
nombre_de_paiements INTEGER NOT NULL ,
id_eleve INTEGER NOT NULL  ,
id_cours INTEGER NOT NULL  ,
PRIMARY KEY (id) ,
FOREIGN KEY (id_eleve) REFERENCES music.ELEVES(id) ,
FOREIGN KEY (id_cours) REFERENCES music.cours(id)
);


INSERT INTO music.inscriptions VALUES
(1,3,1,1), (2,1,1,2), (3,2,1,3),(4,2,2,1),(5,1,2,2),
(6,1,3,4),(7,1,4,2);


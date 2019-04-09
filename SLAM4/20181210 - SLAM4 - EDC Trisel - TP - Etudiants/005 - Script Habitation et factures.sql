create schema trisel
go
CREATE TABLE trisel.habitation (
	id INTEGER PRIMARY KEY,
	adresse TEXT,
	idUsager INTEGER);

	INSERT INTO trisel.habitation VALUES(1,'Rue Carnot 94 700 MA',1) ;
	INSERT INTO trisel.habitation VALUES(2,'Rue Blanqui 94 250',1) ;
	INSERT INTO trisel.habitation VALUES(3,'Pouilly en Vézelay',1) ;
	INSERT INTO trisel.habitation VALUES(4,'Cap Antibes',2) ;
	INSERT INTO trisel.habitation VALUES(5,'Noirmoutiers',2) ;
	INSERT INTO trisel.habitation VALUES(6,'Lille',2) ;

	CREATE TABLE trisel.FACTURE (
	id INTEGER PRIMARY KEY,
	idHabitation INTEGER references trisel.habitation(id),
	anMois CHAR(7),
	nomFichier VARCHAR(60));

	INSERT INTO trisel.FACTURE VALUES(1,1,'2018/01','Facture Janvier 2018');
	INSERT INTO trisel.FACTURE VALUES(2,1,'2018/02','Facture Février 2018');
	INSERT INTO trisel.FACTURE VALUES(3,1,'2018/03','Facture Mars 2018');
	INSERT INTO trisel.FACTURE VALUES(4,1,'2018/04','Facture Avril 2018');
	INSERT INTO trisel.FACTURE VALUES(5,2,'2018/01','Facture Janvier 2018');
	INSERT INTO trisel.FACTURE VALUES(6,2,'2018/02','Facture Février 2018');
	INSERT INTO trisel.FACTURE VALUES(7,3,'2018/01','Facture Janvier 2018');
	INSERT INTO trisel.FACTURE VALUES(8,4,'2018/01','Facture Janvier 2018');
	INSERT INTO trisel.FACTURE VALUES(9,4,'2018/02','Facture Février 2018');
	INSERT INTO trisel.FACTURE VALUES(10,5,'2018/07','Facture Juillet 2018');
	INSERT INTO trisel.FACTURE VALUES(11,5,'2018/08','Facture Aout 2018');
	INSERT INTO trisel.FACTURE VALUES(12,6,'2018/01','Facture Janvier 2018');
	INSERT INTO trisel.FACTURE VALUES(13,6,'2018/02','Facture Février 2018');
	INSERT INTO trisel.FACTURE VALUES(14,6,'2018/03','Facture Mars 2018');
	INSERT INTO trisel.FACTURE VALUES(15,6,'2018/04','Facture Avril 2018');
	INSERT INTO trisel.FACTURE VALUES(16,6,'2018/05','Facture Mai 2018');
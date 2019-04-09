CREATE TABLE TRISEL.SOCLE(
	id INTEGER PRIMARY KEY identity(1,1),
	SOCLE CHAR(5),
	LOCALISATION VARCHAR(100),
	idCommune int);

	insert into TRISEL.SOCLE VALUES ('C32.1','Carrefour de la grande croix',5);

	CREATE TABLE TRISEL.EMPLACEMENT(
	id INTEGER PRIMARY KEY identity(1,1),
	emplacement integer,
	frequence integer,
	idSocle integer,
	idTypePAV integer);

	insert into TRISEL.EMPLACEMENT VALUES(2,10,1,3);

	CREATE TABLE TRISEL.LEVEE(
	id INTEGER PRIMARY KEY identity(1,1),
	dateLevee date,
	quantite integer,
	idEmplacement integer,
	idTypeDechet integer,
	idDechetterie integer);

	insert into TRISEL.LEVEE VALUES('03/09/2014',250,NULL,6,1);
			


	create table trisel.TypeDechet (
	id INTEGER PRIMARY KEY identity(1,1),
	code char(3) ,
	libelle varchar(70));

	insert into trisel.TypeDechet values('Vet','Vêtements');
	insert into trisel.TypeDechet values('Ver','Verre');
	insert into trisel.TypeDechet values('Epc','Emballages papier cartons');
	insert into trisel.TypeDechet values('Hui','Huiles');
	insert into trisel.TypeDechet values('Bp','Batteries et piles');
	insert into trisel.TypeDechet values('Boi','Bois');
	insert into trisel.TypeDechet values('Fer','Fer et ferraille');
	insert into trisel.TypeDechet values('Gra','Gravats');
	insert into trisel.TypeDechet values('Enc','Encombrants');
	insert into trisel.TypeDechet values('Ac','acier');
	insert into trisel.TypeDechet values('Pla','plastique');

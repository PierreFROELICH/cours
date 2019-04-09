

	create table trisel.dechetterie (
	id integer primary key identity(1,1),
	code char(2) not null,
	adresse varchar(200),
	telephone varchar(14),
	horaires varchar(100), 
	nom varchar(20)
	);

	insert into trisel.dechetterie values('D1','ZI le Grand Bois 33750','05 57 65 44 55','10h à 13h – 14h à 18h','P. Barimont');
	insert into trisel.dechetterie values('D2','ZA la Galletière 33670','05 57 98 77 66','9h à 13h30 – 14h30 à 18h','S. Provain');

	create table trisel.TypeDechetD (
	id INTEGER PRIMARY KEY identity(1,1),
	code char(3) ,
	libelle varchar(70));

	insert into trisel.TypeDechetD values('Vet','Vêtements');
	insert into trisel.TypeDechetD values('Ver','Verre');
	insert into trisel.TypeDechetD values('Epc','Emballages papier cartons');
	insert into trisel.TypeDechetD values('Hui','Huiles');
	insert into trisel.TypeDechetD values('Bp','Batteries et piles');
	insert into trisel.TypeDechetD values('Boi','Bois');
	insert into trisel.TypeDechetD values('Fer','Fer et ferraille');
	insert into trisel.TypeDechetD values('Gra','Gravats');
	insert into trisel.TypeDechetD values('Enc','Encombrants');


	create table trisel.LeveeDechetterie (
	id INTEGER PRIMARY KEY,
	idDechetterie integer ,
	idTypeDechetD integer,
	dateLevee date,
	quantiteEnlevee integer);


insert into trisel.LeveeDechetterie values(12654,1,6,'2014-09-03',250);
insert into trisel.LeveeDechetterie values(13077,1,8,'2014-09-05',480);
insert into trisel.LeveeDechetterie values(13098,1,7,'2014-09-06',4200);
insert into trisel.LeveeDechetterie values(14122,2,7,'2014-09-17',4780);
insert into trisel.LeveeDechetterie values(14356,2,9,'2014-09-04',5200);
insert into trisel.LeveeDechetterie values(18763,2,9,'2014-09-07',5400);

create table trisel.TypePAV (
	id INTEGER PRIMARY KEY identity(1,1),
	code char(4) ,
	libelle varchar(70),
	couleur varchar(30));

insert into trisel.TypePAV values('VT','vêtement','orange');
insert into trisel.TypePAV values('EPAA','Emballages plastiques','bleu');
insert into trisel.TypePAV values('EPC','Emballages papiers et cartons','jaunes');

create table trisel.TypeDechetPAV (
	id INTEGER PRIMARY KEY identity(1,1),
	idTypePAV integer,
	code char(3) ,
	libelle varchar(70));

	insert into trisel.TypeDechetPAV values(1,'Vet','Vêtements');
	insert into trisel.TypeDechetPAV values(2,'Ac','acier');
	insert into trisel.TypeDechetPAV values(2,'Pla','plastique');

create table trisel.CommunauteCommunes (
	id INTEGER PRIMARY KEY identity(1,1),
	code CHAR(2),
	libelle varchar(100));

insert into trisel.CommunauteCommunes values('C1','DE L ENTRE DEUX MERS OUEST');
insert into trisel.CommunauteCommunes values('C2','DES COTEAUX BORDELAIS');
insert into trisel.CommunauteCommunes values('C3','DES PORTES DE L ENTRE DEUX MERS');
insert into trisel.CommunauteCommunes values('C4','DU BRANNAIS');



create table trisel.Commune (
	id INTEGER PRIMARY KEY identity(1,1),
	code char(3) ,
	nom varchar(100),
	population integer,
	nbFoyers integer,
	idCommunauteCommunes integer);


insert into trisel.Commune values ('C11', 'CAMIAC-ET-SAINT-DENIS',367,136,1);
insert into trisel.Commune values ('C12', 'DAIGNAC',491,182,1);
insert into trisel.Commune values ('C13', 'DARDENAC',91,34,1);
insert into trisel.Commune values ('C14', 'ESPIET',708,262,1);



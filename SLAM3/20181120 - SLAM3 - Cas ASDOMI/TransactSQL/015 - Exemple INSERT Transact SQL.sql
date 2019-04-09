BEGIN TRANSACTION
DECLARE @nom_etudiant VARCHAR(50), @nb_heures INT, @nom_filiere VARCHAR(10)  ;
SET @nom_etudiant = 'ROBERT';
SET @nb_heures = 600;
SET @nom_filiere = 'UNIV P1' ;
INSERT INTO PROCS.FORMATIONELEVES VALUES(@nom_etudiant,@nb_heures,@nom_filiere);
COMMIT TRANSACTION;
CREATE TRIGGER SUPMASTER.majNbContrats
ON SUPMASTER.CONTRAT AFTER INSERT AS
BEGIN

UPDATE SUPMASTER.ORGANISATION
SET NBCONTRATSORG = NBCONTRATSORG +1
WHERE ID = (SELECT IDORG FROM INSERTED )

END

/*** Dernier étudiant ajouté après création du Trigger ***/
-- INSERT INTO SUPMASTER.ETUDIANT VALUES('AIMARRE','Jean','7 rue escalade','Marseille',0,1,2);  

/**** Test Insertion Nouveau Contrat ***/
-- INSERT INTO SUPMASTER.CONTRAT VALUES('2017-09-16','Application de fidélisation - Tests unitaires',NULL,5,15);

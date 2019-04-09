CREATE TRIGGER BRETAGNE.VERIF_CHEF_EQUIPE
ON BRETAGNE.DOSSIER_DEMENAGEMENT AFTER UPDATE AS
BEGIN
IF UPDATE(dos_chefEquipe)
	BEGIN
	DECLARE @dos_chefEquipe INTEGER;
	/**** Code à compléter  ****/
	
	
	IF @dos_chefEquipe IS NULL
		BEGIN
		ROLLBACK TRANSACTION;
		THROW 50004, 'Impossible le chef ne participe pas',1;
		END
	END
END


/**** Tests du TRIGGER ***/
/*** 1er test: cà ne doit pas marcher ***/
UPDATE BRETAGNE.DOSSIER_DEMENAGEMENT
SET dos_chefEquipe = 7
WHERE dos_numero=4 ;


/**** Tests du TRIGGER ***/
/*** 2ème test: la modification doit marcher ***/
UPDATE BRETAGNE.DOSSIER_DEMENAGEMENT
SET dos_chefEquipe = 10
WHERE dos_numero=4 ;


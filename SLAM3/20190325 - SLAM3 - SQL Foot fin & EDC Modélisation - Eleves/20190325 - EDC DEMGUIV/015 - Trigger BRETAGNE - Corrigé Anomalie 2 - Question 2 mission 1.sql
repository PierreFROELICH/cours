CREATE TRIGGER BRETAGNE.VERIF_CHEF_EQUIPE
ON BRETAGNE.DOSSIER_DEMENAGEMENT AFTER UPDATE AS
BEGIN
IF UPDATE(dos_chefEquipe)
	BEGIN
	DECLARE @dos_chefEquipe INTEGER;
	SELECT @dos_chefEquipe = par_demenageur FROM BRETAGNE.participer
	WHERE par_demenageur = (SELECT dos_chefEquipe FROM INSERTED)
	and par_dossier = (SELECT dos_numero FROM INSERTED)
	;
	IF @dos_chefEquipe IS NULL
		BEGIN
		ROLLBACK TRANSACTION;
		THROW 50004, 'Impossible le chef ne participe pas',1;
		END
	END
END


UPDATE BRETAGNE.DOSSIER_DEMENAGEMENT
SET dos_chefEquipe = 7
WHERE dos_numero=4 ;


UPDATE BRETAGNE.DOSSIER_DEMENAGEMENT
SET dos_chefEquipe = 10
WHERE dos_numero=4 ;


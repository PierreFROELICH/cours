USE TEST;
GO
CREATE FUNCTION BRETAGNE.demenageursPresents(@idAgence int,@dateDebut date, @dateFin date)
	RETURNS TABLE
	AS
	RETURN	(SELECT * FROM SALARIE
	WHERE sal_agence = @idAgence and sal_type = 'D'
	and sal_id not in (
		select con_salarie from BRETAGNE.CONGE
		where con_dateFin >= @dateDebut and con_dateDebut <= @dateFin)
	and sal_id not in (
		select par_demenageur from BRETAGNE.PARTICIPER INNER JOIN BRETAGNE.DOSSIER_DEMENAGEMENT
		ON par_dossier = dos_numero
		AND dos_dateFinDem >= @dateDebut and dos_dateDebutDem <= @dateFin)
		);

GO

CREATE FUNCTION BRETAGNE.occupationVehicules(@journee date) RETURNS TABLE
AS
RETURN (SELECT * FROM dossier_demenagement
				INNER JOIN utiliser ON dos_numero = uti_dossier
				AND dos_dateDebutDem <= @journee and dos_dateFinDem >= @journee
				INNER JOIN vehicule ON veh_id = uti_vehicule
) ;

		

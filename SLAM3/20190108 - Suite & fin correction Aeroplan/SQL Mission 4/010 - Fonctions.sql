GO
CREATE FUNCTION la_distance (@id_mouvement INTEGER, @unite VARCHAR) RETURNS REAL AS
/* La section DECLARE permet de déclarer les variables */
BEGIN
DECLARE
	@resultat REAL,	@dist REAL;

	/*récupération de la distance et affectation de la variable dist */
	SELECT @dist = DISTANCE  
		FROM dbo.mouvement WHERE id=@id_mouvement;

	SET @resultat = @dist;
	IF (@unite='m')
		/* 1 mile nautique correspond à 1.852 kilomètre */
		SET @resultat = @dist / 1.852;
	RETURN @resultat;
END
GO
SELECT dbo.la_distance(1221,'k') AS RES ;

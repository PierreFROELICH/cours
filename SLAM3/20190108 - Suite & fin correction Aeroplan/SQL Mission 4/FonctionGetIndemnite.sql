
CREATE FUNCTION get_param_indemnites 
(@id_mouvement INTEGER, @p_seuil_retard INTEGER, 
@p_montant1 INTEGER, @p_montant2 INTEGER, @p_montant3 INTEGER, 
@p_distance1 INTEGER, @p_distance2 INTEGER)
RETURNS REAL AS
BEGIN
DECLARE
@MNT_INDEMNITE REAL, @DISTANCE REAL, @estIntra BIT;

SELECT @DISTANCE = distance, @estIntra = estIntracom  FROM volsRetardes
WHERE idMvt=@id_mouvement ;

SET @MNT_INDEMNITE = @p_montant3;
IF (@DISTANCE < @p_distance1) SET @MNT_INDEMNITE = @p_montant1;
IF ((@DISTANCE > @p_distance1) AND( @DISTANCE < @p_distance2)
AND  (@estIntra = 1)
) SET @MNT_INDEMNITE = @p_montant2;

RETURN @MNT_INDEMNITE;
END
GO

SELECT dbo.get_param_indemnites(1221,180,250,400,600,1500,3000) 
AS mnt_indem ;

;

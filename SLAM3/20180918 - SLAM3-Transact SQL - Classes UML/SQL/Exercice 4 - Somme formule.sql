BEGIN
DECLARE @SOMME INT =0 ;
SET @SOMME = (100 *101)/2 ;
PRINT CAST(@SOMME AS VARCHAR(20)) ;
END;
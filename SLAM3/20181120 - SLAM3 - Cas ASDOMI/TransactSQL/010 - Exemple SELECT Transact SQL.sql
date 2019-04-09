DECLARE @nom_etudiant VARCHAR(50), @nom_filiere VARCHAR(10)  ='SLAM ENC' ;
BEGIN
	SELECT @nom_etudiant = LOWER(fmt.nom_eleve)
	FROM PROCS.FORMATIONELEVES FMT
	WHERE CODE_FILIERE=@nom_filiere
END;
PRINT 'On trouve un certain nombre d etudiants: ' + CAST(@@rowcount AS CHAR(3)) ;
PRINT 'Pour la filière: '+@nom_filiere;
PRINT 'Le dernier étudiant de la sélection est: '+@nom_etudiant ;
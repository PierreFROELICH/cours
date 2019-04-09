SELECT F.TITRE_FILM
FROM CINEMA.FILMS F
INNER JOIN CINEMA.DIRECTION_FILM DF
ON F.ID_FILM = DF.ID_FILM
INNER JOIN CINEMA.REALISATEURS R
ON DF.ID_REALISATEUR = R.ID_REALISATEUR
WHERE R.NOM_REALISATEUR = 'Kubrick'
AND R.PRENOM_REALISATEUR = 'Stanley'
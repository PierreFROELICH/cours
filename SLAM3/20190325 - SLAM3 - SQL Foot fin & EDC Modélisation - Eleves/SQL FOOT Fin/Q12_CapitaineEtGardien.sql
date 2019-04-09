SELECT count(DISTINCT j.nomprenom_joueur)
FROM FOOTEDC.capitaines c
INNER JOIN 
footedc.PAYS_FOOTBALL pf ON c.id_equipe=pf.id_pays
INNER JOIN FOOTEDC.joueurs j  ON c.ID_JOUEUR_CAPITAINE=j.ID_JOUEUR
AND j.POSITION_TERRAIN='GK';
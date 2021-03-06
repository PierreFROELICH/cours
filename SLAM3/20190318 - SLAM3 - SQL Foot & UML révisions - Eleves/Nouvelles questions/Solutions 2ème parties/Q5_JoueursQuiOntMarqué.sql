SELECT bd.id_match,pf.nom_pays, j.nomprenom_joueur, COUNT(id_match)
FROM footedc.but_detail bd
INNER JOIN  footedc.PAYS_FOOTBALL pf
ON bd.ID_EQUIPE = pf.ID_PAYS
INNER JOIN FOOTEDC.JOUEURS J ON bd.id_JOUEUR = j.ID_JOUEUR
GROUP BY bd.id_match,pf.nom_pays, j.nomprenom_joueur
ORDER BY bd.id_match;